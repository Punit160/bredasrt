<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JammuSrt;
use Illuminate\Support\Facades\DB;
use Session;

class JammuSrtController extends Controller
{


    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('jammu.jammu-srt.add-jammu-srt', $data);
    }

    public function create(Request $request)
    {

        $validator = $request->validate([
            'consumer_mobile' => 'required|digits:10',
            'installer_mobile' => 'required|digits:10',
        ]);
        $username = $request->session()->get('loginName');

        $jammuSrt = new JammuSrt();
        $jammuSrt->timestamp = $request->timestamp;
        $jammuSrt->app_status = $request->app_status;
        $jammuSrt->scheme = $request->scheme;
        $jammuSrt->app_no = $request->app_no;
        $jammuSrt->reg_no = $request->reg_no;
        $jammuSrt->installer_name = $request->installer_name;
        $jammuSrt->installer_category = $request->installer_category;
        $jammuSrt->pv_band = $request->pv_band;
        $jammuSrt->project_name = $request->project_name;
        $jammuSrt->pv_capacity = $request->pv_capacity;
        $jammuSrt->discom_name = $request->discom_name;
        $jammuSrt->consumer_no = $request->consumer_no;
        $jammuSrt->division = $request->division;
        $jammuSrt->sub_divison = $request->sub_divison;
        $jammuSrt->sanction = $request->sanction;
        $jammuSrt->phase_inverter = $request->phase_inverter;
        $jammuSrt->category = $request->category;
        $jammuSrt->provider = $request->provider;
        $jammuSrt->lat = $request->lat;
        $jammuSrt->long = $request->long;
        $jammuSrt->consumer_email = $request->consumer_email;
        $jammuSrt->consumer_mobile = $request->consumer_mobile;
        $jammuSrt->installer_email = $request->installer_email;
        $jammuSrt->installer_mobile = $request->installer_mobile;
        $jammuSrt->name_prefix = $request->name_prefix;
        $jammuSrt->first_name = $request->first_name;
        $jammuSrt->middle_name = $request->middle_name;
        $jammuSrt->last_name = $request->last_name;
        $jammuSrt->landline_no = $request->landline_no;
        $jammuSrt->street_house_no = $request->street_house_no;
        $jammuSrt->taluka = $request->taluka;
        $jammuSrt->district = $request->district;
        $jammuSrt->city_village = $request->city_village;
        $jammuSrt->state = $request->state;
        $jammuSrt->pin = $request->pin;
        $jammuSrt->comm_address = $request->comm_address;
        $jammuSrt->passport_size_photo = $request->passport_size_photo;
        $jammuSrt->premises_ownership = $request->premises_ownership;
        $jammuSrt->electricity_bill = $request->electricity_bill;
        $jammuSrt->aadhaar_no = $request->aadhaar_no;
        $jammuSrt->solar_pv_owned_by_consumer = $request->solar_pv_owned_by_consumer;
        $jammuSrt->subsidy = $request->subsidy;
        $jammuSrt->otp_verified_on = $request->otp_verified_on;
        $jammuSrt->signed_doc_upload_date = $request->signed_doc_upload_date;
        $jammuSrt->last_comment = $request->last_comment;
        $jammuSrt->last_comment_date = $request->last_comment_date;
        $jammuSrt->last_comment_replied_date = $request->last_comment_replied_date;
        $jammuSrt->doc_verified_date = $request->doc_verified_date;
        $jammuSrt->field_report_status_received = $request->field_report_status_received;
        $jammuSrt->quotation_no = $request->quotation_no;
        $jammuSrt->discom_estimate_amount = $request->discom_estimate_amount;
        $jammuSrt->due_date = $request->due_date;
        $jammuSrt->pay_received = $request->pay_received;
        $jammuSrt->pay_made_on = $request->pay_made_on;
        $jammuSrt->self_certify = $request->self_certify;
        $jammuSrt->cei_app_id = $request->cei_app_id;
        $jammuSrt->cei_approval_date = $request->cei_approval_date;
        $jammuSrt->work_order_no = $request->work_order_no;
        $jammuSrt->work_order_date = $request->work_order_date;
        $jammuSrt->work_start_date = $request->work_start_date;
        $jammuSrt->work_end_date = $request->work_end_date;
        $jammuSrt->bi_meter_make = $request->bi_meter_make;
        $jammuSrt->bi_meter_no = $request->bi_meter_no;
        $jammuSrt->solar_meter_make = $request->solar_meter_make;
        $jammuSrt->solar_meter_no = $request->solar_meter_no;
        $jammuSrt->install_solar_meter_date = $request->install_solar_meter_date;
        $jammuSrt->agreement_signing_date = $request->agreement_signing_date;
        $jammuSrt->project_estimated_cost = $request->project_estimated_cost;
        $jammuSrt->pcr_number = $request->pcr_number;
        $jammuSrt->pcr_submit_date = $request->pcr_submit_date;
        $jammuSrt->created_by = $username;
        $jammuSrt->save();
        return redirect()->back()->with('status', ' Data Saved Successfully !!!');
    }
    public function view_jammu_srt(Request $request)
    {
        $state = $request->session()->get('state');
        $data['srts'] = DB::table('jammu_srts')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('jammu.jammu-srt.view-jammu-srt', $data);
    }


    public function edit(Request $request, $id)
    {
        $data['JammuSrt'] = JammuSrt::find($id);

        return view('jammu.jammu-srt.update-jammu-srt', $data);
    }
    public function update_jammu_srt(Request $request)
    {
        $validator = $request->validate([
            'consumer_mobile' => 'required|digits:10',
            'installer_mobile' => 'required|digits:10',
        ]);
        $id = $request->jid;
        $jammuSrt = jammuSrt::find($id);
        $jammuSrt->timestamp = $request->timestamp;
        $jammuSrt->app_status = $request->app_status;
        $jammuSrt->scheme = $request->scheme;
        $jammuSrt->app_no = $request->app_no;
        $jammuSrt->reg_no = $request->reg_no;
        $jammuSrt->installer_name = $request->installer_name;
        $jammuSrt->installer_category = $request->installer_category;
        $jammuSrt->pv_band = $request->pv_band;
        $jammuSrt->project_name = $request->project_name;
        $jammuSrt->pv_capacity = $request->pv_capacity;
        $jammuSrt->discom_name = $request->discom_name;
        $jammuSrt->consumer_no = $request->consumer_no;
        $jammuSrt->division = $request->division;
        $jammuSrt->sub_divison = $request->sub_divison;
        $jammuSrt->sanction = $request->sanction;
        $jammuSrt->phase_inverter = $request->phase_inverter;
        $jammuSrt->category = $request->category;
        $jammuSrt->provider = $request->provider;
        $jammuSrt->lat = $request->lat;
        $jammuSrt->long = $request->long;
        $jammuSrt->consumer_email = $request->consumer_email;
        $jammuSrt->consumer_mobile = $request->consumer_mobile;
        $jammuSrt->installer_email = $request->installer_email;
        $jammuSrt->installer_mobile = $request->installer_mobile;
        $jammuSrt->name_prefix = $request->name_prefix;
        $jammuSrt->first_name = $request->first_name;
        $jammuSrt->middle_name = $request->middle_name;
        $jammuSrt->last_name = $request->last_name;
        $jammuSrt->landline_no = $request->landline_no;
        $jammuSrt->street_house_no = $request->street_house_no;
        $jammuSrt->taluka = $request->taluka;
        $jammuSrt->district = $request->district;
        $jammuSrt->city_village = $request->city_village;
        $jammuSrt->state = $request->state;
        $jammuSrt->pin = $request->pin;
        $jammuSrt->comm_address = $request->comm_address;
        $jammuSrt->passport_size_photo = $request->passport_size_photo;
        $jammuSrt->premises_ownership = $request->premises_ownership;
        $jammuSrt->electricity_bill = $request->electricity_bill;
        $jammuSrt->aadhaar_no = $request->aadhaar_no;
        $jammuSrt->solar_pv_owned_by_consumer = $request->solar_pv_owned_by_consumer;
        $jammuSrt->subsidy = $request->subsidy;
        $jammuSrt->otp_verified_on = $request->otp_verified_on;
        $jammuSrt->signed_doc_upload_date = $request->signed_doc_upload_date;
        $jammuSrt->last_comment = $request->last_comment;
        $jammuSrt->last_comment_date = $request->last_comment_date;
        $jammuSrt->last_comment_replied_date = $request->last_comment_replied_date;
        $jammuSrt->doc_verified_date = $request->doc_verified_date;
        $jammuSrt->field_report_status_received = $request->field_report_status_received;
        $jammuSrt->quotation_no = $request->quotation_no;
        $jammuSrt->discom_estimate_amount = $request->discom_estimate_amount;
        $jammuSrt->due_date = $request->due_date;
        $jammuSrt->pay_received = $request->pay_received;
        $jammuSrt->pay_made_on = $request->pay_made_on;
        $jammuSrt->self_certify = $request->self_certify;
        $jammuSrt->cei_app_id = $request->cei_app_id;
        $jammuSrt->cei_approval_date = $request->cei_approval_date;
        $jammuSrt->work_order_no = $request->work_order_no;
        $jammuSrt->work_order_date = $request->work_order_date;
        $jammuSrt->work_start_date = $request->work_start_date;
        $jammuSrt->work_end_date = $request->work_end_date;
        $jammuSrt->bi_meter_make = $request->bi_meter_make;
        $jammuSrt->bi_meter_no = $request->bi_meter_no;
        $jammuSrt->solar_meter_make = $request->solar_meter_make;
        $jammuSrt->solar_meter_no = $request->solar_meter_no;
        $jammuSrt->install_solar_meter_date = $request->install_solar_meter_date;
        $jammuSrt->agreement_signing_date = $request->agreement_signing_date;
        $jammuSrt->project_estimated_cost = $request->project_estimated_cost;
        $jammuSrt->pcr_number = $request->pcr_number;
        $jammuSrt->pcr_submit_date = $request->pcr_submit_date;
        $jammuSrt->save();
        return back()->with('status', 'Data Updated Successfully');
    }
    public function destroy($id)
    {
        $JammuSrt = JammuSrt::find($id);
        $JammuSrt->delete();
        return redirect(route("view-jammu-srt"))->with('status', 'Data Deleted Successfully!!');
    }
}
