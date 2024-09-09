<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpSsl;
use Illuminate\Support\Facades\DB;
use Session;

class UpSSlController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('up.ssl.add-upssl', $data);
    }
    public function create(Request $request)
    {
       
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $upssl = new UpSsl();
        $upssl->s_no = $request->s_no;
        $upssl->fy = $request->fy;
        $upssl->state = $request->state;
        $upssl->district = $request->district;
        $upssl->village = $request->village;
        $upssl->scheme = $request->scheme;
        $upssl->uid = $request->uid;
        $upssl->beneficiary_name = $request->beneficiary_name;
        $upssl->contact = $request->contact;
        $upssl->installed_date = $request->installed_date;
        $upssl->payment_85 = $request->payment_85;
        $upssl->amc1 = $request->amc1;
        $upssl->amc2 = $request->amc2;
        $upssl->amc3 = $request->amc3;
        $upssl->amc4 = $request->amc4;
        $upssl->amc5 = $request->amc5;
        if ($request->file('doc_submit')) {
            $image = $request->file('doc_submit');
            $imageName = "docsubmit" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $upssl->doc_submit = $imageName;
        } 
        $upssl->remarks = $request->remarks;
        $upssl->created_by = $created_by;
        $upssl->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['ssl'] = UpSsl::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('up.ssl.view-upssl', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['ssl'] = UpSsl::find($id);

        return view('up.ssl.edit-upssl', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $upssl = UpSsl::findOrFail($id);
        $upssl->s_no = $request->s_no;
        $upssl->fy = $request->fy;
        $upssl->state = $request->state;
        $upssl->district = $request->district;
        $upssl->village = $request->village;
        $upssl->scheme = $request->scheme;
        $upssl->uid = $request->uid;
        $upssl->beneficiary_name = $request->beneficiary_name;
        $upssl->contact = $request->contact;
        if($request->installed_date!=null)
        {
        $upssl->installed_date = $request->installed_date;
        }
        $upssl->payment_85 = $request->payment_85;
        $upssl->amc1 = $request->amc1;
        $upssl->amc2 = $request->amc2;
        $upssl->amc3 = $request->amc3;
        $upssl->amc4 = $request->amc4;
        $upssl->amc5 = $request->amc5;
        if ($request->file('doc_submit')) {
            $image = $request->file('doc_submit');
            $imageName = "docsubmit" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $upssl->doc_submit = $imageName;
        } 

        $upssl->remarks = $request->remarks;
        $upssl->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }



       public function ssldashboard(Request $request){
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        
        $data['query'] =DB::table('up_ssls')
        ->select(
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN install = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN install != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN doc_submit = "YES" THEN id END) AS doc_submit'),
            DB::raw('COUNT(CASE WHEN doc_submit != "YES" THEN id END) AS doc_not_submit'),
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

        $data['districts'] = DB::table('up_ssls')
        ->select(
            'district',
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN install = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN install != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN doc_submit = "YES" THEN id END) AS doc_submit'),
            DB::raw('COUNT(CASE WHEN doc_submit != "YES" THEN id END) AS doc_not_submit'),
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
        ->where('state',$state)
        ->get();
        
        
             
        $data['vendors'] = DB::table('up_ssls')
        ->select(
            'vendor',
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN material_supply = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN material_supply != "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN install = "YES" THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN install != "YES" THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN doc_submit = "YES" THEN id END) AS doc_submit'),
            DB::raw('COUNT(CASE WHEN doc_submit != "YES" THEN id END) AS doc_not_submit'),
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
        ->groupBy('vendor')
        ->where('state',$state)
        ->get();
        return view('up.ssl.indexssl', $data);
    }
    
        
            
     public function main_upssl_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'supplied'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','YES')->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','!=','YES')->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','YES' )->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','!=','YES' )->get();
        }
        elseif($status == 'doc-submit'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('inspected_by_breda','YES' )->get();
        }
         elseif($status == 'doc-not-submit'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->get();
        }
        elseif($status == 'payment-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','YES' )->get();
        }
         elseif($status == 'payment-not-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','!=','Yes' )->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','YES' )->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','!=','Yes' )->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','YES' )->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','!=','Yes' )->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','YES' )->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','!=','Yes' )->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','YES' )->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','!=','Yes' )->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','YES' )->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','!=','Yes' )->get();
        }
         return view('up.ssl.view-upssl', $data);
       
    }
    
     public function district_upssl_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'supplied'){
        $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','YES')->where('district', $district)->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','!=','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','YES' )->where('district', $district)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','!=','YES' )->where('district', $district)->get();
        }
         elseif($status == 'doc-not-submit'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->where('district', $district)->get();
        }
        elseif($status == 'payment-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','YES' )->where('district', $district)->get();
        }
         elseif($status == 'payment-not-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','!=','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','YES' )->where('district', $district)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','!=','Yes' )->where('district', $district)->get();
        }
          elseif($status == 'district'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('district', $district)->get();
        }
         return view('up.ssl.view-upssl', $data);
       
    }
    
    
        
     public function vendor_upssl_data(Request $request, $status,$vendor){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
              if($status == 'supplied'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','YES')->where('vendor', $vendor)->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('material_supply','!=','YES')->where('vendor', $vendor)->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('install','!=','YES' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'doc-submit'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('inspected_by_breda','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'doc-not-submit'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'payment-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'payment-not-85'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('payment_85','!=','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc1','!=','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc2','!=','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc3','!=','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc4','!=','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','YES' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('amc5','!=','Yes' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'vendor'){
            $data['ssl'] = DB::table('up_ssls')->where('state',$state)->where('vendor', $vendor)->get();
        }
         return view('up.ssl.view-upssl', $data);
       
    }
    


    
}
