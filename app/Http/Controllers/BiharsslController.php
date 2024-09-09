<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BiharSsl;
use App\Imports\BiharsslImport;
use Excel;
use Illuminate\Contracts\Support\ValidatedData;
use DB;
use Session;

class BiharsslController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('biharssl.add-bSSL', $data);
    }
    public function create(Request $request)
    {

        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $ssl = new BiharSsl();
        $ssl->unique_id = $request->unique_id;
        $ssl->wo_no = $request->wo_no;
        $ssl->phase = $request->phase;
        $ssl->district = $request->district;
        $ssl->block = $request->block;
        $ssl->panchyat = $request->panchyat;
        $ssl->ward_no = $request->ward_no;
        $ssl->pole_no = $request->pole_no;
        $ssl->beneficiary_name = $request->beneficiary_name;
        $ssl->contact_no = $request->contact_no;
        $ssl->latitude = $request->latitude;
        $ssl->longitude = $request->longitude;
        $ssl->luminary_no = $request->luminary_no;
        $ssl->sim_no = $request->sim_no;
        $ssl->battery_serial_no = $request->battery_serial_no;
        $ssl->module_no = $request->module_no;
        $ssl->supply = $request->supply;
        $ssl->material_inspection = $request->material_inspection;
        $ssl->installation = $request->installation;
        $ssl->date_of_installation = $request->date_of_installation;
        $ssl->installed_by = $request->installed_by;
        $ssl->inspected_by_breda = $request->inspected_by_breda;
        $ssl->inspection_date = $request->inspection_date;
        $ssl->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = "biharsite" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $ssl->image = $imageName;
        } 
        $ssl->bill_raised_40 = $request->bill_raised_40;
        $ssl->payment_40 = $request->payment_40;
        $ssl->bill_raised_5 = $request->bill_raised_5;
        $ssl->payment_5 = $request->payment_5;
        $ssl->bill_raised_25 = $request->bill_raised_25;
        $ssl->payment_25 = $request->payment_25;
        $ssl->payment_5 = $request->payment_5;
        $ssl->amc_1st_6 = $request->amc_1st_6;
        $ssl->amc_2nd_6 = $request->amc_2nd_6;
        $ssl->amc_3rd_6 = $request->amc_3rd_6;
        $ssl->amc_4th_6 = $request->amc_4th_6;
        $ssl->amc_5th_6 = $request->amc_5th_6;
        $ssl->rms_in_portal = $request->rms_in_portal;
        $ssl->created_by = $created_by;
        $ssl->state = $state;
        $ssl->save();
        return redirect()->back()->with('status', 'Details Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['ssl'] = DB::table('bihar_ssls')->paginate(100);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('biharssl.view-bSSL', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['ssl'] = BiharSsl::findOrFail($id);
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        $data['state'] = $request->session()->get('state');
        return view('biharssl.update-bSSL', $data);
    }

    public function update(Request $request)
    {
        $state = $request->session()->get('state');
        $data['state'] = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $id = $request->id;
        $ssl = BiharSsl::findOrFail($id);
        $ssl->unique_id = $request->unique_id;
        $ssl->wo_no = $request->wo_no;
        $ssl->phase = $request->phase;
        $ssl->district = $request->district;
        $ssl->block = $request->block;
        $ssl->panchyat = $request->panchyat;
        $ssl->ward_no = $request->ward_no;
        $ssl->pole_no = $request->pole_no;
        $ssl->beneficiary_name = $request->beneficiary_name;
        $ssl->contact_no = $request->contact_no;
        $ssl->latitude = $request->latitude;
        $ssl->longitude = $request->longitude;
        $ssl->luminary_no = $request->luminary_no;
        $ssl->sim_no = $request->sim_no;
        $ssl->battery_serial_no = $request->battery_serial_no;
        $ssl->module_no = $request->module_no;
        $ssl->supply = $request->supply;
        $ssl->material_inspection = $request->material_inspection;
        $ssl->installation = $request->installation;
        $ssl->date_of_installation = $request->date_of_installation;
        $ssl->installed_by = $request->installed_by;
        $ssl->inspected_by_breda = $request->inspected_by_breda;
        $ssl->inspection_date = $request->inspection_date;
        $ssl->status = $request->status;
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = "biharsite" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $ssl->image = $imageName;
        } 

        $ssl->bill_raised_40 = $request->bill_raised_40;
        $ssl->payment_40 = $request->payment_40;
        $ssl->bill_raised_5 = $request->bill_raised_5;
        $ssl->payment_5 = $request->payment_5;
        $ssl->bill_raised_25 = $request->bill_raised_25;
        $ssl->payment_25 = $request->payment_25;
        $ssl->payment_5 = $request->payment_5;
        $ssl->amc_1st_6 = $request->amc_1st_6;
        $ssl->amc_2nd_6 = $request->amc_2nd_6;
        $ssl->amc_3rd_6 = $request->amc_3rd_6;
        $ssl->amc_4th_6 = $request->amc_4th_6;
        $ssl->amc_5th_6 = $request->amc_5th_6;
        $ssl->rms_in_portal = $request->rms_in_portal;
        $ssl->created_by = $created_by;
        $ssl->state = $state;
        $ssl->save();
        return back()->with('status', 'Details updated successfully!');
    }
    
    public function upload_bssl(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        return view('biharssl.upload-bSSL', $data);
    }


    public function upload(Request $request)
    {

        set_time_limit(0);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $filePath = $request->file('SSL');
        $import = new BiharsslImport($state, $created_by);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();

        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }

       
    public function ssldashbaord(Request $request){
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        
        $data['query'] =DB::table('bihar_ssls')
        ->select(
            DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN wo_recieved = "YES" THEN id END) AS wo_recieved'),
            DB::raw('COUNT(CASE WHEN wo_recieved != "YES" THEN id END) AS wo_not_recieved'),
            DB::raw('COUNT(CASE WHEN supply = "YES" AND wo_recieved = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN supply != "YES" AND wo_recieved = "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN material_inspection = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS inspection_done'),
            DB::raw('COUNT(CASE WHEN material_inspection != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS inspection_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS installation_inspect'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS installation_not_inspect'),
            DB::raw('COUNT(CASE WHEN payment_40 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_40'),
            DB::raw('COUNT(CASE WHEN payment_40 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_not_40'),
            DB::raw('COUNT(CASE WHEN payment_5 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_5'),
            DB::raw('COUNT(CASE WHEN payment_5 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_not_5'),
            DB::raw('COUNT(CASE WHEN payment_25 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_25'),
            DB::raw('COUNT(CASE WHEN payment_25 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS pay_not_25'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_not_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_not_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_not_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_not_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_5th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"  THEN id END) AS amc_not_5th_6'),
        )
        ->where('state',$state)
        ->first();
        
        
        $data['districts'] = DB::table('bihar_ssls')
        ->select(
            'district',
              DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN wo_recieved = "YES" THEN id END) AS wo_recieved'),
            DB::raw('COUNT(CASE WHEN wo_recieved != "YES" THEN id END) AS wo_not_recieved'),
            DB::raw('COUNT(CASE WHEN supply = "YES" AND wo_recieved = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN supply != "YES" AND wo_recieved = "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN material_inspection = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS inspection_done'),
            DB::raw('COUNT(CASE WHEN material_inspection != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS inspection_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_inspect'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_not_inspect'),
            DB::raw('COUNT(CASE WHEN payment_40 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_40'),
            DB::raw('COUNT(CASE WHEN payment_40 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_40'),
            DB::raw('COUNT(CASE WHEN payment_5 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_5'),
            DB::raw('COUNT(CASE WHEN payment_5 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_5'),
            DB::raw('COUNT(CASE WHEN payment_25 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_25'),
            DB::raw('COUNT(CASE WHEN payment_25 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_25'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_5th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_5th_6'),
        )
        ->groupBy('district')
        ->where('state',$state)
        ->get();
        
        
             
        $data['vendors'] = DB::table('bihar_ssls')
        ->select(
            'installed_by',
              DB::raw('COUNT(id) AS site_count'),
            DB::raw('COUNT(CASE WHEN wo_recieved = "YES" THEN id END) AS wo_recieved'),
            DB::raw('COUNT(CASE WHEN wo_recieved != "YES" THEN id END) AS wo_not_recieved'),
            DB::raw('COUNT(CASE WHEN supply = "YES" AND wo_recieved = "YES" THEN id END) AS supply_done'),
            DB::raw('COUNT(CASE WHEN supply != "YES" AND wo_recieved = "YES" THEN id END) AS supply_not_done'),
            DB::raw('COUNT(CASE WHEN material_inspection = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS inspection_done'),
            DB::raw('COUNT(CASE WHEN material_inspection != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS inspection_not_done'),
            DB::raw('COUNT(CASE WHEN installation = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_done'),
            DB::raw('COUNT(CASE WHEN installation != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_not_done'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_inspect'),
            DB::raw('COUNT(CASE WHEN inspected_by_breda != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS installation_not_inspect'),
            DB::raw('COUNT(CASE WHEN payment_40 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_40'),
            DB::raw('COUNT(CASE WHEN payment_40 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_40'),
            DB::raw('COUNT(CASE WHEN payment_5 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_5'),
            DB::raw('COUNT(CASE WHEN payment_5 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_5'),
            DB::raw('COUNT(CASE WHEN payment_25 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_25'),
            DB::raw('COUNT(CASE WHEN payment_25 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS pay_not_25'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_1st_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_1st_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_2nd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_2nd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_3rd_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_3rd_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_4th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_4th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 = "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_5th_6'),
            DB::raw('COUNT(CASE WHEN amc_5th_6 != "YES" AND supply = "YES" AND wo_recieved = "YES"   THEN id END) AS amc_not_5th_6'),
        )
        ->groupBy('installed_by')
        ->where('state',$state)
        ->get();
        return view('biharssl.ssldashboard', $data);
    }
    
    
            
     public function main_ssl_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'work-order-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','YES')->get();
        }
        elseif($status == 'work-order-not-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','!=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','!=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'installation-inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('inspected_by_breda','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'installation-inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'payment-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'payment-not-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
        elseif($status == 'payment-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'payment-not-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'payment-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'payment-not-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->get();
        }
          return view('biharssl.view-bSSL', $data);
       
    }
    
     public function district_ssl_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'work-order-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'work-order-not-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','!=','YES')->where('district', $district)->get();
        }
        elseif($status == 'supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','!=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'installation-inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('inspected_by_breda','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'installation-inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'payment-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'payment-not-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'payment-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_5','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'payment-not-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_5','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
        elseif($status == 'payment-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'payment-not-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
                 elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
          elseif($status == 'district'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('district', $district)->where('supply','=','YES')->where('wo_recieved','YES')->where('district', $district)->get();
        }
          return view('biharssl.view-bSSL', $data);
       
    }
    
    
        
     public function vendor_ssl_data(Request $request, $status,$vendor){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'work-order-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'work-order-not-recieved'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('wo_recieved','!=','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'not-supplied'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('supply','!=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('material_inspection','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'installation-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'installation-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'installation-inspection-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('inspected_by_breda','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'installation-inspection-not-done'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('date_of_installation','!=','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'payment-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'payment-not-40'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_40','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'payment-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_5','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'payment-not-5'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_5','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'payment-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'payment-not-25'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('payment_25','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
             elseif($status == 'amc-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-not-1st-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_1st_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-not-2nd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_2nd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-not-3rd-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_3rd_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-not-4th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_4th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','YES' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
         elseif($status == 'amc-not-5th-6'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('amc_5th_6','!=','Yes' )->where('supply','=','YES')->where('wo_recieved','YES')->where('installed_by', $vendor)->get();
        }
        elseif($status == 'vendor'){
            $data['ssl'] = DB::table('bihar_ssls')->where('state',$state)->where('installed_by', $vendor)->get();
        }
          return view('biharssl.view-bSSL', $data);
       
    }

   
}
