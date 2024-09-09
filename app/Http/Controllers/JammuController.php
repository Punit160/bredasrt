<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jammu;
use App\Models\JammuModule;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
use PDF;
use file;

class JammuController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        
        $data['vendors'] = DB::table('jammus')->distinct()->select('c_contractor_name')->where('state', $state)->get();
        return view('jammu.add-jk-registration', $data);
    }

    public function dash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        return view('jammu.pages.dash', $data);
    }

    public function print(Request $request, $id)
    {
        $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }

        $jammus = DB::table('jammus')->where('id', $id)->where('state', $state)->get();

        $data = [

            'jammus' => $jammus,
        ];

        // Generate the PDF
        $pdf = PDF::loadView('jammu.pdf', $data);

        return $pdf->download('hoc.pdf');
    }

    public function getVendorDetails(Request $request)
    {
        $name = $request->vid;

        $details = DB::table('vendors')
            ->select('email', 'mobile', 'firm')
            ->where('name', $name)
            ->first();

        return response()->json([
            'email' => $details->email,
            'mobile' => $details->mobile,
            'firm' => $details->firm,
        ]);
    }

    public function ssldash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        return view('jammu.pages.ssl-dash', $data);
    }

    public function swpdash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        $state = $request->session()->get('state');
        $data['jk_count'] = Jammu::Where('state', $state)->count();
$data['material_supply'] = Jammu::where('m_pump', 'yes')
    ->where('m_structure', 'yes')
    ->where('m_modules', 'yes')
    ->where('m_bos', 'yes')
    ->where('state', $state)
    ->count();

$data['material_not_supply'] = Jammu::where('state', $state)
    ->where(function ($query) {
        $query->whereNull('m_pump')
            ->orWhereNull('m_structure')
            ->orWhereNull('m_modules')
            ->orWhereNull('m_bos')
            ->orWhereIn('m_pump', ['', 'no'])
            ->orWhereIn('m_structure', ['', 'no'])
            ->orWhereIn('m_modules', ['', 'no'])
            ->orWhereIn('m_bos', ['', 'no']);
    })
    ->count();

$data['total_install'] = Jammu::where('jcr_found', 'yes')
    ->where('jcr_structure', 'yes')
    ->where('jcr_module', 'yes')
    ->where('jcr_pump', 'yes')
    ->where('jcr_hoc', 'yes')
    ->where('state', $state)
    ->count();

