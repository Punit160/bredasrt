<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PowerPack;
use App\Imports\PowerPackImport;
use Excel;
use Illuminate\Support\Facades\DB;
use Session;

class PowerPackController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('powerpack.add-powerpack', $data);
    }
    public function create(Request $request)
    {
        $request->validate([
            'beneficiary_contact' => 'required|min:10|max:10',

        ]);

        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $power = new PowerPack();
        $power->serial_num = $request->serial_num;
        $power->empanelled_agency = $request->empanelled_agency;
        $power->beneficiary_name = $request->beneficiary_name;
        $power->beneficiary_contact = $request->beneficiary_contact;
        $power->beneficiary_gender = $request->beneficiary_gender;
        $power->latitude = $request->latitude;
        $power->longitude = $request->longitude;
        $power->district = $request->district;
        $power->beneficiary_address = $request->beneficiary_address;
        $power->contractor_name = $request->contractor_name;
        $power->material_dispatch = $request->material_dispatch;
        $power->material_dispatch_date = $request->material_dispatch_date;
        $power->installation_status = $request->installation_status;
        $power->installation_date = $request->installation_date;
        $power->inspection_status = $request->inspection_status;
        $power->remarks = $request->remarks;
        $power->inspection_status_date = $request->inspection_status_date;
        $power->payment_85 = $request->payment_85;
        $power->payment_date = $request->payment_date;
        $power->amc1 = $request->amc1;
        $power->amc2 = $request->amc2;
        $power->amc3 = $request->amc3;
        $power->amc4 = $request->amc4;
        $power->amc5 = $request->amc5;
        $power->amc_1_doc = $request->amc_1_doc;
        $power->amc_2_doc = $request->amc_2_doc;
        $power->amc_3_doc = $request->amc_3_doc;
        $power->amc_4_doc = $request->amc_4_doc;
        $power->amc_5_doc = $request->amc_5_doc;
        if ($request->file('amc_1_doc')) {
            $image = $request->file('amc_1_doc');
            $imageName = "amc_1_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_1_doc = $imageName;
        }
        if ($request->file('amc_2_doc')) {
            $image = $request->file('amc_2_doc');
            $imageName = "amc_2_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_2_doc = $imageName;
        }
        if ($request->file('amc_3_doc')) {
            $image = $request->file('amc_3_doc');
            $imageName = "amc_3_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_3_doc = $imageName;
        } 
        
        if ($request->file('amc_4_doc')) {
            $image = $request->file('amc_4_doc');
            $imageName = "amc_4_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_4_doc = $imageName;
        }
        if ($request->file('amc_5_doc')) {
            $image = $request->file('amc_5_doc');
            $imageName = "amc_5_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_5_doc = $imageName;
        }
      
        $power->remarks = $request->remarks;
        $power->created_by = $created_by;
        $power->state = $state;
        $power->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['power'] = PowerPack::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('powerpack.view-powerpack', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['power'] = PowerPack::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('powerpack.update-powerpack', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'beneficiary_contact' => 'required|min:10|max:10',

        ]);
        $id = $request->id;
        $power = PowerPack::findOrFail($id);
        $power->serial_num = $request->serial_num;
        $power->empanelled_agency = $request->empanelled_agency;
        $power->beneficiary_name = $request->beneficiary_name;
        $power->beneficiary_contact = $request->beneficiary_contact;
        $power->beneficiary_gender = $request->beneficiary_gender;
        $power->latitude = $request->latitude;
        $power->longitude = $request->longitude;
        $power->district = $request->district;
        $power->beneficiary_address = $request->beneficiary_address;
        $power->contractor_name = $request->contractor_name;
        $power->material_dispatch = $request->material_dispatch;
        $power->material_dispatch_date = $request->material_dispatch_date;
        $power->installation_status = $request->installation_status;
        $power->installation_date = $request->installation_date;
        $power->inspection_status = $request->inspection_status;
        $power->remarks = $request->remarks;
        $power->inspection_status_date = $request->inspection_status_date;
        $power->payment_85 = $request->payment_85;
        $power->payment_date = $request->payment_date;
        $power->amc1 = $request->amc1;
        $power->amc2 = $request->amc2;
        $power->amc3 = $request->amc3;
        $power->amc4 = $request->amc4;
        $power->amc5 = $request->amc5;
        $power->amc_1_doc = $request->amc_1_doc;
        $power->amc_2_doc = $request->amc_2_doc;
        $power->amc_3_doc = $request->amc_3_doc;
        $power->amc_4_doc = $request->amc_4_doc;
        $power->amc_5_doc = $request->amc_5_doc;
        if ($request->file('amc_1_doc')) {
            $image = $request->file('amc_1_doc');
            $imageName = "amc_1_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_1_doc = $imageName;
        }
        if ($request->file('amc_2_doc')) {
            $image = $request->file('amc_2_doc');
            $imageName = "amc_2_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_2_doc = $imageName;
        }
        if ($request->file('amc_3_doc')) {
            $image = $request->file('amc_3_doc');
            $imageName = "amc_3_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_3_doc = $imageName;
        } 
        
        if ($request->file('amc_4_doc')) {
            $image = $request->file('amc_4_doc');
            $imageName = "amc_4_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_4_doc = $imageName;
        }
        if ($request->file('amc_5_doc')) {
            $image = $request->file('amc_5_doc');
            $imageName = "amc_5_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->amc_5_doc = $imageName;
        }
      
        $power->remarks = $request->remarks;
     
        $power->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }
    
    
        
    public function powerpackdash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
         $data['query'] = DB::table('power_packs')
        ->select(
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_dispatch = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_dispatch != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation_status = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation_status != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN inspection_status = "YES" THEN id END) AS inspection_done'),
            DB::raw('COUNT(CASE WHEN inspection_status != "YES" THEN id END) AS inspection_not_done'),
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


        $data['districts'] = DB::table('power_packs')
            ->select(
            'district',
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_dispatch = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_dispatch != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN installation_status = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation_status != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN inspection_status = "YES" THEN id END) AS inspection_done'),
            DB::raw('COUNT(CASE WHEN inspection_status != "YES" THEN id END) AS inspection_not_done'),
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


        return view('powerpack.powerpack-dash', $data);
    }
    
                  
     public function main_powerpack_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'supplied'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('material_dispatch','YES')->get();
        }
        elseif($status == 'not-supplied'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('material_dispatch','!=','YES')->get();
        }
        elseif($status == 'installation-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('installation_status','YES' )->get();
        }
         elseif($status == 'installation-not-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('installation_status','!=','YES' )->get();
        }
        elseif($status == 'inspection-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('inspection_status','YES' )->get();
        }
         elseif($status == 'inspection-not-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('inspection_status','!=','YES' )->get();
        }
        elseif($status == 'payment-85'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('payment_85','YES' )->get();
        }
         elseif($status == 'payment-not-85'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('payment_85','!=','Yes' )->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc1','YES' )->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc1','!=','Yes' )->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc2','YES' )->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc2','!=','Yes' )->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc3','YES' )->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc3','!=','Yes' )->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc4','YES' )->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc4','!=','Yes' )->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc5','YES' )->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc5','!=','Yes' )->get();
        }
         return view('powerpack.view-powerpack', $data);
       
    }
    
     public function district_powerpack_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'supplied'){
        $data['power'] = DB::table('power_packs')->where('state',$state)->where('material_dispatch','YES')->where('district', $district)->get();
        }
        elseif($status == 'not-supplied'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('material_dispatch','!=','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('installation_status','YES' )->where('district', $district)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('installation_status','!=','YES' )->where('district', $district)->get();
        }
             elseif($status == 'inspection-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('inspection_status','YES' )->where('district', $district)->get();
        }
         elseif($status == 'inspection-not-done'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('inspection_status','!=','YES' )->where('district', $district)->get();
        }
        elseif($status == 'payment-85'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('payment_85','YES' )->where('district', $district)->get();
        }
         elseif($status == 'payment-not-85'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('payment_85','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc1','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc1','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc2','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc2','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc3','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc3','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc4','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc4','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc5','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('amc5','!=','Yes' )->where('district', $district)->get();
        }
          elseif($status == 'district'){
            $data['power'] = DB::table('power_packs')->where('state',$state)->where('district', $district)->get();
        }
           return view('powerpack.view-powerpack', $data);
       
    }
    
}
