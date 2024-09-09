<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jammu;
use App\Models\JammuModule;
use App\Models\Upsurvey;
use App\Models\CKusumDetail;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
use file;

class UpController extends Controller
{
  
    public function dash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state'); 
        $state = $request->session()->get('state');

        $data['jk_count'] = Upsurvey::count();
        $data['material_supply'] = Upsurvey::where('pump_make','!=','No')->where('module_make','!=','No')->where('vfd_make','!=','No')->count();
        $data['material_not_supply'] = Upsurvey::where('pump_make','No')->where('module_make','No')->where('vfd_make','No')->count();
        $data['surveydone'] = Upsurvey::where('survey_done', 'yes')->count();
        $data['total_install'] = Upsurvey::where('sys_install_date','!=' ,'')->count();
        $data['total_not_install'] = Upsurvey::where('sys_install_date','')->count();
        $data['inspection_done'] =  Upsurvey::where('sys_inspect_date','!=','')->count();
        $data['inspection_not_done'] = Upsurvey::where('sys_inspect_date','')->count();
        $data['file_submit'] = Upsurvey::where('file_submit', 'yes')->count();
        $data['file_not_submit'] = Upsurvey::where('file_submit', '!=', 'yes')->count();
        $data['pay10'] = Upsurvey::where('pay_10', 'Yes')->count();
        $data['notpay10'] = Upsurvey::where('pay_10', '!=', 'Yes')->count();
        $data['pay90'] = Upsurvey::where('pay_90', 'Yes')->count();
        $data['notpay90'] = Upsurvey::where('pay_90','!=','Yes')->count();
        $data['capacity'] = Upsurvey::select('pump_capacity', DB::raw('COUNT(pump_capacity) AS pump_count'))->groupBy('pump_capacity')->get();
        $data['pumptype'] = Upsurvey::select('required_pump', DB::raw('COUNT(required_pump) AS count_type'))->groupBy('required_pump')->get();

