<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offgrid;
use App\Imports\OffgridImport;
use App\Models\Jammu;
use App\Models\JammuModule;
use Illuminate\Support\Facades\DB;
use Session;
use Excel;
class OffgridController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('offgrid.add-offgrid', $data);
    }
    public function create(Request $request)
    {
        $validator = $request->validate([
            'mobile_no' => 'required|digit:10',
        
        ]);
        $state= $request->session()->get('state');
        $created_by= $request->session()->get('login');
        $off = new Offgrid();
        $off->work_order_no = $request->work_order_no;
        $off->work_order_date = $request->work_order_date;
        $off->invoice_no = $request->invoice_no;
        $off->invoice_date = $request->invoice_date;
        $off->beneficiary_name = $request->beneficiary_name;
        $off->mobile_no = $request->mobile_no;
        $off->district = $request->district;
        $off->plant_capacity = $request->plant_capacity;
        $off->material_supply = $request->material_supply;
        $off->material_supply_date = $request->material_supply_date;
        $off->material_payment = $request->material_payment;
        $off->contractor_name = $request->contractor_name;
        $off->installation = $request->installation;
        $off->date_of_installation = $request->date_of_installation;
        $off->plant_connection = $request->plant_connection;
        $off->satyapan = $request->satyapan;
        $off->pdi = $request->pdi;
        $off->payment = $request->payment;
        $off->amount = $request->amount;
        $off->remarks = $request->remarks;
        $off->created_by =$created_by;
        $off->state =$state;
        $off->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['off'] = Offgrid::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('offgrid.view-offgrid', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['off'] = Offgrid::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('offgrid.update-offgrid', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $off = Offgrid::findOrFail($id);
        $off->work_order_no = $request->work_order_no;
        $off->work_order_date = $request->work_order_date;
        $off->invoice_no = $request->invoice_no;
        $off->invoice_date = $request->invoice_date;
        $off->beneficiary_name = $request->beneficiary_name;
        $off->mobile_no = $request->mobile_no;
        $off->district = $request->district;
        $off->plant_capacity = $request->plant_capacity;
        $off->material_supply = $request->material_supply;
        $off->material_supply_date = $request->material_supply_date;
        $off->material_payment = $request->material_payment;
        $off->contractor_name = $request->contractor_name;
        $off->installation = $request->installation;
        $off->date_of_installation = $request->date_of_installation;
        $off->plant_connection = $request->plant_connection;
        $off->satyapan = $request->satyapan;
        $off->pdi = $request->pdi;
        $off->payment = $request->payment;
        $off->amount = $request->amount;
        $off->remarks = $request->remarks;
        $off->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }



     public function upload_offgrid(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        return view('offgrid.upload-offgrid', $data);
    }


    public function upload(Request $request)
    {

        set_time_limit(0);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $filePath = $request->file('offgrid');
        $import = new offgridImport($state,$created_by);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();

        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
    

   public function offgriddash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');

          $data['query'] = DB::table('offgrids')
        ->select(
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment != "YES" THEN id END) AS pay_not_85'),
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


        $data['vendors'] = DB::table('offgrids')
            ->select(
                'contractor_name',
                DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment != "YES" THEN id END) AS pay_not_85'),
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

        $data['districts'] = DB::table('offgrids')
            ->select(
                'district',
           DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN material_payment = "YES" THEN id END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN material_payment != "YES" THEN id END) AS material_payment_not_done'),
            DB::raw('COUNT(CASE WHEN payment = "YES" THEN id END) AS pay_85'),
            DB::raw('COUNT(CASE WHEN payment != "YES" THEN id END) AS pay_not_85'),
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


        return view('offgrid.offgrid-dash', $data);
    }
    
    
                
     public function main_offgrid_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'supplied'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_supply','YES')->get();
        }
        elseif($status == 'not-supplied'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_supply','!=','YES')->get();
        }
        elseif($status == 'installation-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('installation','YES' )->get();
        }
         elseif($status == 'installation-not-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('installation','!=','YES' )->get();
        }
        elseif($status == 'material-payment-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_payment','YES' )->get();
        }
         elseif($status == 'material-payment-not-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_payment','!=','YES' )->get();
        }
        elseif($status == 'payment-85'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('payment','YES' )->get();
        }
         elseif($status == 'payment-not-85'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('payment','!=','YES' )->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc1','YES' )->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc1','!=','YES' )->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc2','YES' )->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc2','!=','YES' )->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc3','YES' )->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc3','!=','YES' )->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc4','YES' )->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc4','!=','YES' )->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc5','YES' )->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc5','!=','YES' )->get();
        }
          return view('offgrid.view-offgrid', $data);
       
    }
    
     public function district_offgrid_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'supplied'){
        $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_supply','YES')->where('district', $district)->get();
        }
        elseif($status == 'not-supplied'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_supply','!=','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('installation','YES' )->where('district', $district)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('installation','!=','YES' )->where('district', $district)->get();
        }
           elseif($status == 'material-payment-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_payment','YES' )->where('district', $district)->get();
        }
         elseif($status == 'material-payment-not-done'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('material_payment','!=','YES' )->where('district', $district)->get();
        }
        elseif($status == 'payment-85'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('payment','YES' )->where('district', $district)->get();
        }
         elseif($status == 'payment-not-85'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('payment','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc1','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc1','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc2','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc2','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc3','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc3','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc4','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc4','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc5','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('amc5','!=','YES' )->where('district', $district)->get();
        }
          elseif($status == 'district'){
            $data['off'] = DB::table('offgrids')->where('state',$state)->where('district', $district)->get();
        }
          return view('offgrid.view-offgrid', $data);
       
    }
}
