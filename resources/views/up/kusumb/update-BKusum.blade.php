@include('component.head')
@include('component.upksb-header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper formBack">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default ">
                <div class="card-header newHead">
                    <h3 class="card-title text-bold">Update Survey Kusum-B </h3>
                </div>
                @if(session()->has('status'))
        <div class="alert my-3 p-3 alert-success">
          {{session('status')}}
        </div>
        @endif
                <form action="{{route('update-kusum-B')}}" method="post"   enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
                            fields.</h6>
                        <div class="row">

                            <div class="col-lg-4 col-md-6   col-md-12 form-group">
                                <label for="">Saral ID</label>
                                <input type="hidden" name="sid" id="sid" class="form-control" list="pia" value="{{$site->id}}">

                                <input type="text" min="1" name="saral_id" id="saral_id" class="form-control" value="{{$site->saral_id}}">

                            </div>

                                                       <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="application_no">Application No</label>
                                <input type="text" name="application_no" id="Empanelled Agency" class="form-control" list="application_no" value="{{$site->application_no}}">
                                <datalist id="Application No">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Empanelled Agency">Empanelled Agency</label>
                                <input type="text" name="empanelled_agency" id="Empanelled Agency" class="form-control" list="Empanelled Agency" value="{{$site->empanelled_agency}}">
                                <datalist id="Empanelled Agency">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Name of Beneficiary ">Name of Beneficiary</label>
                                <input type="text" name="beneficiary" id="Name of Beneficiary " class="form-control" list="Name of Beneficiary " value="{{$site->beneficiary}}">
                                <datalist id="Name of Beneficiary ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Gender">Gender</label>
                                <select class="form-control" name="gender">
                                <option value=""> Select</option>
                                <option value="" <?php echo ($site->gender == '') ? 'selected' : ''; ?>>Select</option>
                                    <option value="Male" <?php echo ($site->gender == 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php echo ($site->gender == 'Female') ? 'selected' : ''; ?>>Female</option>
                                    <option value="Other" <?php echo ($site->gender == 'Other') ? 'selected' : ''; ?>>Other</option>
                                </select>
                                <datalist id="Gender">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Gender">Category</label>
                                <input type="text" name="category" id="Category" class="form-control" list="Category" value="{{$site->category}}">
                                <datalist id="Category">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Caste">Caste</label>
                                <input type="text" name="caste" id=" Caste" class="form-control" list=" Caste" value="{{$site->caste}}">
                                <datalist id=" Caste">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Mobile">Mobile Number</label>
                                <input type="number " min="1" name="mobile" id="Mobile Number" class="form-control" list="Mobile Number" value="{{$site->mobile}}">
                                <datalist id="Mobile Number">
                                    <option value=""></option>
                                </datalist>
                            </div>


                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Aadhar">Aadhar Authentication Status</label>
                                <select class="form-control" name="aadhar_status">
                                    <option value="Verechoied" <?php echo ($site->aadhar_status == 'Verechoied') ? 'selected' : ''; ?>>Verechoied</option>
                                    <option value="Not-Verechoied" <?php echo ($site->aadhar_status == 'Not-Verechoied') ? 'selected' : ''; ?>>Not-Verechoied</option>
                                </select>


                            </div>

                            <!-- <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{$site->location}}">
                            </div> -->
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Village">location</label>
                                <input type="text" name="location"  class="form-control" list="location" value="{{$site->location}}">
                                <datalist id="location">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Village">Village Of installation</label>
                                <input type="text" name="installation_village" id="Village of installation" class="form-control" list="Village of installation" value="{{$site->installation_village}}">
                                <datalist id="Village of installation">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" District">District Of installation</label>
                                <input type="text" name="installation_dsitrict" id="District of installation" class="form-control" list="District of installation" value="{{$site->installation_dsitrict}}">
                                <datalist id="District of installation">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Initial Latitude">File Submit</label>
                                <input type="text" min="1" name="file_submit"  class="form-control" list="file_submit" value="{{$site->file_submit}}">
                                <datalist id="file_submit">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Initial Longitude">Initial Longitude</label>
                                <input type="text" min="1" name="longitude" id="Initial Longitude" class="form-control" list="Initial Longitude" value="{{$site->longitude}}">
                                <datalist id="Initial Longitude">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Required Pump">Required Pump</label>
                                <input type="text" name="required_pump" id="Required Pump" class="form-control" list="Required Pump" value="{{$site->required_pump}}">
                                <datalist id="Required Pump">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Sub Type">Pump Sub Type</label>
                                <input type="text" name="pump_sub_type" id="Pump Sub Type" class="form-control" list="Pump Sub Type" value="{{$site->pump_sub_type}}">
                                <datalist id="Pump Sub Type">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Sub Type">Pump Capacity (HP)</label>
                                <input type="text" name="pump_capacity" id="Pump Capacity (HP)" class="form-control" list="Pump Capacity (HP)" value="{{$site->pump_capacity}}">
                                <datalist id="Pump Capacity (HP)">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SPV Modules Capacity in kWp">SPV Modules Capacity in kWp</label>
                                <input type="text" name="spv_capacity" id="SPV Modules Capacity in kWp" class="form-control" list="SPV Modules Capacity in kWp" value="{{$site->spv_capacity}}">
                                <datalist id="SPV Modules Capacity in kWp">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Make">Pump Make</label>
                                <input type="text" name="pump_make" id="Pump Make" class="form-control" list="Pump Make" value="{{$site->pump_make}}">
                                <datalist id="Pump Make">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Make">Module Make</label>
                                <input type="text" name="module_make" id="module Make" class="form-control" list="Pump Make" value="{{$site->module_make}}">
                                <datalist id="modulemake">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="VFD/ Control Make">VFD/ Control Make</label>
                                <input type="text" name="vfd_make" id="VFD/ Control Make" class="form-control" list="VFD/ Control Make" value="{{$site->vfd_make}}">
                                <datalist id="VFD/ Control Make">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="RMS Working Condition">RMS Working Condition</label>
                                <select id="RMS Working Condition" class="form-control" name="rms_condtn" value="{{$site->id}}">
                                    <option value="Yes" <?php echo ($site->rms_condtn == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?php echo ($site->rms_condtn == 'No') ? 'selected' : ''; ?>>No</option>

                                </select>
                                <datalist id="System Installed Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Installed Date">System Installed Date</label>
                                <input type="text" name="sys_install_date" id="System Installed Date" class="form-control" list="System Installed Date" value="{{$site->sys_install_date}}">
                                <datalist id="System Installed Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Inspected Date">System Inspected Date</label>
                                <input type="text" name="sys_inspect_date" id="System Inspected Date" class="form-control" list="System Inspected Date" value="{{$site->sys_inspect_date}}">
                                <datalist id="System Inspected Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Inspected BY">System Inspected BY</label>
                                <input type="text" name="sys_inspectby" id="System Inspected BY" class="form-control" list="System Inspected BY" value="{{$site->sys_inspectby}}">
                                <datalist id="System Inspected BY">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="CFA in Rs.">CFA in Rs.</label>
                                <input type="number" min="1" name="cfa" id="CFA in Rs." class="form-control" list="CFA in Rs." value="{{$site->cfa}}">
                                <datalist id="CFA in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SFA in Rs.">SFA in Rs.</label>
                                <input type="number" min="1" name="sfa" id="SFA in Rs." class="form-control" list="SFA in Rs." value="{{$site->sfa}}">
                                <datalist id="SFA in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Beneficiary Share in Rs.">Beneficiary Share in Rs.</label>
                                <input type="number" min="1" name="beneficiary_share" id=" Beneficiary Share in Rs." class="form-control" list=" Beneficiary Share in Rs." value="{{$site->beneficiary_share}}">
                                <datalist id=" Beneficiary Share in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Total Pump Cost">Total Pump Cost</label>
                                <input type="number" min="1" name="total_pump_cost" id="Total Pump Cost" class="form-control" value="{{$site->total_pump_cost}}">
                                <datalist id="Total Pump Cost">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Sanction"> Sanction </label>
                                <input type="text" name="sanction" id=" Sanction" class="form-control" list=" Sanction" value="{{$site->sanction}}">
                                <datalist id=" Sanction" readonly>
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Application current Status">Application current Status</label>
                                <input type="text" name="app_current_status" id="Application current Status" class="form-control" list="Application current Status" value="{{$site->app_current_status}}">
                                <datalist id="Application current Status">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Survey Done By">Survey Done By</label>
                                <input type="text" name="survey_by" id=" Survey Done By" class="form-control" list=" Survey Done By" value="{{$site->survey_by}}">
                                <datalist id=" Survey Done By">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Father/husband Name">Father/husband Name</label>
                                <input type="text" name="father_name" id="Father/husband Name" class="form-control" list="Father/husband Name" value="{{$site->father_name}}">
                                <datalist id="Father/husband Name">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Land Coverage(sq m)">Land Coverage(sq m)</label>
                                <input type="text" min="1" name="land_coverage" id="Land Coverage(sq m)" class="form-control" list="Land Coverage(sq m)" value="{{$site->land_coverage}}">
                                <datalist id="Land Coverage(sq m)">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IrrigationMode">IrrigationMode</label>
                                <input type="text" name="irrigationmode" id="IrrigationMode" class="form-control" list="IrrigationMode" value="{{$site->irrigationmode}}">
                                <datalist id="IrrigationMode">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Source Of Water">Source Of Water </label>
                                <input type="text" name="water_source" id="Source Of Water	 " class="form-control" list="Source Of Water" value="{{$site->water_source}}">
                                <datalist id="Source Of Water	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Water Depth Level(ft)">Water Depth Level(ft)</label>
                                <input type="text" min="1" name="water_depth" id="Water Depth Level(ft) " class="form-control" list="Water Depth Level(ft) " value="{{$site->water_depth}}">
                                <datalist id="Water Depth Level(ft)	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" IMEI">IMEI</label>
                                <input type="text"  name="imei" id="IMEI" class="form-control" list=" IMEI " value="{{$site->imei}}">
                                <datalist id=" IMEI	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="PumpSerialNo">Pump Serial No</label>
                                <input type="text"  name="pump_no" id="PumpSerialNo " class="form-control" list="PumpSerialNo " value="{{$site->pump_no}}">
                                <datalist id=" PumpSerialNo	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" PumpControllerSerialNo ">Pump Controller Serial No</label>
                                <input type="text"  name="pump_controller_no" id="PumpControllerSerialNo" class="form-control" list="PumpControllerSerialNo" value="{{$site->pump_controller_no}}">
                                <datalist id="PumpControllerSerialNo">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SolarPanelSerialNo">Solar Panel Serial No</label>
                                <input type="text" min="1" name="solar_panel_no" id="SolarPanelSerialNo" class="form-control" list="SolarPanelSerialNo" value="{{$site->solar_panel_no}}">
                                <datalist id="SolarPanelSerialNo">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="isSouthFacing">IS South Facing</label>

                                <select id="isSouthFacing" name="southfacing" class="form-control">
                                    <option value="yes" <?php echo ($site->southfacing == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="no" <?php echo ($site->southfacing == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsSiteSuitable">IS Site Suitable</label>

                                <select name="site_suitable" class="form-control">
                                    <option value="yes" <?php echo ($site->site_suitable == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="no" <?php echo ($site->site_suitable == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>


                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Head Of Pump Meter">Head Of Pump Meter</label>
                                <input type="text" name="head_pump" id="Head Of Pump Meter" class="form-control" list="Head Of Pump Meter" value="{{$site->head_pump}}">
                                <datalist id="Head Of Pump Meter">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Site Survey Latitude">Site Survey Latitude</label>
                                <input type="text" min="1" name="survey_latitude" id="Site Survey Latitude" class="form-control" list="Site Survey Latitude" value="{{$site->survey_latitude}}">
                                <datalist id="Site Survey Latitude">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Site Survey Longitude">Site Survey Longitude</label>
                                <input type="text" min="1" name="survey_longitude" id="Site Survey Longitude" class="form-control" list="Site Survey Longitude" value="{{$site->survey_longitude}}">
                                <datalist id="Site Survey Longitude">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Is Site Survey Done">Is Site Survey Done</label>
                                <select name="survey_done" class="form-control">
                                    <option value="Yes" <?php echo ($site->survey_done == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?php echo ($site->survey_done == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                                <datalist id="Is Site Survey Done">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SiteSurvey Date">Site Survey Date</label>
                                <input type="text" name="survey_date" class="form-control" list="SiteSurvey Date" value="{{$site->survey_date}}">
                                <datalist id="SiteSurvey Date">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsFeasibleApplications">Is Feasible Applications</label>

                                <select name="is_feasible_app" class="form-control">
                                    <option value="Yes" <?php echo ($site->site_suitable == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?php echo ($site->site_suitable == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="FeasibleApplications Date">Feasible Applications Date</label>
                                <input type="text" name="feasible_date" id="FeasibleApplications Date" class="form-control" list="FeasibleApplications Date" value="{{$site->feasible_date}}">
                                <datalist id="FeasibleApplications Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Member ID">Member ID</label>
                                <input type="number" min="1" name="member_id" id="Member ID" class="form-control" list="Member ID" value="{{$site->member_id}}">
                                <datalist id="Member ID">
                                    <option value=""></option>
                                </datalist>
                            </div>
                          
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Controller Type">Vender</label>
                                <input type="text" name="vendor" id="Controller Type" class="form-control" list="Controller Type" value="{{$site->vendor}}">
                                <datalist id="Controller Type">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsFeasibleApplications">Payment 90% Done</label>

                                <select name="pay_90" class="form-control">
                                    <option value="Yes" <?php echo ($site->pay_90 == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?php echo ($site->pay_90 == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsFeasibleApplications">Payment 10% Done</label>

                                <select name="pay_10" class="form-control">
                                    <option value="Yes" <?php echo ($site->pay_10 == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                    <option value="No" <?php echo ($site->pay_10 == 'No') ? 'selected' : ''; ?>>No</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="Boaring Diameter">Boaring Diameter</label>
                                <input type="number"  name="boring_dym" id="Boaring Diameter" class="form-control" list="Boaring Diameter" value="{{$site->boring_dym}}">
                                <datalist id="Boaring Diameter">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 1</label>
                                <input type="file" name="img1"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div>
                          <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 2</label>
                                <input type="file" name="img2"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div> <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 3</label>
                                <input type="file" name="img3"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div> <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 4</label>
                                <input type="file" name="img4"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div> <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 5</label>
                                <input type="file" name="img5"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div> <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 6</label>
                                <input type="file" name="img6"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div> <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 7</label>
                                <input type="file" name="img7"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="">Image 8</label>
                                <input type="file" name="img8"  class="form-control" list="" >
                                <datalist id="">
                                    <option value=""></option>
                                </datalist>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer" >
                        <button type="submit" class="btn btn-info  btnSubt  text-bold mr-3">Submit</button>
                        <button type="reset" class="btn btn-info btnCanc  text-bold">
                            Cancel</button>
                    </div>

                </form>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- / Content -->
<!-- Footer -->
@include("component.footer");