        $data['vendorwise'] = DB::table('upsurveys')
            ->select(
                'vendor',
                   DB::raw('COUNT(application_no) AS allocate'),
                DB::raw('SUM(CASE WHEN pump_make != "No" AND module_make != "No" AND vfd_make != "No"  THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN pump_make = "No" AND module_make = "No" AND vfd_make = "No" THEN 1 ELSE 0 END) AS not_supplied'),
                DB::raw('SUM(CASE WHEN sys_install_date != "" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN sys_install_date = "" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN sys_inspect_date != ""  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN sys_inspect_date = ""   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN pay_90 = "Yes" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN pay_90 != "Yes" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN pay_10 = "Yes" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN pay_10 != "Yes" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->groupBy('vendor')
            ->get();
            
            
        $data['districtwise'] = DB::table('upsurveys')
            ->select(
                 'installation_dsitrict',
                DB::raw('COUNT(application_no) AS allocate'),
                DB::raw('SUM(CASE WHEN pump_make != "No" AND module_make != "No" AND vfd_make != "No"  THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN pump_make = "No" AND module_make = "No" AND vfd_make = "No" THEN 1 ELSE 0 END) AS not_supplied'),
                DB::raw('SUM(CASE WHEN sys_install_date != "" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN sys_install_date = "" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN sys_inspect_date != ""  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN sys_inspect_date = ""   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN pay_90 = "Yes" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN pay_90 != "Yes" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN pay_10 = "Yes" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN pay_10 != "Yes" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->groupBy('installation_dsitrict')
            ->get();

        $data['query'] = DB::table('upsurveys')
            ->select(
                DB::raw('COUNT(application_no) AS allocate'),
                DB::raw('SUM(CASE WHEN pump_make != "No" AND module_make != "No" AND vfd_make != "No"  THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN pump_make = "No" AND module_make = "No" AND vfd_make = "No" THEN 1 ELSE 0 END) AS not_supplied'),
                DB::raw('SUM(CASE WHEN sys_install_date != "" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN sys_install_date = "" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN sys_inspect_date != ""  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN sys_inspect_date = ""   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN pay_90 = "Yes" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN pay_90 != "Yes" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN pay_10 = "Yes" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN pay_10 != "Yes" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->first();


        $data['total_bar'] = DB::table('upsurveys')
            ->select(
                DB::raw('COUNT(application_no) AS allocate'),
                DB::raw('SUM(CASE WHEN survey_done = "Yes" THEN 1 ELSE 0 END) AS survey_done'),
                DB::raw('SUM(CASE WHEN pump_make != "No" AND module_make != "No" AND vfd_make != "No"  THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN pump_make = "No" AND module_make != "No" AND vfd_make != "No" THEN 1 ELSE 0 END) AS not_supplied'),
                DB::raw('SUM(CASE WHEN sys_install_date != "" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN sys_install_date = "" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN sys_inspect_date != ""  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN sys_inspect_date = ""   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN pay_90 = "Yes" THEN 1 ELSE 0 END) AS pay90'),
                DB::raw('SUM(CASE WHEN pay_90 != "Yes" THEN 1 ELSE 0 END) AS notpay90'),
                DB::raw('SUM(CASE WHEN pay_10 = "Yes" THEN 1 ELSE 0 END) AS pay10'),
                DB::raw('SUM(CASE WHEN pay_10 != "Yes" THEN 1 ELSE 0 END) AS notpay10')
            )
            ->first();

        return view('up.pages.kusumdashboard', $data);
    }
    
    
        public function c_dash(Request $request)
    {
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');

        $data['jk_count'] = CKusumDetail::count();
        $data['material_supply'] = CKusumDetail::where('mt_inverter','Yes')->where('mt_structure', 'Yes')->where('mt_modules','Yes')->where('mt_bos', 'Yes')->count();
        $data['material_not_supply'] = CKusumDetail::where('mt_inverter','!=','Yes')->orWhere('mt_structure','!=', 'Yes')->orWhere('mt_modules','!=','Yes')->orWhere('mt_bos','!=', 'Yes')->count();
        $data['surveydone'] = CKusumDetail::where('sd_survey_done','yes')->count();
        $data['total_install'] = CKusumDetail::where('ins_foundation','Yes')->where('ins_structure', 'Yes')->where('ins_module_mounting','Yes')->where('ins_inverter_installation', 'Yes')->count();
        $data['total_not_install'] = CKusumDetail::where('ins_foundation','!=','Yes')->orWhere('ins_structure','!=', 'Yes')->orWhere('ins_module_mounting','!=','Yes')->orWhere('ins_inverter_installation','!=', 'Yes')->count();;
        $data['inspection_done'] =  CKusumDetail::where('inspection_done','!=','No')->count();
        $data['inspection_not_done'] = CKusumDetail::where('inspection_done','No')->count();
        $data['file_submit'] = CKusumDetail::where('file_submission','Yes')->count();
        $data['file_not_submit'] = CKusumDetail::where('file_submission','!=','Yes')->count();
        $data['pay50'] = CKusumDetail::where('payment_50', 'Yes')->count();
        $data['notpay50'] = CKusumDetail::where('payment_50', '!=', 'Yes')->count();
        $data['pay35'] = CKusumDetail::where('payment_35', 'Yes')->count();
        $data['notpay35'] = CKusumDetail::where('payment_35','!=','Yes')->count();
        $data['pay15'] = CKusumDetail::where('payment_15', 'Yes')->count();
        $data['notpay15'] = CKusumDetail::where('payment_15','!=','Yes')->count();
        $data['capacity'] = CKusumDetail::select('pump_capacity', DB::raw('COUNT(pump_capacity) AS pump_count'))->groupBy('pump_capacity')->get();
        $data['pumptype'] = CKusumDetail::select('c_contractor_name', DB::raw('COUNT(c_contractor_name) AS count_type'))->groupBy('c_contractor_name')->get();

        $data['vendorwise'] = DB::table('c_kusum_details')
            ->select(
                'c_contractor_name',
                DB::raw('SUM(CASE WHEN sd_survey_done = "Yes" THEN 1 ELSE 0 END) AS sd_survey_done'),
                DB::raw('SUM(CASE WHEN mt_inverter = "Yes" AND mt_structure = "Yes" AND mt_modules = "Yes" AND mt_bos = "Yes" THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN mt_inverter != "Yes" OR mt_structure != "Yes" OR mt_modules != "Yes" OR mt_bos != "Yes" THEN 1 ELSE 0 END)  AS not_supplied'),
                DB::raw('SUM(CASE WHEN ins_foundation = "Yes" AND ins_structure = "Yes" AND ins_module_mounting = "Yes" AND ins_inverter_installation = "Yes" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN ins_foundation != "Yes" AND ins_structure != "Yes" AND ins_module_mounting != "Yes" AND ins_inverter_installation != "Yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN inspection_done != "No"  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN inspection_done = "No"   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN file_submission = "Yes" THEN 1 ELSE 0 END) AS file_submit'),
                DB::raw('SUM(CASE WHEN file_submission != "Yes" THEN 1 ELSE 0 END) AS file_not_submit'),
                DB::raw('SUM(CASE WHEN payment_50 = "Yes" THEN 1 ELSE 0 END) AS pay50'),
                DB::raw('SUM(CASE WHEN payment_50 != "Yes" THEN 1 ELSE 0 END) AS notpay50'),
                DB::raw('SUM(CASE WHEN payment_35 = "Yes" THEN 1 ELSE 0 END) AS pay35'),
                DB::raw('SUM(CASE WHEN payment_35 != "Yes" THEN 1 ELSE 0 END) AS notpay35'),
                DB::raw('SUM(CASE WHEN payment_15 = "Yes" THEN 1 ELSE 0 END) AS pay15'),
                DB::raw('SUM(CASE WHEN payment_15 != "Yes" THEN 1 ELSE 0 END) AS notpay15')
            )
            ->groupBy('c_contractor_name')
            ->get();
            
            
        $data['districtwise'] = DB::table('c_kusum_details')
            ->select(
                 'f_district',
                DB::raw('SUM(CASE WHEN sd_survey_done = "Yes" THEN 1 ELSE 0 END) AS sd_survey_done'),
                DB::raw('SUM(CASE WHEN mt_inverter = "Yes" AND mt_structure = "Yes" AND mt_modules = "Yes" AND mt_bos = "Yes" THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN mt_inverter != "Yes" AND mt_structure != "Yes" AND mt_modules != "Yes" AND mt_bos != "Yes" THEN 1 ELSE 0 END)  AS not_supplied'),
                DB::raw('SUM(CASE WHEN ins_foundation = "Yes" AND ins_structure = "Yes" AND ins_module_mounting = "Yes" AND ins_inverter_installation = "Yes" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN ins_foundation != "Yes" AND ins_structure != "Yes" AND ins_module_mounting != "Yes" AND ins_inverter_installation != "Yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN inspection_done != "No"  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN inspection_done = "No"   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN payment_50 = "Yes" THEN 1 ELSE 0 END) AS pay50'),
                DB::raw('SUM(CASE WHEN payment_50 != "Yes" THEN 1 ELSE 0 END) AS notpay50'),
                DB::raw('SUM(CASE WHEN file_submission = "Yes" THEN 1 ELSE 0 END) AS file_submit'),
                DB::raw('SUM(CASE WHEN file_submission != "Yes" THEN 1 ELSE 0 END) AS file_not_submit'),
                DB::raw('SUM(CASE WHEN payment_35 = "Yes" THEN 1 ELSE 0 END) AS pay35'),
                DB::raw('SUM(CASE WHEN payment_35 != "Yes" THEN 1 ELSE 0 END) AS notpay35'),
                DB::raw('SUM(CASE WHEN payment_15 = "Yes" THEN 1 ELSE 0 END) AS pay15'),
                DB::raw('SUM(CASE WHEN payment_15 != "Yes" THEN 1 ELSE 0 END) AS notpay15')
            )
            ->groupBy('f_district')
            ->get();

        $data['query'] = DB::table('c_kusum_details')
            ->select(
                DB::raw('SUM(CASE WHEN sd_survey_done = "Yes" THEN 1 ELSE 0 END) AS sd_survey_done'),
                DB::raw('SUM(CASE WHEN mt_inverter = "Yes" AND mt_structure = "Yes" AND mt_modules = "Yes" AND mt_bos = "Yes" THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN mt_inverter != "Yes" AND mt_structure != "Yes" AND mt_modules != "Yes" AND mt_bos != "Yes" THEN 1 ELSE 0 END)  AS not_supplied'),
                DB::raw('SUM(CASE WHEN ins_foundation = "Yes" AND ins_structure = "Yes" AND ins_module_mounting = "Yes" AND ins_inverter_installation = "Yes" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN ins_foundation != "Yes" AND ins_structure != "Yes" AND ins_module_mounting != "Yes" AND ins_inverter_installation != "Yes" THEN 1 ELSE 0 END) AS pending_installed'),
               DB::raw('SUM(CASE WHEN inspection_done != "No"  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN inspection_done = "No"   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN payment_50 = "Yes" THEN 1 ELSE 0 END) AS pay50'),
                DB::raw('SUM(CASE WHEN payment_50 != "Yes" THEN 1 ELSE 0 END) AS notpay50'),
                DB::raw('SUM(CASE WHEN file_submission = "Yes" THEN 1 ELSE 0 END) AS file_submit'),
                DB::raw('SUM(CASE WHEN file_submission != "Yes" THEN 1 ELSE 0 END) AS file_not_submit'),
                DB::raw('SUM(CASE WHEN payment_35 = "Yes" THEN 1 ELSE 0 END) AS pay35'),
                DB::raw('SUM(CASE WHEN payment_35 != "Yes" THEN 1 ELSE 0 END) AS notpay35'),
                DB::raw('SUM(CASE WHEN payment_15 = "Yes" THEN 1 ELSE 0 END) AS pay15'),
                DB::raw('SUM(CASE WHEN payment_15 != "Yes" THEN 1 ELSE 0 END) AS notpay15')
            )
            ->first();


        $data['total_bar'] = DB::table('c_kusum_details')
            ->select(
                DB::raw('SUM(CASE WHEN sd_survey_done = "Yes" THEN 1 ELSE 0 END) AS sd_survey_done'),
                DB::raw('SUM(CASE WHEN mt_inverter = "Yes" AND mt_structure = "Yes" AND mt_modules = "Yes" AND mt_bos = "Yes" THEN 1 ELSE 0 END) AS material_supplied'),
                DB::raw('SUM(CASE WHEN mt_inverter != "Yes" AND mt_structure != "Yes" AND mt_modules != "Yes" AND mt_bos != "Yes" THEN 1 ELSE 0 END)  AS not_supplied'),
                DB::raw('SUM(CASE WHEN ins_foundation = "Yes" AND ins_structure = "Yes" AND ins_module_mounting = "Yes" AND ins_inverter_installation = "Yes" THEN 1 ELSE 0 END) AS total_installed'),
                DB::raw('SUM(CASE WHEN ins_foundation != "Yes" AND ins_structure != "Yes" AND ins_module_mounting != "Yes" AND ins_inverter_installation != "Yes" THEN 1 ELSE 0 END) AS pending_installed'),
                DB::raw('SUM(CASE WHEN inspection_done != "No"  THEN 1 ELSE 0 END) AS inspect_done'),
                DB::raw('SUM(CASE WHEN inspection_done = "No"   THEN 1 ELSE 0 END) AS pending_inspection'),
                DB::raw('SUM(CASE WHEN payment_50 = "Yes" THEN 1 ELSE 0 END) AS pay50'),
                DB::raw('SUM(CASE WHEN payment_50 != "Yes" THEN 1 ELSE 0 END) AS notpay50'),
                DB::raw('SUM(CASE WHEN file_submission = "Yes" THEN 1 ELSE 0 END) AS file_submit'),
                DB::raw('SUM(CASE WHEN file_submission != "Yes" THEN 1 ELSE 0 END) AS file_not_submit'),
                DB::raw('SUM(CASE WHEN payment_35 = "Yes" THEN 1 ELSE 0 END) AS pay35'),
                DB::raw('SUM(CASE WHEN payment_35 != "Yes" THEN 1 ELSE 0 END) AS notpay35'),
                DB::raw('SUM(CASE WHEN payment_15 = "Yes" THEN 1 ELSE 0 END) AS pay15'),
                DB::raw('SUM(CASE WHEN payment_15 != "Yes" THEN 1 ELSE 0 END) AS notpay15')
            )
            ->first();
        return view('up.pages.kusumcdashboard', $data);
    }
    
    
        public function view_kusumc(Request $request, $status = null)
    {
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');        
         $state = $request->session()->get('state');

        if ($status == 'material-supplied') {
            $data['Ckusums'] = CKusumDetail::where('mt_inverter','Yes')->where('mt_structure', 'Yes')->where('mt_modules','Yes')->where('mt_bos', 'Yes')->get();
        } elseif ($status == 'material-not-supplied') {
           $data['Ckusums'] = CKusumDetail::where(function ($query) {
           $query->where('mt_inverter','!=','Yes')->orWhere('mt_structure','!=', 'Yes')->orWhere('mt_modules','!=','Yes')->orWhere('mt_bos','!=', 'Yes');
           })->get();
        } elseif ($status == 'survey-done') {
            $data['Ckusums'] = CKusumDetail::where('sd_survey_done','yes')->get();
        } elseif ($status == 'not-install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','!=','Yes')->orWhere('ins_structure','!=', 'Yes')->orWhere('ins_module_mounting','!=','Yes')->orWhere('ins_inverter_installation','!=', 'Yes')->get();
        } elseif ($status == 'install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','Yes')->where('ins_structure', 'Yes')->where('ins_module_mounting','Yes')->where('ins_inverter_installation', 'Yes')->get();
        } elseif ($status == 'inspection-done') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','!=','No')->get();
        } elseif ($status == 'inspection-pending') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','No')->get();
        } elseif ($status == 'file-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','Yes')->get();
        } elseif ($status == 'file-not-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','!=', 'Yes')->get();
        } elseif ($status == 'pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', 'Yes')->get();
        } elseif ($status == 'not-pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', '!=', 'Yes')->get();
        } elseif ($status == 'pay35') {
            $data['Ckusums'] = CKusumDetail::where('payment_35', 'Yes')->get();
        } elseif ($status == 'not-pay35') {
            $data['Ckusums'] = CKusumDetail::where('payment_35','!=','Yes')->get();
        } elseif ($status == 'pay15') {
            $data['Ckusums'] = CKusumDetail::where('payment_15', 'Yes')->get();
        } elseif ($status == 'not-pay15') {
            $data['Ckusums'] = CKusumDetail::where('payment_15','!=','Yes')->get();
        } else {
            $data['Ckusums'] = CKusumDetail::all();
        }
        return view('up.CKusum.view-CKusum', $data);
    }
    
        
      public function district_kusumc_data(Request $request, $status, $district)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
           $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');

        if ($status == 'material-supplied') {
            $data['Ckusums'] = CKusumDetail::where('mt_inverter','Yes')->where('mt_structure', 'Yes')->where('mt_modules','Yes')->where('mt_bos', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'material-not-supplied') {
           $data['Ckusums'] = CKusumDetail::where(function ($query) {
           $query->where('mt_inverter','!=','Yes')->orWhere('mt_structure','!=', 'Yes')->orWhere('mt_modules','!=','Yes')->orWhere('mt_bos','!=', 'Yes');
           })->where('f_district', $district)->get();
        } elseif ($status == 'survey-done') {
            $data['Ckusums'] = CKusumDetail::where('sd_survey_done','yes')->where('f_district', $district)->get();
        } elseif ($status == 'not-install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','!=','Yes')->orWhere('ins_structure','!=', 'Yes')->orWhere('ins_module_mounting','!=','Yes')->orWhere('ins_inverter_installation','!=', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','Yes')->where('ins_structure', 'Yes')->where('ins_module_mounting','Yes')->where('ins_inverter_installation', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'inspection-done') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','!=','No')->where('f_district', $district)->get();
        } elseif ($status == 'inspection-pending') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','No')->where('f_district', $district)->get();
        } elseif ($status == 'file-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','Yes')->where('f_district', $district)->get();
        } elseif ($status == 'file-not-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','!=', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'not-pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', '!=', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'pay35') {
            $data['Ckusums'] = CKusumDetail::where('payment_35', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'not-pay35') {
            $data['Ckusums'] = KusumDetail::where('payment_35','!=','Yes')->where('f_district', $district)->get();
        } elseif ($status == 'pay15') {
            $data['Ckusums'] = CKusumDetail::where('payment_15', 'Yes')->where('f_district', $district)->get();
        } elseif ($status == 'not-pay15') {
            $data['Ckusums'] = KusumDetail::where('payment_15','!=','Yes')->where('f_district', $district)->get();
        } else {
            $data['Ckusums'] = Upsurvey::all();
        }
        return view('up.CKusum.view-CKusum', $data);
    }
    
        public function vendor_kusumc_data(Request $request, $status = 'null', $vendor = 'null')
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
           $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');
        
          if ($status == 'material-supplied') {
            $data['Ckusums'] = CKusumDetail::where('mt_inverter','Yes')->where('mt_structure', 'Yes')->where('mt_modules','Yes')->where('mt_bos', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'material-not-supplied') {
           $data['Ckusums'] = CKusumDetail::where(function ($query) {
           $query->where('mt_inverter','!=','Yes')->orWhere('mt_structure','!=', 'Yes')->orWhere('mt_modules','!=','Yes')->orWhere('mt_bos','!=', 'Yes');
           })->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'survey-done') {
            $data['Ckusums'] = CKusumDetail::where('sd_survey_done','yes')->where('c_contractor_name', $vendor)->get();
         dd($data);
        } elseif ($status == 'not-install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','!=','Yes')->orWhere('ins_structure','!=', 'Yes')->orWhere('ins_module_mounting','!=','Yes')->orWhere('ins_inverter_installation','!=', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'install') {
            $data['Ckusums'] = CKusumDetail::where('ins_foundation','Yes')->where('ins_structure', 'Yes')->where('ins_module_mounting','Yes')->where('ins_inverter_installation', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'inspection-done') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','!=','No')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'inspection-pending') {
            $data['Ckusums'] = CKusumDetail::where('inspection_done','No')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'file-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'file-not-submit') {
            $data['Ckusums'] = CKusumDetail::where('file_submission','!=', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'not-pay50') {
            $data['Ckusums'] =  CKusumDetail::where('payment_50', '!=', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'pay35') {
            $data['Ckusums'] = CKusumDetail::where('payment_35', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'not-pay35') {
            $data['Ckusums'] = KusumDetail::where('payment_35','!=','Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'pay15') {
            $data['Ckusums'] = CKusumDetail::where('payment_15', 'Yes')->where('c_contractor_name', $vendor)->get();
        } elseif ($status == 'not-pay15') {
            $data['Ckusums'] = KusumDetail::where('payment_15','!=','Yes')->where('c_contractor_name', $vendor)->get();
        } else {
            $data['Ckusums'] = Upsurvey::all();
        }
         return view('up.CKusum.view-CKusum', $data);
    }


    public function view_up(Request $request, $status = null)
    {
        $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');
        

        if ($status == 'material-supplied') {
            $data['ups'] = Upsurvey::where('pump_make','!=','No')->where('module_make','!=','No')->where('vfd_make','!=','No')->get();
        } elseif ($status == 'material-not-supplied') {
           $data['ups'] = Upsurvey::where('pump_make','No')->where('module_make','No')->where('vfd_make','No')->get();
        } elseif ($status == 'survey-done') {
            $data['ups'] = Upsurvey::where('survey_done', 'yes')->get();
        } elseif ($status == 'not-install') {
            $data['ups'] = Upsurvey::where('sys_install_date', '')->get();
        } elseif ($status == 'install') {
            $data['ups'] = Upsurvey::where('sys_install_date','!=', '')->get();
        } elseif ($status == 'inspection-done') {
            $data['ups'] =  Upsurvey::where('sys_inspect_date','!=', '')->get();
        } elseif ($status == 'inspection-pending') {
            $data['ups'] = Upsurvey::where('sys_inspect_date', '')->get();
        } elseif ($status == 'file-submit') {
            $data['ups'] = Upsurvey::where('file_submit', 'yes')->get();
        } elseif ($status == 'file-not-submit') {
            $data['ups'] = Upsurvey::where('file_submit', '!=', 'yes')->get();
        } elseif ($status == 'pay90') {
            $data['ups'] = Upsurvey::where('pay_90', 'Yes')->get();
        } elseif ($status == 'not-pay90') {
            $data['ups'] = Upsurvey::where('pay_90','!=','Yes')->get();
        } elseif ($status == 'pay10') {
            $data['ups'] = Upsurvey::where('pay_10', 'Yes')->get();
        } elseif ($status == 'not-pay10') {
            $data['ups'] = Upsurvey::where('pay_10', '!=', 'Yes')->get();
        } else {
            $data['ups'] = Upsurvey::all();
        }
        return view('up.kusumb.view-sitesurvey', $data);
    }



    public function phase_kusumb_data(Request $request, $status, $phase)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
           $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        if ($status == 'material-supplied') {
            $data['ups'] = Upsurvey::where('pump_make','!=','No')->where('module_make','!=','No')->where('vfd_make','!=','No')->where('monitering', $phase)->get();
        } elseif ($status == 'material-not-supplied') {
            $data['ups'] =   Upsurvey::where('pump_make','No')->where('module_make','No')->where('vfd_make','No')
                ->where('monitering', $phase)
                ->get();
        } elseif ($status == 'not-install') {
            $data['ups'] = Upsurvey::where('sys_install_date', '')->where('monitering', $phase)->get();
        } elseif ($status == 'install') {
            $data['ups'] = Upsurvey::where('sys_install_date','!=', '')->where('monitering', $phase)->get();
        } elseif ($status == 'inspection-done') {
            $data['ups'] =  Upsurvey::where('sys_inspect_date','!=', '')->where('monitering', $phase)->get();
        } elseif ($status == 'inspection-pending') {
            $data['ups'] = Upsurvey::where('sys_inspect_date', '')->where('monitering', $phase)->get();
        } elseif ($status == 'file-submit') {
            $data['ups'] = Upsurvey::where('file_submit', 'yes')->where('monitering', $phase)->get();
        } elseif ($status == 'file-not-submit') {
            $data['ups'] = Upsurvey::where('file_submit', '!=', 'yes')->where('monitering', $phase)->get();
        } elseif ($status == 'pay90') {
            $data['ups'] = Upsurvey::where('pay_90', 'Yes')->where('monitering', $phase)->get();
        } elseif ($status == 'not-pay90') {
            $data['ups'] = Upsurvey::where('pay_90','!=','Yes')->where('monitering', $phase)->get();
        } elseif ($status == 'pay10') {
            $data['ups'] = Upsurvey::where('pay_10', 'Yes')->where('monitering', $phase)->get();
        } elseif ($status == 'not-pay10') {
            $data['ups'] = Upsurvey::where('pay_10', '!=', 'Yes')->where('monitering', $phase)->get();
        } 
        elseif($status == 'phase'){
          $data['ups'] = Upsurvey::where('monitering', $phase)->get();
        }
        
        else {
            $data['ups'] = Upsurvey::where('monitering', $phase)->get();
        }
            return view('up.kusumb.view-sitesurvey', $data);
    }



    public function district_kusumb_data(Request $request, $status, $district)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
           $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');
        $role = $request->session()->get('role');
        if ($status == 'material-supplied') {
             $data['ups'] = Upsurvey::where('pump_make','!=','No')->where('module_make','!=','No')->where('vfd_make','!=','No')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'material-not-supplied') {
             $data['ups'] =   Upsurvey::where('pump_make','No')->where('module_make','No')->where('vfd_make','No')
                ->where('installation_dsitrict', $district)
                ->get();
        } elseif ($status == 'not-install') {
            $data['ups'] = Upsurvey::where('sys_install_date', '')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'install') {
            $data['ups'] = Upsurvey::where('sys_install_date','!=', '')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'inspection-done') {
            $data['ups'] =  Upsurvey::where('sys_inspect_date','!=', '')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'inspection-pending') {
            $data['ups'] = Upsurvey::where('sys_inspect_date', '')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'file-submit') {
            $data['ups'] = Upsurvey::where('file_submit', 'yes')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'file-not-submit') {
            $data['ups'] = Upsurvey::where('file_submit', '!=', 'yes')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'pay90') {
            $data['ups'] = Upsurvey::where('pay_90', 'Yes')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'not-pay90') {
            $data['ups'] = Upsurvey::where('pay_90','!=','Yes')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'pay10') {
            $data['ups'] = Upsurvey::where('pay_10', 'Yes')->where('installation_dsitrict', $district)->get();
        } elseif ($status == 'not-pay10') {
            $data['ups'] = Upsurvey::where('pay_10', '!=', 'Yes')->where('installation_dsitrict', $district)->get();
        } 
        elseif($status == 'district'){
          $data['ups'] = Upsurvey::where('installation_dsitrict', $district)->get();
        }
        else {
            $data['ups'] = Upsurvey::where('installation_dsitrict', $district)->get();
        }
           return view('up.kusumb.view-sitesurvey', $data);
    }


    public function vendor_kusumb_data(Request $request, $status = 'null', $vendor = 'null')
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
           $data['state'] = $request->session()->get('state');         
         $state = $request->session()->get('state');
        $role = $request->session()->get('role');
        if ($status == 'material-supplied') {
            $data['ups'] = Upsurvey::where('pump_make','!=','No')->where('module_make','!=','No')->where('vfd_make','!=','No')->where('vendor', $vendor)->get();
        } elseif ($status == 'material-not-supplied') {
            $data['ups'] =   Upsurvey::where('pump_make','No')->where('module_make','No')->where('vfd_make','No')
                ->where('vendor', $vendor)
                ->get();
        } elseif ($status == 'not-install') {
           $data['ups'] = Upsurvey::where('sys_install_date', '')->where('vendor', $vendor)->get();
        } elseif ($status == 'install') {
            $data['ups'] = Upsurvey::where('sys_install_date','!=', '')->where('vendor', $vendor)->get();
        } elseif ($status == 'inspection-done') {
            $data['ups'] =  Upsurvey::where('sys_inspect_date','!=', '')->where('vendor', $vendor)->get();
        } elseif ($status == 'inspection-pending') {
            $data['ups'] = Upsurvey::where('sys_inspect_date', '')->where('vendor', $vendor)->get();
        } elseif ($status == 'file-submit') {
            $data['ups'] = Upsurvey::where('file_submit', 'yes')->where('vendor', $vendor)->get();
        } elseif ($status == 'file-not-submit') {
            $data['ups'] = Upsurvey::where('file_submit', '!=', 'yes')->where('vendor', $vendor)->get();
        } elseif ($status == 'pay90') {
            $data['ups'] = Upsurvey::where('pay_90', 'Yes')->where('vendor', $vendor)->get();
        } elseif ($status == 'not-pay90') {
            $data['ups'] = Upsurvey::where('pay_90','!=' ,'Yes')->where('vendor', $vendor)->get();
        } elseif ($status == 'pay10') {
            $data['ups'] = Upsurvey::where('pay_10','Yes')->where('vendor', $vendor)->get();
        } elseif ($status == 'not-pay10') {
            $data['ups'] = Upsurvey::where('pay_10', '!=', 'Yes')->where('vendor', $vendor)->get();
        }
        elseif($status == 'vendor'){
         $data['ups'] = Upsurvey::where('vendor', $vendor)->get();
        }
        else {
            $data['ups'] = Upsurvey::all();
        }
        return view('up.kusumb.view-sitesurvey', $data);
    }
}
