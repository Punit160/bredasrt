<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SwpSurvey;
use App\Imports\ImportSwpSurvey;
use Excel;
use Session;



class SwpSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $data['role'] = $request->session()->get('role');
       $data['state'] = $request->session()->get('state');
        return view('jammu.site.add-sitesurvey', $data);
    }
    public function dashboard(Request $request)
    {
       $data['role'] = $request->session()->get('role');
       $data['state'] = $request->session()->get('state');
        return view('pages.dashboard', $date);
    }

    public function view_site(Request $request)
    {
         $data['site'] = DB::table('swp_surveys')->get();
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        return view('jammu.site.view-sitesurvey',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create(Request $request)
    {
        $site = new SwpSurvey();
        $site->saral_id = $request->saral_id;
        $site->application_no = $request->application_no;
        $site->empanelled_agency = $request->empanelled_agency;
        $site->beneficiary = $request->beneficiary;
        $site->gender = $request->gender;
        $site->category = $request->category;
        $site->caste = $request->caste;
        $site->mobile = $request->mobile;
        $site->aadhar_status = $request->aadhar_status;
        $site->installation_village = $request->installation_village;
        $site->installation_dsitrict = $request->installation_dsitrict;
        $site->latitude = $request->latitude;
        $site->longitude = $request->longitude;
        $site->required_pump = $request->required_pump;
        $site->pump_sub_type = $request->pump_sub_type;
        $site->pump_capacity = $request->pump_capacity;
        $site->spv_capacity = $request->spv_capacity;
        $site->pump_make = $request->pump_make;
        $site->module_make = $request->module_make;
        $site->vfd_make = $request->vfd_make;
        $site->rms_condtn = $request->rms_condtn;
        $site->sys_install_date = $request->sys_install_date;
        $site->sys_inspect_date = $request->sys_inspect_date;
        $site->sys_inspectby = $request->sys_inspectby;
        $site->cfa = $request->cfa;
        $site->sfa = $request->sfa;
        $site->beneficiary_share = $request->beneficiary_share;
        $site->total_pump_cost = $request->total_pump_cost;
        $site->sanction = $request->sanction;
        $site->app_current_status = $request->app_current_status;
        $site->survey_by = $request->survey_by;
        $site->father_name = $request->father_name;
        $site->land_coverage = $request->land_coverage;
        $site->irrigationmode = $request->irrigationmode;
        $site->water_source = $request->water_source;
        $site->water_depth = $request->water_depth;
        $site->location = $request->location;
        $site->survey_date = $request->survey_date;
        $site->imei = $request->imei;
        $site->pump_no = $request->pump_no;
        $site->pump_controller_no = $request->pump_controller_no;
        $site->solar_panel_no = $request->solar_panel_no;
        $site->southfacing = $request->southfacing;
        $site->site_suitable = $request->site_suitable;
        $site->head_pump = $request->head_pump;
        $site->survey_latitude = $request->survey_latitude;
        $site->survey_longitude = $request->survey_longitude;
        $site->survey_done = $request->survey_done;
        $site->is_feasible_app = $request->is_feasible_app;
        $site->feasible_date = $request->feasible_date;
        $site->member_id = $request->member_id;
        $site->family_id = $request->family_id;
        $site->controller_type = $request->controller_type;
        $site->old_app = $request->old_app;
        $site->boring_dym = $request->boring_dym;
        $site->save();
        return redirect(route('view-jammu-survey'))->with('status', 'Site  Survey Added Successfully');
    }

    public function edit(Request $request, $id)
    {
        $data['site'] = SwpSurvey::find($id);
        $data['state'] = $request->session()->get('state'); 
        return view('jammu.site.update-sitesurvey', $data);
    }


    public function update(Request $request)
    {
        
        $id=$request->sid;
        $site = SwpSurvey::find($id);
        $site->saral_id = $request->saral_id;
        $site->application_no = $request->application_no;
        $site->empanelled_agency = $request->empanelled_agency;
        $site->beneficiary = $request->beneficiary;
        $site->gender = $request->gender;
        $site->category = $request->category;
        $site->caste = $request->caste;
        $site->mobile = $request->mobile;
        $site->location = $request->location;
        $site->survey_date = $request->survey_date;
        $site->aadhar_status = $request->aadhar_status;
        $site->installation_village = $request->installation_village;
        $site->installation_dsitrict = $request->installation_dsitrict;
        $site->latitude = $request->latitude;
        $site->longitude = $request->longitude;
        $site->required_pump = $request->required_pump;
        $site->pump_sub_type = $request->pump_sub_type;
        $site->pump_capacity = $request->pump_capacity;
        $site->spv_capacity = $request->spv_capacity;
        $site->pump_make = $request->pump_make;
        $site->module_make = $request->module_make;
        $site->vfd_make = $request->vfd_make;
        $site->rms_condtn = $request->rms_condtn;
        $site->sys_install_date = $request->sys_install_date;
        $site->sys_inspect_date = $request->sys_inspect_date;
        $site->sys_inspectby = $request->sys_inspectby;
        $site->cfa = $request->cfa;
        $site->sfa = $request->sfa;
        $site->beneficiary_share = $request->beneficiary_share;
        $site->total_pump_cost = $request->total_pump_cost;
        $site->sanction = $request->sanction;
        $site->app_current_status = $request->app_current_status;
        $site->survey_by = $request->survey_by;
        $site->father_name = $request->father_name;
        $site->land_coverage = $request->land_coverage;
        $site->irrigationmode = $request->irrigationmode;
        $site->water_source = $request->water_source;
        $site->water_depth = $request->water_depth;
        $site->imei = $request->imei;
        $site->pump_no = $request->pump_no;
        $site->pump_controller_no = $request->pump_controller_no;
        $site->solar_panel_no = $request->solar_panel_no;
        $site->southfacing = $request->southfacing;
        $site->site_suitable = $request->site_suitable;
        $site->head_pump = $request->head_pump;
        $site->survey_latitude = $request->survey_latitude;
        $site->survey_longitude = $request->survey_longitude;
        $site->survey_done = $request->survey_done;
        $site->is_feasible_app = $request->is_feasible_app;
        $site->feasible_date = $request->feasible_date;
        $site->member_id = $request->member_id;
        $site->family_id = $request->family_id;
        $site->controller_type = $request->controller_type;
        $site->old_app = $request->old_app;
        $site->boring_dym = $request->boring_dym;
        $site->save();
        return back()->with('status', 'Site  Survey Updated Successfully');
    }

    public function destroy($id)
    {
        $site = SwpSurvey::find($id);
        $site->delete();
        return redirect(route("view-jammu-survey"))->with('status', 'Site  Survey  Data Deleted Successfully!!');
    }
    public function siteImport(Request $request)
    {
        set_time_limit(0);
        $filePath = $request->file('siteexcel');
        $import = new ImportSwpSurvey();
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
   


}

