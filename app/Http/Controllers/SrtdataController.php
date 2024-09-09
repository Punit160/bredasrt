<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Srtdata;
use DB;
use Session;
use file;

class SrtdataController extends Controller
{
    
    
        public function main_srt_data(Request $request, $status){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $role = $request->session()->get('role');
        if($status == 'not-dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('material_i_date','NA')->where('state',$state)->where('cancel_site','No' )->get();
        }
        elseif($status == 'dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('material_i_date','!=','N/A')->where('state',$state)->where('cancel_site','No' )->get();
        }
        elseif($status == 'not-install'){
            $data['srts'] = DB::table('srtdatas')->where('installation_status', '!=' ,'Installed' )->where('state',$state)->where('cancel_site','No' )->get();
        }
         elseif($status == 'install'){
            $data['srts'] = DB::table('srtdatas')->where('installation_status', '=' ,'Installed' )->where('state',$state)->where('cancel_site','No' )->get();
        }
         elseif($status == 'not-ic-bill-submit'){
            $data['srts'] = DB::table('srtdatas')->where('ic_bill_nsubmit', '!=' ,'Yes' )->where('state',$state)->where('cancel_site', '!=' ,'No' )->get();
        }
         elseif($status == 'ic-bill-submit'){
            $data['srts'] = DB::table('srtdatas')->where('ic_bill_nsubmit', 'Yes' )->where('state',$state)->where('cancel_site', '!=' ,'No' )->get();
        }
        elseif($status == 'not-rms-working'){
            $data['srts'] = DB::table('srtdatas')->where('rms_status', '!=' ,'Installed' )->where('state',$state)->where('installation_status', '=' ,"Installed")->get();
        }
         elseif($status == 'rms-working'){
            $data['srts'] = DB::table('srtdatas')->where('rms_status', '=' ,'Installed' )->where('state',$state)->where('installation_status', '=' ,"Installed")->get();
        }
        elseif($status == 'meter-not-install'){
            $data['srts'] = DB::table('srtdatas')->where('metering_status', '!=' ,'Installed' )->where('installation_status', '=' ,'Installed' )->where('state',$state)->get();
        }
         elseif($status == 'meter-install'){
            $data['srts'] = DB::table('srtdatas')->where('metering_status', 'Installed' )->where('installation_status', '=' ,'Installed' )->where('state',$state)->get();
        }
        elseif($status == 'not-material-payment'){
            $data['srts'] = DB::table('srtdatas')->where('material_payment', '!=' ,'Yes' )->where('state',$state)->where('cancel_site','No' )->where('material_i_date','!=','N/A')->get();
        }
         elseif($status == 'material-payment'){
            $data['srts'] = DB::table('srtdatas')->where('material_payment', '=' ,'Yes' )->where('state',$state)->where('cancel_site','No' )->where('material_i_date','!=','N/A')->get();
        }
        elseif($status == 'ic-payment'){
            $data['srts'] = DB::table('srtdatas')->where('final_i_dt', '=' ,'Yes' )->where('state',$state)->where('installation_status', '=' ,'Installed' )->get();
        }
        elseif($status == 'not-ic-payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status', '=' ,'Installed' )->where('final_i_dt', '!=' ,'Yes' )->get();
        }
        elseif($status == 'phase'){
           $data['srts'] = DB::table('srtdatas')->where('phase', $phase)->where('state',$state)->where('cancel_site','No')->get(); 
        }
        elseif($status == 'cancel-site'){
            $data['srts'] = DB::table('srtdatas')->where('cancel_site', '!=' ,'No' )->where('state',$state)->get();
        }
        elseif($status == 'feasible-site'){
           $data['srts'] = DB::table('srtdatas')->where('cancel_site', '=' ,'No' )->where('state',$state)->get(); 
        }
        return view('srt.srt-data', $data);
       
    }

    public function index(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $role = $request->session()->get('role');
        $data['query'] =DB::table('srtdatas')
        ->select(
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA"  THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_i_date = "NA" AND cancel_site = "No"  THEN sanction_load ELSE 0 END) AS material_ni_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN material_payment != "Yes" THEN sanction_load ELSE 0 END) AS material_npayment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" AND cancel_site = "No" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN installation_status != "Installed" AND cancel_site = "No" THEN sanction_load END) AS installation_nstatus'),
            DB::raw('COUNT(CASE WHEN installation_status != "Installed"   THEN site_name END) AS count_not_install'),
            DB::raw('COUNT(CASE WHEN installation_status = "Installed" THEN site_name END) AS count_install'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('SUM(CASE WHEN ic_bill_submit != "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_nsubmit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN metering_status != "Installed" THEN site_name END) AS metering_nstatus'),
            DB::raw('SUM(CASE WHEN metering_status = "Installed" THEN sanction_load ELSE 0 END) AS metering_load'),
            DB::raw('SUM(CASE WHEN metering_status != "Installed" THEN sanction_load ELSE 0 END) AS metering_nload'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN rms_status != "Installed" THEN firm_name END) AS rms_nstatus'),
            DB::raw('SUM(CASE WHEN rms_status = "Installed" THEN sanction_load ELSE 0 END) AS rms_load'),
            DB::raw('SUM(CASE WHEN rms_status != "Installed" THEN sanction_load ELSE 0 END) AS rms_nload'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment'),
            DB::raw('SUM(CASE WHEN final_i_dt != "Yes" THEN sanction_load ELSE 0 END) AS ic_npayment'),
            DB::raw('COUNT(CASE WHEN cancel_site != "No" THEN site_name END) AS site_cancel'),
            DB::raw('SUM(CASE WHEN cancel_site != "No" THEN sanction_load ELSE 0 END) AS cancel_load'),
            DB::raw('COUNT(CASE WHEN cancel_site = "No" THEN site_name END) AS site_not_cancel'),
            DB::raw('SUM(CASE WHEN cancel_site = "No" THEN sanction_load ELSE 0 END) AS not_cancel_load'),
        )
        ->where('state',$state)
        ->first();
        
           $data['vendors'] =DB::table('srtdatas')
        ->select(
            'vendor',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('vendor')
        ->where('state',$state)
        ->get();

        
         $data['srt_g'] = DB::table('srtdatas')
        ->select(
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('COUNT(CASE WHEN installation_status = "Cancelled" THEN firm_name END) AS nf'),
            DB::raw('COUNT(CASE WHEN material_i_date != "NA" THEN firm_name END) AS material_i_date'),
            DB::raw('COUNT(CASE WHEN material_payment = "Yes" THEN firm_name ELSE 0 END) AS material_payment'),
            DB::raw('COUNT(CASE WHEN installation_status = "Installed" THEN firm_name END) AS installation_status'),
            DB::raw('COUNT(CASE WHEN inspect_image = "Yes" THEN firm_name END) AS inspect'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN firm_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('COUNT(CASE WHEN final_i_dt = "yes" THEN firm_name END) AS ic_payment'),
            DB::raw('SUM(CASE WHEN material_i_date = "NA" AND phase != "N/F"  THEN sanction_load ELSE 0 END) AS not_dispatch'),
            DB::raw('COUNT(CASE WHEN installation_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_install'),
            DB::raw('COUNT(CASE WHEN installation_status = "Installed" AND phase != "N/F" THEN firm_name END) AS install'),
            DB::raw('COUNT(CASE WHEN rms_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_rms'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" AND phase != "N/F" THEN firm_name END) AS rms'),
            DB::raw('COUNT(CASE WHEN metering_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_meter'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" AND phase != "N/F" THEN firm_name END) AS meter'),
               DB::raw('COUNT(CASE WHEN geo_image_status != "Yes" AND phase != "N/F" THEN firm_name END) AS not_image'),
        )
        ->where('state',$state)
        ->first();
        
        
        $data['mainsrt'] = DB::table('srtdatas')
        ->select(
                 'phase',
            DB::raw('SUM(CASE WHEN material_i_date = "NA"  THEN sanction_load ELSE 0 END) AS not_dispatch'),
            DB::raw('COUNT(CASE WHEN installation_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_install'),
            DB::raw('COUNT(CASE WHEN installation_status = "Installed" AND phase != "N/F" THEN firm_name END) AS install'),
            DB::raw('COUNT(CASE WHEN rms_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_rms'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" AND phase != "N/F" THEN firm_name END) AS rms'),
            DB::raw('COUNT(CASE WHEN metering_status != "Installed" AND phase != "N/F" THEN firm_name END) AS not_meter'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" AND phase != "N/F" THEN firm_name END) AS meter'),
            DB::raw('COUNT(CASE WHEN geo_image_status != "Yes" THEN firm_name END) AS not_image'),
        )
        ->groupBy('phase')
        ->where('phase', '!=', 'N/F')
        ->where('state',$state)
        ->get();


        $data['phases'] =DB::table('srtdatas')
        ->select(
            'phase',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('phase')
        ->where('state',$state)
        ->get();


        $data['sum'] =DB::table('srtdatas')
        ->select(
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->where('state',$state)
        ->get();


        $data['vendors'] =DB::table('srtdatas')
        ->select(
            'vendor',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('vendor')
        ->where('state',$state)
        ->get();


        $data['districts'] = DB::table('srtdatas')
        ->select(
            'district',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "NA" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN sanction_load ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN sanction_load ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('district')
        ->where('state',$state)
        ->get();
        
        return view('index', $data);
    }


  public function view_srt(Request $request)
{
    $data['username'] = $request->session()->get('loginName');
    $data['role'] = $request->session()->get('role');
    $state = $request->session()->get('state');
    $data['phase'] = DB::table('srtdatas')->select('phase')->distinct()->where('state',$state)->get();

    $filter_district = $request->session()->get('filter_district');
    $filter_phase = $request->session()->get('filter_phase');
    $filter_site_name = $request->session()->get('filter_site_name');

    $data['filter_district'] = $filter_district;
    $data['filter_phase'] = $filter_phase;
    $data['filter_site_name'] = $filter_site_name;

    if ($filter_phase || $filter_district || $filter_site_name) {
        $res = DB::table('srtdatas');

        if ($filter_phase) {
            $res->where('phase', $filter_phase);
        }

        if ($filter_district) {
            $res->where('district', $filter_district,);
        }

        if ($filter_site_name) {
            $res->where('site_name', $filter_site_name);
        }

        $data['srts'] = $res->where('state',$state)->get();
    } else {
        $data['srts'] = DB::table('srtdatas')->where('state',$state)->get();
    }

    return view('srt.view-srtdata', $data);
}

public function getDistricts($phase)
    {
        $phases = Srtdata::where('phase', $phase)
            ->distinct()
            ->pluck('district')
            ->toArray();

        return response()->json($phases);
    }
   
    public function getSites(Request $request)
{
    $district = $request->input('district');
    $phase = $request->input('phase');

    $sitename = Srtdata::where('district', $district)
        ->where('phase', $phase)
        ->distinct()
        ->select(['site_name','id'])
        ->get();

    return response()->json($sitename);
}


   

    public function edit(Request $request,$id)
    {
        $data['srt'] = Srtdata::find($id);
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        return view('srt.update-srt', $data);
    }

    public function update(Request $request, $id)
    {

        $srt =  Srtdata::find($id);
        $srt->discom = $request->discom;
        $srt->district = $request->district;
        $srt->dept_name = $request->dept_name;
        $srt->site_name = $request->site_name;
        $srt->location = $request->location;
        $srt->firm_name = $request->firm_name;
        $srt->ca_no = $request->ca_no;
        $srt->sanction_load = $request->sanction_load;
        $srt->sanction_load = $request->sanction_load;
        $srt->wo_no = $request->wo_no;
        $srt->phase = $request->phase;
        $srt->vendor = $request->vendor;
        $srt->date = $request->date;
        $srt->material_i_date = $request->material_i_date;
        $srt->mb_invoice = $request->mb_invoice;
        $srt->material_payment = $request->material_payment;
        $srt->installation_status = $request->installation_status;
        $srt->inst_remarks = $request->inst_remarks;
        $srt->ic_bill_submit = $request->ic_bill_submit;
        $srt->bill_i_no = $request->bill_i_no;
        $srt->ic_payment = $request->ic_payment;
        $srt->ic_date = $request->ic_date;
        $srt->net_meter_submit_date = $request->net_meter_submit_date;
        $srt->metering_status = $request->metering_status;
        $srt->smart_meter = $request->smart_meter;
        $srt->convert_nm = $request->convert_nm;
        $srt->nm_required = $request->nm_required;
        $srt->nm_install = $request->nm_install;
        $srt->test_slip = $request->test_slip;

        if ($request->file('ts_image')) {
            $image = $request->file('ts_image');
            $imageName = "ts_image-" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->ts_image = $imageName;
        }

        $srt->fix_slip = $request->fix_slip;

        if ($request->file('fs_image')) {
            $image = $request->file('fs_image');
            $imageName = "fs_image-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_images'), $imageName);
            $srt->fs_image = $imageName;
        }


        $srt->meter_i_date = $request->meter_i_date;
        $srt->rms_url = $request->rms_url;
        $srt->rms_status = $request->rms_status;
        $srt->geo_image_status = $request->geo_image_status;


        if ($request->file('geo_image1')) {
            $image = $request->file('geo_image1');
            $imageName = "geo_image1" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->geo_image1 = $imageName;
        }
        if ($request->file('geo_image2')) {
            $image = $request->file('geo_image2');
            $imageName = "geo_image2" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->geo_image2 = $imageName;
        }
        if ($request->file('geo_image3')) {
            $image = $request->file('geo_image3');
            $imageName = "geo_image3" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->geo_image3 = $imageName;
        }
        if ($request->file('geo_image4')) {
            $image = $request->file('geo_image4');
            $imageName = "geo_image4" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->geo_image4 = $imageName;
        }

        $srt->abc_format = $request->abc_format;
        if ($request->file('abc_photo')) {
            $image = $request->file('abc_photo');
            $imageName = "abc_photo" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->abc_photo = $imageName;
        }
        $srt->comm_report = $request->comm_report;
        if ($request->file('cr_doc')) {
            $image = $request->file('cr_doc');
            $imageName = "cr_doc" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->cr_doc = $imageName;
        }
        $srt->iv_curv = $request->iv_curv;
        if ($request->file('iv_curv_doc')) {
            $image = $request->file('iv_curv_doc');
            $imageName = "iv_curv_doc" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_images'), $imageName);

            $srt->iv_curv_doc = $imageName;
        }
        $srt->inspect_image = $request->inspect_image;
        $srt->insurance = $request->insurance;
        if ($request->file('insurance_copy')) {
            $image = $request->file('insurance_copy');
            $imageName = "insurance_copy-" . time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('upload_images'), $imageName);

            $srt->insurance_copy = $imageName;
        }
        $srt->wms = $request->wms;
        $srt->wms_login = $request->wms_login;
        $srt->final_i_dt = $request->final_i_dt;
        $srt->agency_remarks = $request->agency_remarks;
        $srt->updated_by = $request->updated_by;
        $srt->save();
        return back()->with('status', 'Details Updated Successfully');
    }

    
    public function view_full_data(Request $request,$id)
    {
        $data['srt'] = Srtdata::find($id);
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        return view('srt.view-full', $data);
    }
    
    
     public function filter(Request $request)
    {
        $request->session()->put('filter_district', $request->district);
        $request->session()->put('filter_phase', $request->phase);
        $request->session()->put('filter_site_name', $request->site_name);
        return back();
    }
    
    
    
    public function srt_data(Request $request, $status,$phase){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'not-dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_i_date','NA')->where('phase', $phase)->get();
        }
        elseif($status == 'not-install'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status', '!=' ,'Installed' )->where('phase', $phase)->get();
        }
         elseif($status == 'install'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status', '=' ,'Installed' )->where('phase', $phase)->get();
        }
        elseif($status == 'not-working-meter'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('metering_status', '!=' ,'Installed' )->where('phase', $phase)->get();
        }
         elseif($status == 'working-meter'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('metering_status', '=' ,'Installed' )->where('phase', $phase)->get();
        }
        elseif($status == 'not-rms-working'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('rms_status', '!=' ,'Installed' )->where('phase', $phase)->get();
        }
         elseif($status == 'rms-working'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('rms_status', '=' ,'Installed' )->where('phase', $phase)->get();
        }
        elseif($status == 'pending-image'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('geo_image_status', '!=' ,'Yes' )->where('phase', $phase)->get();
        }
        elseif($status == 'phase'){
           $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('phase', $phase)->get(); 
        }
        return view('srt.srt-data', $data);
       
    }
    

    public function phase_srt_data(Request $request, $status,$phase){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
        if($status == 'dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_i_date','!=','NA')->where('phase', $phase)->get();
        }
        elseif($status == 'payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_payment','Yes')->where('phase', $phase)->get();
        }
        elseif($status == 'Installed'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status','Installed' )->where('phase', $phase)->get();
        }
         elseif($status == 'bill-submit'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('ic_bill_submit','Yes' )->where('phase', $phase)->get();
        }
        elseif($status == 'meter'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('metering_status','Installed' )->where('phase', $phase)->get();
        }
         elseif($status == 'rms'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('rms_status', '=' ,'Installed' )->where('phase', $phase)->get();
        }
        elseif($status == 'abc-format'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('abc_format','Yes' )->where('phase', $phase)->get();
        }
         elseif($status == 'geo-image'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('geo_image_status', 'Yes' )->where('phase', $phase)->get();
        }
        elseif($status == 'insurance'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('insurance','Yes' )->where('phase', $phase)->get();
        }
        elseif($status == 'bill_i_no'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('bill_i_no', '!=','N/A' )->where('phase', $phase)->get();
        }
         elseif($status == 'ic-payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('final_i_dt','Yes' )->where('phase', $phase)->get();
        }
        elseif($status == 'phase'){
           $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('phase', $phase)->get(); 
        }
        return view('srt.srt-data', $data);
       
    }
    
    
    
 public function district_srt_data(Request $request, $status,$district){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_i_date','!=','NA')->where('district', $district)->get();
        }
        elseif($status == 'payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_payment','Yes')->where('district', $district)->get();
        }
        elseif($status == 'Installed'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status','Installed' )->where('district', $district)->get();
        }
         elseif($status == 'bill-submit'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('ic_bill_submit','Yes' )->where('district', $district)->get();
        }
        elseif($status == 'meter'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('metering_status','Installed' )->where('district', $district)->get();
        }
         elseif($status == 'rms'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('rms_status', '=' ,'Installed' )->where('district', $district)->get();
        }
        elseif($status == 'abc-format'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('abc_format','Yes' )->where('district', $district)->get();
        }
         elseif($status == 'geo-image'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('geo_image_status', 'Yes' )->where('district', $district)->get();
        }
        elseif($status == 'insurance'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('insurance','Yes' )->where('district', $district)->get();
        }
        elseif($status == 'bill_i_no'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('bill_i_no', '!=','N/A' )->where('district', $district)->get();
        }
         elseif($status == 'ic-payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('final_i_dt','Yes' )->where('district', $district)->get();
        }
        elseif($status == 'district'){
           $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('district', $district)->get(); 
        }
        return view('srt.srt-data', $data);
       
    }
    
    
     public function vendor_srt_data(Request $request, $status,$vendor){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $state = $request->session()->get('state');
         if($status == 'dispatched'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_i_date','!=','NA')->where('vendor', $vendor)->get();
        }
        elseif($status == 'payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('material_payment','Yes')->where('vendor', $vendor)->get();
        }
        elseif($status == 'Installed'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('installation_status','Installed' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'bill-submit'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('ic_bill_submit','Yes' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'meter'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('metering_status','Installed' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'rms'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('rms_status', '=' ,'Installed' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'abc-format'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('abc_format','Yes' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'geo-image'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('geo_image_status', 'Yes' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'insurance'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('insurance','Yes' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'bill_i_no'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('bill_i_no', '!=','N/A' )->where('vendor', $vendor)->get();
        }
         elseif($status == 'ic-payment'){
            $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('final_i_dt','Yes' )->where('vendor', $vendor)->get();
        }
        elseif($status == 'vendor'){
           $data['srts'] = DB::table('srtdatas')->where('state',$state)->where('vendor', $vendor)->get(); 
        }
        return view('srt.srt-data', $data);
       
    }
    
    
    
}