$data['total_not_install'] = Jammu::where('state', $state)
    ->where(function($query) {
        $query->where('jcr_found', '!=', 'yes')
              ->orWhere('jcr_structure', '!=', 'yes')
              ->orWhere('jcr_module', '!=', 'yes')
              ->orWhere('jcr_pump', '!=', 'yes')
              ->orWhere('jcr_hoc', '!=', 'yes')
              ->orWhereNull('jcr_found')
              ->orWhereNull('jcr_structure')
              ->orWhereNull('jcr_module')
              ->orWhereNull('jcr_pump')
              ->orWhereNull('jcr_hoc')
              ->orWhereIn('jcr_found', ['', 'no'])
              ->orWhereIn('jcr_structure', ['', 'no'])
              ->orWhereIn('jcr_module', ['', 'no'])
              ->orWhereIn('jcr_pump', ['', 'no'])
              ->orWhereIn('jcr_hoc', ['', 'no']);
    })
    ->count();

        $data['inspection_done'] = Jammu::where('f_inspect', 'yes')->where('state', $state)->count();
        $data['inspection_not_done'] = Jammu::where('f_inspect', '!=', 'yes')->where('state', $state)->count();
        $data['file_submit'] = Jammu::where('f_file_submit', 'yes')->where('state', $state)->count();
        $data['file_not_submit'] = Jammu::where('f_file_submit', '!=', 'yes')->where('state', $state)->count();
        $data['pay10'] = Jammu::where('status_10', '!=', 'NO')->where('state', $state)->count();
        $data['notpay10'] = Jammu::where('status_10', 'NO')->where('state', $state)->count();
        $data['pay90'] = Jammu::where('status_90', '!=', 'NO')->where('state', $state)->count();
        $data['notpay90'] = Jammu::where('status_90', 'NO')->where('state', $state)->count();
        $data['capacity'] = Jammu::select('p_pump_capacity', DB::raw('COUNT(p_pump_capacity) AS pump_count'))->groupBy('p_pump_capacity')->where('state', $state)->get();
        $data['pumptype'] = Jammu::select('p_pump_type', DB::raw('COUNT(p_pump_type) AS count_type'))->groupBy('p_pump_type')->where('state', $state)->get();


        $data['vendorwise'] = DB::table('jammus')
            ->select(
                'c_contractor_name',
                DB::raw('COUNT(f_customer_no) AS allocate'),
                DB::raw('SUM(CASE WHEN m_pump = "yes" AND m_structure = "yes" AND m_modules = "yes" AND m_bos = "yes" THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN m_pump = "no" OR m_structure = "no" OR m_modules = "no" OR m_bos = "no" THEN 1 ELSE 0 END) AS not_supplied'),
                DB::raw('SUM(CASE WHEN jcr_found = "yes" AND jcr_structure = "yes" AND jcr_module = "yes" AND jcr_pump = "yes" AND jcr_hoc = "yes" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN jcr_found != "yes"  OR jcr_structure != "yes"  OR jcr_module != "yes"  OR jcr_pump != "yes"  OR jcr_hoc != "yes"  THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN f_inspect = "yes" THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN f_inspect = "no"  THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN status_90 != "no" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN status_90 = "no" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN status_10 != "no" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN status_10 = "no" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->groupBy('c_contractor_name')
            ->where('state', $state)->get();

        $data['districtwise'] = DB::table('jammus')
            ->select(
                'district',
                DB::raw('COUNT(f_customer_no) AS allocate'),
               DB::raw('SUM(CASE WHEN m_pump = "yes" AND m_structure = "yes" AND m_modules = "yes" AND m_bos = "yes" THEN 1 ELSE 0 END) AS material_supplied'),
    DB::raw('SUM(CASE WHEN m_pump IS NULL OR m_structure IS NULL OR m_modules IS NULL OR m_bos IS NULL OR m_pump = "no" OR m_structure = "no" OR m_modules = "no" OR m_bos = "no" THEN 1 ELSE 0 END) AS not_supplied'),
    DB::raw('SUM(CASE WHEN jcr_found = "yes" AND jcr_structure = "yes" AND jcr_module = "yes" AND jcr_pump = "yes" AND jcr_hoc = "yes" THEN 1 ELSE 0 END) AS total_installed'),
    DB::raw('SUM(CASE WHEN jcr_found IS NULL OR jcr_structure IS NULL OR jcr_module IS NULL OR jcr_pump IS NULL OR jcr_hoc IS NULL OR jcr_found != "yes" OR jcr_structure != "yes" OR jcr_module != "yes" OR jcr_pump != "yes" OR jcr_hoc != "yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN f_inspect = "yes" THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN f_inspect = "no"  THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN status_90 != "no" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN status_90 = "no" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN status_10 != "no" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN status_10 = "no" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->groupBy('district')
            ->where('state', $state)->get();


        $data['phasewise'] = DB::table('jammus')
            ->select(
                'monitering',
                DB::raw('COUNT(f_customer_no) AS allocate'),
                 DB::raw('SUM(CASE WHEN m_pump = "yes" AND m_structure = "yes" AND m_modules = "yes" AND m_bos = "yes" THEN 1 ELSE 0 END) AS material_supplied'),
    DB::raw('SUM(CASE WHEN m_pump IS NULL OR m_structure IS NULL OR m_modules IS NULL OR m_bos IS NULL OR m_pump = "no" OR m_structure = "no" OR m_modules = "no" OR m_bos = "no" THEN 1 ELSE 0 END) AS not_supplied'),
    DB::raw('SUM(CASE WHEN jcr_found = "yes" AND jcr_structure = "yes" AND jcr_module = "yes" AND jcr_pump = "yes" AND jcr_hoc = "yes" THEN 1 ELSE 0 END) AS total_installed'),
    DB::raw('SUM(CASE WHEN jcr_found IS NULL OR jcr_structure IS NULL OR jcr_module IS NULL OR jcr_pump IS NULL OR jcr_hoc IS NULL OR jcr_found != "yes" OR jcr_structure != "yes" OR jcr_module != "yes" OR jcr_pump != "yes" OR jcr_hoc != "yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN f_inspect = "yes" THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN f_inspect = "no"  THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN status_90 != "no" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN status_90 = "no" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN status_10 != "no" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN status_10 = "no" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->groupBy('monitering')
            ->where('state', $state)->get();


        $data['query'] = DB::table('jammus')
            ->select(
                DB::raw('COUNT(f_customer_no) AS allocate'),
                 DB::raw('SUM(CASE WHEN m_pump = "yes" AND m_structure = "yes" AND m_modules = "yes" AND m_bos = "yes" THEN 1 ELSE 0 END) AS material_supplied'),
    DB::raw('SUM(CASE WHEN m_pump IS NULL OR m_structure IS NULL OR m_modules IS NULL OR m_bos IS NULL OR m_pump = "no" OR m_structure = "no" OR m_modules = "no" OR m_bos = "no" THEN 1 ELSE 0 END) AS not_supplied'),
    DB::raw('SUM(CASE WHEN jcr_found = "yes" AND jcr_structure = "yes" AND jcr_module = "yes" AND jcr_pump = "yes" AND jcr_hoc = "yes" THEN 1 ELSE 0 END) AS total_installed'),
    DB::raw('SUM(CASE WHEN jcr_found IS NULL OR jcr_structure IS NULL OR jcr_module IS NULL OR jcr_pump IS NULL OR jcr_hoc IS NULL OR jcr_found != "yes" OR jcr_structure != "yes" OR jcr_module != "yes" OR jcr_pump != "yes" OR jcr_hoc != "yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN f_inspect = "yes" THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN f_inspect = "no"  THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN status_90 != "no" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN status_90 = "no" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN status_10 != "no" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN status_10 = "no" THEN 1 ELSE 0 END) AS notpay10')
            )->where('state', $state)
            ->first();


        $data['total_bar'] = DB::table('jammus')
            ->select(
                DB::raw('SUM(CASE WHEN  m_structure = "yes"  THEN 1 ELSE 0 END) AS material_structure'),
                DB::raw('SUM(CASE WHEN  m_modules = "yes"  THEN 1 ELSE 0 END) AS material_module'),
                DB::raw('SUM(CASE WHEN  m_pump = "yes"  THEN 1 ELSE 0 END) AS material_pump'),
                DB::raw('SUM(CASE WHEN  jcr_hoc = "yes"  THEN 1 ELSE 0 END) AS jcr_hocs'),
                DB::raw('SUM(CASE WHEN f_inspect = "yes" THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN  jcr_insurance = "yes"  THEN 1 ELSE 0 END) AS jcr_insurances'),
                DB::raw('SUM(CASE WHEN  f_file_submit = "yes"  THEN 1 ELSE 0 END) AS file_submission'),
                DB::raw('SUM(CASE WHEN status_90 = "pending" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN status_10 = "pending" THEN 1 ELSE 0 END) AS pay10'),
            )->where('state', $state)
            ->first();

        return view('jammu.pages.swp-dash', $data);
    }

  public function create(Request $request)
    {
         $state = $request->session()->get('state');
        $jammu = new Jammu();
        $jammu->state = $state;
        $jammu->lot_no = $request->lot_no;
        $jammu->f_customer_no = $request->f_customer_no;
        $jammu->f_app_no = $request->f_app_no;
        $jammu->work_order = $request->work_order;
        $jammu->work_order_date = $request->work_order_date;
        $jammu->contact_number = $request->contact_number;
        $jammu->adhaar_number = $request->adhaar_number;
        $jammu->district = $request->district;
        $jammu->post = $request->post;
        $jammu->village = $request->village;
        $jammu->tehsil = $request->tehsil;
        $jammu->f_invoice = $request->f_invoice;
        $jammu->f_invoice_date = $request->f_invoice_date;
        $jammu->f_farmer_name = $request->f_farmer_name;
        $jammu->f_father_name = $request->f_father_name;
        $jammu->f_pin = $request->f_pin;
        $jammu->p_pump_capacity = $request->p_pump_capacity;
        $jammu->p_pump_type = $request->p_pump_type;
        $jammu->p_pump_subtype = $request->p_pump_subtype;
        $jammu->p_pump_head = $request->p_pump_head;
        $jammu->c_contractor_name = $request->c_contractor_name;
        $jammu->c_firm = $request->c_firm;
        $jammu->c_contact = $request->c_contact;
        $jammu->c_email = $request->email;
        $jammu->s_survey_done = $request->s_survey_done;
        $jammu->s_latitude = $request->s_latitude;
        $jammu->s_longitude = $request->s_longitude;
        $jammu->s_recieved = $request->s_recieved;
        $jammu->s_date = $request->s_date;
        $jammu->m_pump = $request->m_pump;
        $jammu->m_structure = $request->m_structure;
        $jammu->m_modules = $request->m_modules;
        $jammu->m_bos = $request->m_bos;
        $jammu->m_date = $request->m_date;
        $jammu->jcr_found = $request->jcr_found;
        $jammu->jcr_found_date = $request->jcr_found_date;
        $jammu->jcr_structure = $request->jcr_structure;
        $jammu->jcr_structure_date = $request->jcr_structure_date;
        $jammu->jcr_module = $request->jcr_module;
        $jammu->jcr_module_date = $request->jcr_module_date;
        $jammu->jcr_pump = $request->jcr_pump;
        $jammu->jcr_pump_date = $request->jcr_pump_date;
        $jammu->jcr_hoc = $request->jcr_hoc;
        $jammu->jcr_hoc_date = $request->jcr_hoc_date;
        $jammu->jcr_photo = $request->jcr_photo;
        $jammu->jcr_photo_date = $request->jcr_photo_date;
        $jammu->f_file_submit = $request->f_file_submit;
        $jammu->f_file_submit_date = $request->f_file_submit_date;
        $jammu->f_inspect = $request->f_inspect;
        $jammu->f_inspect_date = $request->f_inspect_date;
        $jammu->klk_amount = $request->klk_amount;
        $jammu->klk_pay_90 = $request->klk_pay_90;
        $jammu->klk_pay_90_date = $request->klk_pay_90_date;
        $jammu->klk_pay_10 = $request->klk_pay_10;
        $jammu->klk_pay_10_date = $request->klk_pay_10_date;
        $jammu->status_90 = $request->status_90;
        $jammu->status_10 = $request->status_10;
        $jammu->contractor_pay = $request->contractor_pay;
        $jammu->contractor_pay_date = $request->contractor_pay_date;
        $jammu->mt_pump_no = $request->mt_pump_no;
        $jammu->mt_motor_no = $request->mt_motor_no;
        $jammu->mt_controller_no = $request->mt_controller_no;
        $jammu->mt_rmsid = $request->mt_rmsid;
        $jammu->mt_imei = $request->mt_imei;
        $jammu->jcr_insurance = $request->jcr_insurance;
        $jammu->jcr_insurance_date = $request->jcr_insurance_date;
        $jammu->mt_module_watt = $request->mt_module_watt;
        $jammu->monitering = $request->monitering;
        $jammu->benifiecery = $request->benifiecery;
       $imageFields = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8'];

     foreach ($imageFields as $imageField) {
        if ($request->hasfile($imageField)) {
        $file = $request->file($imageField);
        $extension = $file->getClientOriginalExtension();
        $filename= time() . '_' . $imageField . '.' . $extension;
        $file->move('uploads/image/', $filename);
        $jammu->$imageField = $filename;
       }
   }
        $jammu->save();
        if ($jammu) {
            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $key => $value) {
                    $modules = [
                        'sr_no' => $request->modules[$key],

                    ];
                    $jammu->jammuModulee()->create($modules);
                }
            }
            return redirect()->back()->with('status', 'Data Saved Successfully !!!');
        }
    }

    public function edit(Request $request, $id)
    {
        $state = $request->session()->get('state');
        $data['jk'] = Jammu::find($id);
        $data['role'] = $request->session()->get('role');
        $data['vendors'] = DB::table('jammus')->distinct()->select('c_contractor_name')->where('state', $state)->get();
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }

        return view('jammu.update-jk-registration', $data);
    }

    public function getModules(Request $request)
    {
        $id = $request->jammu_id;
        $modules = JammuModule::where('jammu_id', $id)->pluck('sr_no')->toArray();
        return response()->json(['jammu_id' => $id, 'modules' => $modules]);
    }




public function update_jk(Request $request)
    {
        $id = $request->jid;
        $jammu = Jammu::findOrFail($id);
        $jammu->lot_no = $request->lot_no;
        $jammu->f_customer_no = $request->f_customer_no;
        $jammu->f_app_no = $request->f_app_no;
        $jammu->work_order = $request->work_order;
        $jammu->work_order_date = $request->work_order_date;
        $jammu->contact_number = $request->contact_number;
        $jammu->adhaar_number = $request->adhaar_number;
        $jammu->district = $request->district;
        $jammu->post = $request->post;
        $jammu->village = $request->village;
        $jammu->tehsil = $request->tehsil;
        $jammu->f_invoice = $request->f_invoice;
        $jammu->f_invoice_date = $request->f_invoice_date;
        $jammu->f_farmer_name = $request->f_farmer_name;
        $jammu->f_father_name = $request->f_father_name;
        $jammu->f_pin = $request->f_pin;
        $jammu->p_pump_capacity = $request->p_pump_capacity;
        $jammu->p_pump_type = $request->p_pump_type;
        $jammu->p_pump_subtype = $request->p_pump_subtype;
        $jammu->p_pump_head = $request->p_pump_head;
        $jammu->c_contractor_name = $request->c_contractor_name;
        $jammu->c_firm = $request->c_firm;
        $jammu->c_contact = $request->c_contact;
        $jammu->c_email = $request->email;
        $jammu->s_survey_done = $request->s_survey_done;
        $jammu->s_latitude = $request->s_latitude;
        $jammu->s_longitude = $request->s_longitude;
        $jammu->s_recieved = $request->s_recieved;
        $jammu->s_date = $request->s_date;
        $jammu->m_pump = $request->m_pump;
        $jammu->m_structure = $request->m_structure;
        $jammu->m_modules = $request->m_modules;
        $jammu->m_bos = $request->m_bos;
        $jammu->m_date = $request->m_date;
        $jammu->jcr_found = $request->jcr_found;
        $jammu->jcr_found_date = $request->jcr_found_date;
        $jammu->jcr_structure = $request->jcr_structure;
        $jammu->jcr_structure_date = $request->jcr_structure_date;
        $jammu->jcr_module = $request->jcr_module;
        $jammu->jcr_module_date = $request->jcr_module_date;
        $jammu->jcr_pump = $request->jcr_pump;
        $jammu->jcr_pump_date = $request->jcr_pump_date;
        $jammu->jcr_hoc = $request->jcr_hoc;
        $jammu->jcr_hoc_date = $request->jcr_hoc_date;
        $jammu->jcr_photo = $request->jcr_photo;
        $jammu->jcr_photo_date = $request->jcr_photo_date;
        $jammu->f_file_submit = $request->f_file_submit;
        $jammu->f_file_submit_date = $request->f_file_submit_date;
        $jammu->f_inspect = $request->f_inspect;
        $jammu->f_inspect_date = $request->f_inspect_date;
        $jammu->klk_amount = $request->klk_amount;
        $jammu->klk_pay_90 = $request->klk_pay_90;
        $jammu->klk_pay_90_date = $request->klk_pay_90_date;
        $jammu->klk_pay_10 = $request->klk_pay_10;
        $jammu->klk_pay_10_date = $request->klk_pay_10_date;
        $jammu->status_90 = $request->status_90;
        $jammu->status_10 = $request->status_10;
        $jammu->contractor_pay = $request->contractor_pay;
        $jammu->contractor_pay_date = $request->contractor_pay_date;
        $jammu->mt_pump_no = $request->mt_pump_no;
        $jammu->mt_motor_no = $request->mt_motor_no;
        $jammu->mt_motor_make = $request->mt_motor_make;
        $jammu->mt_controller_no = $request->mt_controller_no;
        $jammu->mt_controller_make = $request->mt_controller_make;
        $jammu->mt_rmsid = $request->mt_rmsid;
        $jammu->mt_imei = $request->mt_imei;
        $jammu->jcr_insurance = $request->jcr_insurance;
        $jammu->jcr_insurance_date = $request->jcr_insurance_date;
        $jammu->mt_module_watt = $request->mt_module_watt;
        $jammu->mt_module_make = $request->mt_module_make;
        $jammu->monitering = $request->monitering;
        $jammu->benifiecery = $request->benifiecery;
       $imageFields = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8'];

     foreach ($imageFields as $imageField) {
        if ($request->hasfile($imageField)) {
        $file = $request->file($imageField);
        $extension = $file->getClientOriginalExtension();
        $filename= time() . '_' . $imageField . '.' . $extension;
        $file->move('uploads/image/', $filename);
        $jammu->$imageField = $filename;
       }
   }
        $jammu->save();


        if ($jammu) {
            $jammu->jammuModulee()->delete();
            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $moduleId => $moduleValue) {
                    $module = JammuModule::find($moduleId);
                    if ($module) {
                        $module->update(['sr_no' => $moduleValue]);
                    } else {
                        $jammu->jammuModulee()->create(['sr_no' => $moduleValue]);
                    }
                }
            }
            return redirect()->back()->with('status', 'Jammu updated successfully!');
        }
    }



    

    public function destroy($id)
    {
        $site = Jammu::find($id);
        $site->delete();
        return redirect(route("view-site-survey"))->with('status', 'Site  Survey  Data Deleted Successfully!!');
    }

    public function view_jk(Request $request, $status = null)
    {
        $data['role'] = $request->session()->get('role');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        if ($status == 'material-supplied') {
            $data['jks'] = Jammu::with('jammuModulee')->where('m_pump', 'yes')->where('m_structure', 'yes')->where('m_modules', 'yes')->where('m_bos', 'yes')->where('state', $state)->get();
        } elseif ($status == 'material-not-supplied') {
           $data['jks'] = Jammu::with('jammuModulee')
          ->where(function ($query) {
           $query->whereNull('m_pump')
            ->orWhereNull('m_structure')
            ->orWhereNull('m_modules')
            ->orWhereNull('m_bos')
            ->orWhereIn('m_pump', ['', 'no'])
            ->orWhereIn('m_structure', ['', 'no'])
            ->orWhereIn('m_modules', ['', 'no'])
            ->orWhereIn('m_bos', ['', 'no']);
           })->where('state', $state)->get();
        } elseif ($status == 'not-install') {
       $data['jks'] = Jammu::with('jammuModulee')
    ->where(function ($query) {
        $query->where('jcr_found', '!=', 'yes')
              ->orWhere('jcr_structure', '!=', 'yes')
              ->orWhere('jcr_module', '!=', 'yes')
              ->orWhere('jcr_pump', '!=', 'yes')
              ->orWhere('jcr_hoc', '!=', 'yes')
              ->orWhereNull('jcr_found')
              ->orWhereNull('jcr_structure')
              ->orWhereNull('jcr_module')
              ->orWhereNull('jcr_pump')
              ->orWhereNull('jcr_hoc')
              ->orWhereIn('jcr_found', ['', 'no'])
              ->orWhereIn('jcr_structure', ['', 'no'])
              ->orWhereIn('jcr_module', ['', 'no'])
              ->orWhereIn('jcr_pump', ['', 'no'])
              ->orWhereIn('jcr_hoc', ['', 'no']);
    })
    ->where('state', $state)
    ->get();
        } elseif ($status == 'install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'yes')->where('jcr_structure', 'yes')->where('jcr_module', 'yes')->where('jcr_pump', 'yes')->where('jcr_hoc', 'yes')->where('state', $state)->get();
        } elseif ($status == 'inspection-done') {
            $data['jks'] =  Jammu::with('jammuModulee')->where('f_inspect', 'yes')->where('state', $state)->get();
        } elseif ($status == 'inspection-pending') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_inspect', '!=', 'yes')->where('state', $state)->get();
        } elseif ($status == 'file-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', 'yes')->where('state', $state)->get();
        } elseif ($status == 'file-not-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', '!=', 'yes')->where('state', $state)->get();
        } elseif ($status == 'pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', '!=', 'NO')->where('state', $state)->get();
        } elseif ($status == 'not-pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', 'NO')->where('state', $state)->get();
        } elseif ($status == 'pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', '!=', 'NO')->where('state', $state)->get();
        } elseif ($status == 'not-pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', 'NO')->where('state', $state)->get();
        } else {
            $data['jks'] = Jammu::with('jammuModulee')->where('state', $state)->get();
        }
        return view('jammu.view-jk-registration', $data);
    }



    public function phase_swp_data(Request $request, $status, $phase)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
       $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        if ($status == 'material-supplied') {
            $data['jks'] = Jammu::with('jammuModulee')->where('m_pump', 'yes')->where('m_structure', 'yes')->where('m_modules', 'yes')->where('m_bos', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'material-not-supplied') {
            $data['jks'] =  Jammu::with('jammuModulee')
                ->where('m_pump', 'no')
                ->orWhere('m_structure', 'no')
                ->orWhere('m_modules', 'no')
                ->orWhere('m_bos', 'no')
                ->where('monitering', $phase)
                ->where('state', $state)->get();
        } elseif ($status == 'not-install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'no')->orWhere('jcr_structure', 'no')->orWhere('jcr_module', 'no')->orWhere('jcr_pump', 'no')->orWhere('jcr_hoc', 'no')
                ->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'yes')->where('jcr_structure', 'yes')->where('jcr_module', 'yes')->where('jcr_pump', 'yes')->where('jcr_hoc', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'inspection-done') {
            $data['jks'] =  Jammu::with('jammuModulee')->where('f_inspect', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'inspection-pending') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_inspect', '!=', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'file-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'file-not-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', '!=', 'yes')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', '!=', 'NO')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'not-pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', 'NO')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', '!=', 'NO')->where('monitering', $phase)->where('state', $state)->get();
        } elseif ($status == 'not-pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', 'NO')->where('monitering', $phase)->where('state', $state)->get();
        } 
        elseif($status == 'phase'){
          $data['jks'] = Jammu::with('jammuModulee')->where('monitering', $phase)->where('state', $state)->get();
        }
        
        else {
            $data['jks'] = Jammu::with('jammuModulee')->where('monitering', $phase)->where('state', $state)->get();
        }
        return view('jammu.view-jk-registration', $data);
    }



    public function district_swp_data(Request $request, $status, $district)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        $role = $request->session()->get('role');
        if ($status == 'material-supplied') {
            $data['jks'] = Jammu::with('jammuModulee')->where('m_pump', 'yes')->where('m_structure', 'yes')->where('m_modules', 'yes')->where('m_bos', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'material-not-supplied') {
            $data['jks'] =  Jammu::with('jammuModulee')
                ->where('m_pump', 'no')
                ->orWhere('m_structure', 'no')
                ->orWhere('m_modules', 'no')
                ->orWhere('m_bos', 'no')
                ->where('district', $district)
                ->where('state', $state)->get();
        } elseif ($status == 'not-install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'no')->orWhere('jcr_structure', 'no')->orWhere('jcr_module', 'no')->orWhere('jcr_pump', 'no')->orWhere('jcr_hoc', 'no')
                ->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'yes')->where('jcr_structure', 'yes')->where('jcr_module', 'yes')->where('jcr_pump', 'yes')->where('jcr_hoc', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'inspection-done') {
            $data['jks'] =  Jammu::with('jammuModulee')->where('f_inspect', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'inspection-pending') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_inspect', '!=', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'file-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'file-not-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', '!=', 'yes')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', '!=', 'NO')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'not-pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', 'NO')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', '!=', 'NO')->where('district', $district)->where('state', $state)->get();
        } elseif ($status == 'not-pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', 'NO')->where('district', $district)->where('state', $state)->get();
        } 
        elseif($status == 'district'){
          $data['jks'] = Jammu::with('jammuModulee')->where('district', $district)->where('state', $state)->get();
        }
        else {
            $data['jks'] = Jammu::with('jammuModulee')->where('district', $district)->where('state', $state)->get();
        }
        return view('jammu.view-jk-registration', $data);
    }


    public function vendor_swp_data(Request $request, $status = 'null', $vendor = 'null')
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
           $state_data = $request->session()->get('state');
        if($state_data != 'all'){
         $data['state'] = $state_data;
         $state = $state_data;
        }
        else{
          $data['state']  = 'jammu';
          $state = 'jammu';
        }
        if ($status == 'material-supplied') {
            $data['jks'] = Jammu::with('jammuModulee')->where('m_pump', 'yes')->where('m_structure', 'yes')->where('m_modules', 'yes')->where('m_bos', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'material-not-supplied') {
           $data['jks'] = Jammu::with('jammuModulee') ->where('c_contractor_name', $vendor)
       ->where(function ($query) {
        $query->where('m_pump', 'no')
            ->orWhere('m_structure', 'no')
            ->orWhere('m_modules', 'no')
            ->orWhere('m_bos', 'no');
    })
    ->where('state', $state)->get();
        } elseif ($status == 'not-install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'no')->orWhere('jcr_structure', 'no')->orWhere('jcr_module', 'no')->orWhere('jcr_pump', 'no')->orWhere('jcr_hoc', 'no')
                ->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'install') {
            $data['jks'] = Jammu::with('jammuModulee')->where('jcr_found', 'yes')->where('jcr_structure', 'yes')->where('jcr_module', 'yes')->where('jcr_pump', 'yes')->where('jcr_hoc', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'inspection-done') {
            $data['jks'] =  Jammu::with('jammuModulee')->where('f_inspect', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'inspection-pending') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_inspect', '!=', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'file-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'file-not-submit') {
            $data['jks'] = Jammu::with('jammuModulee')->where('f_file_submit', '!=', 'yes')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', '!=', 'NO')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'not-pay90') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_90', 'NO')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', '!=', 'NO')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        } elseif ($status == 'not-pay10') {
            $data['jks'] = Jammu::with('jammuModulee')->where('status_10', 'NO')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        }
        elseif($status == 'vendor'){
         $data['jks'] = Jammu::with('jammuModulee')->where('c_contractor_name', $vendor)->where('state', $state)->get();
        }
        else {
            $data['jks'] = Jammu::with('jammuModulee')->where('state', $state)->get();
        }
        return view('jammu.view-jk-registration', $data);
    }
}
