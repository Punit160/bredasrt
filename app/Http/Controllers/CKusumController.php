<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CKusumDetail;
use App\Models\CKusumModule;
Use DB;


class CKusumController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('up.CKusum.add-CKusum', $data);
    }
    public function create(Request $request)
    {
        $Ckusum = new CKusumDetail();
        $Ckusum->lot_no = $request->lot_no;
        $Ckusum->f_customer_no = $request->f_customer_no;
        $Ckusum->f_farmer_name = $request->f_farmer_name;
        $Ckusum->f_father_name = $request->f_father_name;
        $Ckusum->f_contact = $request->f_contact;
        $Ckusum->f_aadhar = $request->f_aadhar;
        $Ckusum->f_village = $request->f_village;
        $Ckusum->f_post = $request->f_post;
        $Ckusum->f_tehsil = $request->f_tehsil;
        $Ckusum->f_district = $request->f_district;
        $Ckusum->f_pin = $request->f_pin;
        $Ckusum->f_invoice_no = $request->f_invoice_no;
        $Ckusum->f_invoice_date = $request->f_invoice_date;
        $Ckusum->pump_capacity = $request->pump_capacity;
        $Ckusum->c_contractor_name = $request->c_contractor_name;
        $Ckusum->KLK_Firm = $request->KLK_Firm;
        $Ckusum->c_contact_no = $request->c_contact_no;
        $Ckusum->c_email = $request->email;
        $Ckusum->sd_survey_done = $request->sd_survey_done;
        $Ckusum->sd_latitude = $request->sd_latitude;
        $Ckusum->sd_longitude = $request->sd_longitude;
        $Ckusum->sd_survey_received_date = $request->sd_survey_received_date;
        $Ckusum->mt_inverter = $request->mt_inverter;
        $Ckusum->mt_structure = $request->mt_structure;
        $Ckusum->mt_modules = $request->mt_modules;
        $Ckusum->mt_bos = $request->mt_bos;
        $Ckusum->mt_date = $request->mt_date;
        $Ckusum->inspection_done = $request->inspection_done;
        $Ckusum->ins_foundation = $request->ins_foundation;
        $Ckusum->ins_foundation_date = $request->ins_foundation_date;
        $Ckusum->ins_structure = $request->ins_structure;
        $Ckusum->ins_structure_data = $request->ins_structure_data;
        $Ckusum->ins_module_mounting = $request->ins_module_mounting;
        $Ckusum->ins_module_mounting_date = $request->ins_module_mounting_date;
        $Ckusum->ins_inverter_installation = $request->ins_inverter_installation;
        $Ckusum->ins_inverter_installation_date = $request->ins_inverter_installation_date;
        $Ckusum->doc_hoc = $request->doc_hoc;
        $Ckusum->doc_hoc_date = $request->doc_hoc_date;
        $Ckusum->doc_hoc_photo = $request->doc_hoc_photo;
        $Ckusum->doc_hoc_photo_date = $request->doc_hoc_photo_date;
        $Ckusum->file_submission = $request->file_submission;
        $Ckusum->file_submission_date = $request->file_submission_date;
        $Ckusum->net_metering = $request->net_metering;
        $Ckusum->net_metering_date = $request->net_metering_date;
        $Ckusum->payment_50 = $request->payment_50;
        $Ckusum->payment_50_date = $request->payment_50_date;
        $Ckusum->payment_35 = $request->payment_35;
        $Ckusum->payment_35_date = $request->payment_35_date;
        $Ckusum->payment_15 = $request->payment_15;
        $Ckusum->payment_15_date = $request->payment_15_date;
        $Ckusum->c_payment_status = $request->c_payment_status;
        $Ckusum->c_payment__date = $request->c_payment__date;
        $Ckusum->Inverter_no = $request->Inverter_no;
        $Ckusum->rmsid = $request->rmsid;
        $Ckusum->imei = $request->imei;
        $Ckusum->save();
        if ($Ckusum) {
            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $key => $value) {
                    $modules = [
                        'sr_no' => $request->modules[$key],

                    ];
                    $Ckusum->CkusumModulee()->create($modules);
                }
            }
            return redirect()->back()->with('status', 'Data Saved Successfully !!!');
        }
    }
    public function view_kusum_C(Request $request)
    {
        // $data['Ckusums'] = CKusumDetail::with('CkusumModulee')->get();
             $data['Ckusums'] = CKusumDetail::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('up.CKusum.view-CKusum', $data);
    }
    
    public function getModules(Request $request)
    {
        $id = $request->ck_id;
        $modules =CKusumModule::where('c_kusum_detail_id', $id)->pluck('sr_no')->toArray();
        return response()->json(['ck_id' => $id, 'modules' => $modules]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['Ckusum'] = CKusumDetail::find($id);
        $data['state'] = $request->session()->get('state');
        $data['role'] = $request->session()->get('role');
        return view('up.CKusum.edit-CKusum', $data);
    }

    public function update_CKusum(Request $request)
    {
        $id = $request->kid;
        $Ckusum = CKusumDetail::findOrFail($id);
        $Ckusum->lot_no = $request->lot_no;
        $Ckusum->f_customer_no = $request->f_customer_no;
        $Ckusum->f_farmer_name = $request->f_farmer_name;
        $Ckusum->f_father_name = $request->f_father_name;
        $Ckusum->f_contact = $request->f_contact;
        $Ckusum->f_aadhar = $request->f_aadhar;
        $Ckusum->f_village = $request->f_village;
        $Ckusum->f_post = $request->f_post;
        $Ckusum->f_tehsil = $request->f_tehsil;
        $Ckusum->f_district = $request->f_district;
        $Ckusum->f_pin = $request->f_pin;
        $Ckusum->f_invoice_no = $request->f_invoice_no;
        $Ckusum->f_invoice_date = $request->f_invoice_date;
        $Ckusum->pump_capacity = $request->pump_capacity;
        $Ckusum->c_contractor_name = $request->c_contractor_name;
        $Ckusum->KLK_Firm = $request->KLK_Firm;
        $Ckusum->c_contact_no = $request->c_contact_no;
        $Ckusum->c_email = $request->email;
        $Ckusum->sd_survey_done = $request->sd_survey_done;
        $Ckusum->sd_latitude = $request->sd_latitude;
        $Ckusum->sd_longitude = $request->sd_longitude;
        $Ckusum->sd_survey_received = $request->sd_survey_received;
        $Ckusum->sd_survey_received_date = $request->sd_survey_received_date;
        $Ckusum->mt_inverter = $request->mt_inverter;
        $Ckusum->mt_structure = $request->mt_structure;
        $Ckusum->mt_modules = $request->mt_modules;
        $Ckusum->mt_bos = $request->mt_bos;
        $Ckusum->mt_date = $request->mt_date;
        $Ckusum->ins_foundation = $request->ins_foundation;
        $Ckusum->ins_foundation_date = $request->ins_foundation_date;
        $Ckusum->ins_structure = $request->ins_structure;
        $Ckusum->ins_structure_data = $request->ins_structure_data;
        $Ckusum->ins_module_mounting = $request->ins_module_mounting;
        $Ckusum->ins_module_mounting_date = $request->ins_module_mounting_date;
        $Ckusum->ins_inverter_installation = $request->ins_inverter_installation;
        $Ckusum->ins_inverter_installation_date = $request->ins_inverter_installation_date;
        $Ckusum->inspection_done = $request->inspection_done;
        $Ckusum->doc_hoc = $request->doc_hoc;
        $Ckusum->doc_hoc_date = $request->doc_hoc_date;
        $Ckusum->doc_hoc_photo = $request->doc_hoc_photo;
        $Ckusum->doc_hoc_photo_date = $request->doc_hoc_photo_date;
        $Ckusum->file_submission = $request->file_submission;
        $Ckusum->file_submission_date = $request->file_submission_date;
        $Ckusum->net_metering = $request->net_metering;
        $Ckusum->net_metering_date = $request->net_metering_date;
        $Ckusum->payment_50 = $request->payment_50;
        $Ckusum->payment_50_date = $request->payment_50_date;
        $Ckusum->payment_35 = $request->payment_35;
        $Ckusum->payment_35_date = $request->payment_35_date;
        $Ckusum->payment_15 = $request->payment_15;
        $Ckusum->payment_15_date = $request->payment_15_date;
        $Ckusum->c_payment_status = $request->c_payment_status;
        $Ckusum->c_payment__date = $request->c_payment__date;
        $Ckusum->Inverter_no = $request->Inverter_no;
        $Ckusum->rmsid = $request->rmsid;
        $Ckusum->imei = $request->imei;
        $Ckusum->save();


        if ($Ckusum) {
            $Ckusum->CkusumModulee()->delete();

            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $moduleId => $moduleValue) {
                    $module = CKusumModule::find($moduleId);
                        $Ckusum->CkusumModulee()->create(['sr_no' => $moduleValue]);
                    
                }
            }
            return redirect()->back()->with('status', 'CKusumDetail updated successfully!');
        }
    }

   
    
}
