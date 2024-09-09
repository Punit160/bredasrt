<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ongrid;
use App\Imports\OngridImport;
use App\Models\OngridModule;
use Illuminate\Support\Facades\DB;
use Session;
use Excel;

class OngridController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('ongrid.add-ongrid', $data);
    }
    public function create(Request $request)
    {
        $request->validate([
            'contact_number' => 'required|min:10|max:10',

        ]);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $on = new Ongrid();
        $on->work_order_no = $request->work_order_no;
        $on->work_order_date = $request->work_order_date;
        $on->beneficiary_name = $request->beneficiary_name;
        $on->contact_number = $request->contact_number;
        $on->district = $request->district;
        $on->pin = $request->pin;
        $on->invoice_no = $request->invoice_no;
        $on->invoice_date = $request->invoice_date;
        $on->material_supply = $request->material_supply;
        $on->material_payment = $request->material_payment;
        $on->plant_capacity = $request->plant_capacity;
        $on->contractor_name = $request->contractor_name;
        $on->firm = $request->firm;
        $on->contractor_number = $request->contractor_number;
        $on->meter_status = $request->meter_status;
        $on->payment_85 = $request->payment_85;
        $on->payment_date = $request->payment_date;
        $on->remarks = $request->remarks;
        $on->created_by = $created_by;
        $on->state = $state;
        $on->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['on'] = Ongrid::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('ongrid.view-ongrid', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['on'] = Ongrid::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('ongrid.update-ongrid', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $on = Ongrid::findOrFail($id);
        $on->work_order_no = $request->work_order_no;
        $on->work_order_date = $request->work_order_date;
        $on->beneficiary_name = $request->beneficiary_name;
        $on->contact_number = $request->contact_number;
        $on->district = $request->district;
        $on->pin = $request->pin;
        $on->invoice_no = $request->invoice_no;
        $on->invoice_date = $request->invoice_date;
        $on->material_supply = $request->material_supply;
        $on->material_supply_date = $request->material_supply_date;
        $on->material_payment = $request->material_payment;
        $on->plant_capacity = $request->plant_capacity;
        $on->contractor_name = $request->contractor_name;
        $on->firm = $request->firm;
        $on->contractor_number = $request->contractor_number;
        $on->meter_status = $request->meter_status;
        $on->payment_85 = $request->payment_85;
        $on->payment_date = $request->payment_date;
        $on->remarks = $request->remarks;
        $on->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }



    public function upload_ongrid(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        return view('ongrid.upload-ongrid', $data);
    }


    public function upload(Request $request)
    {

        set_time_limit(0);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $filePath = $request->file('ongrid');
        $import = new OngridImport($state, $created_by);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();

        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
    
    
    public function ongriddash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');

          $data['query'] = DB::table('ongrids')
        ->select(
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment_85 = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment_85 != "YES" THEN id END) AS pay_not_85'),
            DB::raw('COUNT(CASE WHEN amc1 = "YES" THEN id END) AS amc1'),
            DB::raw('COUNT(CASE WHEN amc1 != "YES" THEN id END) AS amc_not_1'),
            DB::raw('COUNT(CASE WHEN amc2 = "YES" THEN id END) AS amc2'),
            DB::raw('COUNT(CASE WHEN amc2 != "YES" THEN id END) AS amc_not_2'),
            DB::raw('COUNT(CASE WHEN amc3 = "YES" THEN id END) AS amc3'),
            DB::raw('COUNT(CASE WHEN amc3 != "YES" THEN id END) AS amc_not_3'),
            DB::raw('COUNT(CASE WHEN amc4 = "YES" THEN id END) AS amc4'),
            DB::raw('COUNT(CASE WHEN amc4 != "YES" THEN id END) AS amc_not_4'),
            DB::raw('COUNT(CASE WHEN amc5 = "YES" THEN id END) AS amc5'),
            DB::raw('COUNT(CASE WHEN amc5 != "YES" THEN id END) AS amc_not_5'),
        )
        ->where('state',$state)
        ->first();


        $data['vendors'] = DB::table('ongrids')
            ->select(
                'contractor_name',
                DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment_85 = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment_85 != "YES" THEN id END) AS pay_not_85'),
            DB::raw('COUNT(CASE WHEN amc1 = "YES" THEN id END) AS amc1'),
            DB::raw('COUNT(CASE WHEN amc1 != "YES" THEN id END) AS amc_not_1'),
            DB::raw('COUNT(CASE WHEN amc2 = "YES" THEN id END) AS amc2'),
            DB::raw('COUNT(CASE WHEN amc2 != "YES" THEN id END) AS amc_not_2'),
            DB::raw('COUNT(CASE WHEN amc3 = "YES" THEN id END) AS amc3'),
            DB::raw('COUNT(CASE WHEN amc3 != "YES" THEN id END) AS amc_not_3'),
            DB::raw('COUNT(CASE WHEN amc4 = "YES" THEN id END) AS amc4'),
            DB::raw('COUNT(CASE WHEN amc4 != "YES" THEN id END) AS amc_not_4'),
            DB::raw('COUNT(CASE WHEN amc5 = "YES" THEN id END) AS amc5'),
            DB::raw('COUNT(CASE WHEN amc5 != "YES" THEN id END) AS amc_not_5'),
            )
            ->groupBy('contractor_name')
            ->where('state', $state)->get();

        $data['districts'] = DB::table('ongrids')
            ->select(
                'district',
           DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment_85 = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment_85 != "YES" THEN id END) AS pay_not_85'),
            DB::raw('COUNT(CASE WHEN amc1 = "YES" THEN id END) AS amc1'),
            DB::raw('COUNT(CASE WHEN amc1 != "YES" THEN id END) AS amc_not_1'),
            DB::raw('COUNT(CASE WHEN amc2 = "YES" THEN id END) AS amc2'),
            DB::raw('COUNT(CASE WHEN amc2 != "YES" THEN id END) AS amc_not_2'),
            DB::raw('COUNT(CASE WHEN amc3 = "YES" THEN id END) AS amc3'),
            DB::raw('COUNT(CASE WHEN amc3 != "YES" THEN id END) AS amc_not_3'),
            DB::raw('COUNT(CASE WHEN amc4 = "YES" THEN id END) AS amc4'),
            DB::raw('COUNT(CASE WHEN amc4 != "YES" THEN id END) AS amc_not_4'),
            DB::raw('COUNT(CASE WHEN amc5 = "YES" THEN id END) AS amc5'),
            DB::raw('COUNT(CASE WHEN amc5 != "YES" THEN id END) AS amc_not_5'),
            )
            ->groupBy('district')
            ->where('state', $state)->get();


        return view('ongrid.ongrid-dash', $data);
    }
    
    
                
     public function main_ongrid_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'supplied'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_supply','YES')->get();
        }
        elseif($status == 'not-supplied'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_supply','!=','YES')->get();
        }
        elseif($status == 'installation-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('installation','YES' )->get();
        }
         elseif($status == 'installation-not-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('installation','!=','YES' )->get();
        }
        elseif($status == 'material-payment-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_payment','YES' )->get();
        }
         elseif($status == 'material-payment-not-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_payment','!=','YES' )->get();
        }
        elseif($status == 'payment-85'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('payment_85','YES' )->get();
        }
         elseif($status == 'payment-not-85'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('payment_85','!=','Yes' )->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc1','YES' )->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc1','!=','Yes' )->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc2','YES' )->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc2','!=','Yes' )->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc3','YES' )->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc3','!=','Yes' )->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc4','YES' )->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc4','!=','Yes' )->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc5','YES' )->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc5','!=','Yes' )->get();
        }
          return view('ongrid.view-ongrid', $data);
       
    }
    
     public function district_ongrid_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'supplied'){
        $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_supply','YES')->where('district', $district)->get();
        }
        elseif($status == 'not-supplied'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_supply','!=','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('installation','YES' )->where('district', $district)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('installation','!=','YES' )->where('district', $district)->get();
        }
           elseif($status == 'material-payment-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_payment','YES' )->where('district', $district)->get();
        }
         elseif($status == 'material-payment-not-done'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('material_payment','!=','YES' )->where('district', $district)->get();
        }
        elseif($status == 'payment-85'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('payment_85','YES' )->where('district', $district)->get();
        }
         elseif($status == 'payment-not-85'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('payment_85','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc1','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc1','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc2','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc2','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc3','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc3','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc4','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc4','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc5','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('amc5','!=','Yes' )->where('district', $district)->get();
        }
          elseif($status == 'district'){
            $data['on'] = DB::table('ongrids')->where('state',$state)->where('district', $district)->get();
        }
          return view('ongrid.view-ongrid', $data);
       
    }
}
