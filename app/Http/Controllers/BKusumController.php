<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upsurvey;
use Illuminate\Support\Facades\DB;

class BKusumController extends Controller
{
   
    public function view_kusum_b(Request $request)
    {
         $data['ups'] = DB::table('upsurveys')->get();
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        return view('up.kusumb.view-sitesurvey',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    //  public function create(Request $request)
    // {
    //     $validatedData = $request->validate([
        
    //         'saral_id' => 'required|saral_id|unique:site_surveys,saral_id',
    //         'mobile' => 'required|digits:10|unique:site_surveys,mobile',
        
    //     ], [
    //         'saral_id.unique' => 'The saral_id has already been taken.',
    //         'mobile.unique' => 'The mobile number has already been taken.',
    //     ]);
    //     $site = new SiteSurvey();
    //     $site->saral_id = $request->saral_id;
    //     $site->application_no = $request->application_no;
    //     $site->empanelled_agency = $request->empanelled_agency;
    //     $site->beneficiary = $request->beneficiary;
    //     $site->gender = $request->gender;
    //     $site->category = $request->category;
    //     $site->caste = $request->caste;
    //     $site->mobile = $request->mobile;
    //     $site->aadhar_status = $request->aadhar_status;
    //     $site->installation_village = $request->installation_village;
    //     $site->installation_dsitrict = $request->installation_dsitrict;
    //     $site->latitude = $request->latitude;
    //     $site->longitude = $request->longitude;
    //     $site->required_pump = $request->required_pump;
    //     $site->pump_sub_type = $request->pump_sub_type;
    //     $site->pump_capacity = $request->pump_capacity;
    //     $site->spv_capacity = $request->spv_capacity;
    //     $site->pump_make = $request->pump_make;
    //     $site->module_make = $request->module_make;
    //     $site->vfd_make = $request->vfd_make;
    //     $site->rms_condtn = $request->rms_condtn;
    //     $site->sys_install_date = $request->sys_install_date;
    //     $site->sys_inspect_date = $request->sys_inspect_date;
    //     $site->sys_inspectby = $request->sys_inspectby;
    //     $site->cfa = $request->cfa;
    //     $site->sfa = $request->sfa;
    //     $site->beneficiary_share = $request->beneficiary_share;
    //     $site->total_pump_cost = $request->total_pump_cost;
    //     $site->sanction = $request->sanction;
    //     $site->app_current_status = $request->app_current_status;
    //     $site->survey_by = $request->survey_by;
    //     $site->father_name = $request->father_name;
    //     $site->land_coverage = $request->land_coverage;
    //     $site->irrigationmode = $request->irrigationmode;
    //     $site->water_source = $request->water_source;
    //     $site->water_depth = $request->water_depth;
    //     $site->location = $request->location;
    //     $site->survey_date = $request->survey_date;
    //     $site->imei = $request->imei;
    //     $site->pump_no = $request->pump_no;
    //     $site->pump_controller_no = $request->pump_controller_no;
    //     $site->solar_panel_no = $request->solar_panel_no;
    //     $site->southfacing = $request->southfacing;
    //     $site->site_suitable = $request->site_suitable;
    //     $site->head_pump = $request->head_pump;
    //     $site->survey_latitude = $request->survey_latitude;
    //     $site->survey_longitude = $request->survey_longitude;
    //     $site->survey_done = $request->survey_done;
    //     $site->is_feasible_app = $request->is_feasible_app;
    //     $site->feasible_date = $request->feasible_date;
    //     $site->member_id = $request->member_id;
    //     $site->family_id = $request->family_id;
    //     $site->controller_type = $request->controller_type;
    //     $site->old_app = $request->old_app;
    //     $site->boring_dym = $request->boring_dym;
    //     $site->created_by = $request->created_by;
    //     if ($request->hasfile('img1')) {

    //         $file = $request->file('img1');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img1-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img1 = $filename;
          
    //     }
    //     if ($request->hasfile('img2')) {
    //         $file = $request->file('img2');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img2-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img2 = $filename;
          
    //     }
    //     if ($request->hasfile('img3')) {
    //         $file = $request->file('img3');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img3-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img3 = $filename;
          
    //     }  if ($request->hasfile('img4')) {
    //         $file = $request->file('img4');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img4-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img4 = $filename;
          
    //     }  if ($request->hasfile('img5')) {
    //         $file = $request->file('img5');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img5-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img5 = $filename;
          
    //     }  if ($request->hasfile('img6')) {
    //         $file = $request->file('img6');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img6-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img6 = $filename;
          
    //     }  if ($request->hasfile('img7')) {
    //         $file = $request->file('img7');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img7-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img7= $filename;
          
    //     }  if ($request->hasfile('img8')) {
    //         $file = $request->file('img8');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = 'img8-'.time() . '.' . $extension;
    //         $file->move('uploads_imges/', $filename);
    //         $site->img8 = $filename;
          
    //     }
    //     $site->save();
    //     return redirect(route('view-site-survey'))->with('status', 'Site  Survey Added Successfully');
    // }

    public function edit(Request $request, $id)
    {
        $data['site'] = Upsurvey::find($id);
        $data['state'] = $request->session()->get('state');
        return view('up.kusumb.update-BKusum', $data);
    }


    public function update_Kusum_b(Request $request)
    {
        
        $id=$request->sid;
        $site = Upsurvey::find($id);
        $site->saral_id = $request->saral_id;
        $site->application_no = $request->application_no;
        $site->empanelled_agency = $request->empanelled_agency;
        $site->beneficiary = $request->beneficiary;
        $site->gender = $request->gender;
        $site->category = $request->category;
        $site->caste = $request->caste;
        $site->mobile = $request->mobile;
        $site->aadhar_status = $request->aadhar_status;
        $site->location = $request->location;
        $site->installation_village = $request->installation_village;
        $site->installation_dsitrict = $request->installation_dsitrict;
        $site->file_submit = $request->file_submit;
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
        $site->survey_date = $request->survey_date;
        $site->is_feasible_app = $request->is_feasible_app;
        $site->feasible_date = $request->feasible_date;
        $site->member_id = $request->member_id;
        $site->vendor = $request->vendor;
        $site->pay_90 = $request->pay_90;
        $site->pay_10 = $request->pay_10;
        $site->boring_dym = $request->boring_dym;
              
        if ($request->hasfile('img1')) {

            $file = $request->file('img1');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img1-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img1 = $filename;
          
        }
        if ($request->hasfile('img2')) {
            $file = $request->file('img2');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img2-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img2 = $filename;
          
        }
        if ($request->hasfile('img3')) {
            $file = $request->file('img3');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img3-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img3 = $filename;
          
        }  if ($request->hasfile('img4')) {
            $file = $request->file('img4');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img4-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img4 = $filename;
          
        }  if ($request->hasfile('img5')) {
            $file = $request->file('img5');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img5-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img5 = $filename;
          
        }  if ($request->hasfile('img6')) {
            $file = $request->file('img6');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img6-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img6 = $filename;
          
        }  if ($request->hasfile('img7')) {
            $file = $request->file('img7');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img7-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img7= $filename;
          
        }  if ($request->hasfile('img8')) {
            $file = $request->file('img8');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img8-'.time() . '.' . $extension;
            $file->move('uploads_imges/', $filename);
            $site->img8 = $filename;
          
        }
        $site->save();
        return back()->with('status', 'Site  Survey Updated Successfully');
    }

   


}
