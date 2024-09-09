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
                    <h3 class="card-title text-bold"> Add Site Survey Form</h3>
                </div>

                <form action="{{route('save-site-survey')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with *  input
                            fields.</h6>
                        <div class="row">

                            <div class="col-lg-4 col-md-6   col-md-12 form-group">
                                <label for="Saral_ID">Saral ID</label>

                            <input type="number" min="1" name="saral_id" id="saral_id" class="form-control" list="pia" >
                                <datalist id="saral_id">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Application No">Application No</label>
                                <input type="number" min="1" name="application_no" id="Application" class="form-control" list="Application" >
                                <datalist id="Application">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Empanelled Agency">Empanelled Agency</label>
                                <input type="text" name="empanelled_agency" id="Empanelled Agency" class="form-control" list="Empanelled Agency" >
                                <datalist id="Empanelled Agency">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Name of Beneficiary ">Name of Beneficiary</label>
                                <input type="text" name="beneficiary" id="Name of Beneficiary " class="form-control" list="Name of Beneficiary " >
                                <datalist id="Name of Beneficiary ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value=""> Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <datalist id="Gender">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Gender">Category</label>
                                <input type="text" name="category" id="Category" class="form-control" list="Category">
                                <datalist id="Category">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Caste">Caste</label>
                                <input type="text" name="caste" id=" Caste" class="form-control" list=" Caste">
                                <datalist id=" Caste">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Mobile">Mobile Number</label>
                                <input type="number" min="1" name="mobile" id="Mobile Number" class="form-control" list="Mobile Number" >
                                <datalist id="Mobile Number">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Aadhar">Aadhar Authentication Status</label>
                                <select class="form-control" name="aadhar_status">
                                    <option value=""> Select</option>
                                    <option value="yes">Verified</option>
                                    <option value="no">Not-Verified</option>
                                </select>

                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>


                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Village">Village Of installation</label>
                                <input type="text" name="installation_village" class="form-control" list="Village of installation" >
                                <datalist id="Village of installation">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" District">District Of installation</label>
                                <input type="text" name="installation_dsitrict" class="form-control" list="District of installation" >
                                <datalist id="District of installation">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Initial Latitude">Initial Latitude</label>
                                <input type="number" min="1" name="latitude" id="Initial Latitude" class="form-control" list="Initial Latitude">
                                <datalist id="Initial Latitude">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Initial Longitude">Initial Longitude</label>
                                <input type="number" min="1" name="longitude" id="Initial Longitude" class="form-control" list="Initial Longitude">
                                <datalist id="Initial Longitude">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Pump"> Pump</label>
                                <input type="text" name="_pump" id=" Pump" class="form-control" list=" Pump">
                                <datalist id=" Pump">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Sub Type">Pump Sub Type</label>
                                <input type="text" name="pump_sub_type" id="Pump Sub Type" class="form-control" list="Pump Sub Type" >
                                <datalist id="Pump Sub Type">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Sub Type">Pump Capacity (HP)</label>
                                <input type="number" min="1" name="pump_capacity" id="Pump Capacity (HP)" class="form-control" list="Pump Capacity (HP)" >
                                <datalist id="Pump Capacity (HP)">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SPV Modules Capacity in kWp">SPV Modules Capacity in kWp</label>
                                <input type="number" min="1" name="spv_capacity" id="SPV Modules Capacity in kWp" class="form-control" list="SPV Modules Capacity in kWp">
                                <datalist id="SPV Modules Capacity in kWp">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Make">Pump Make</label>
                                <input type="text" name="pump_make" id="Pump Make" class="form-control" list="Pump Make">
                                <datalist id="Pump Make">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Pump Make">Module Make</label>
                                <input type="text" name="module_make" id="Pump Make" class="form-control" list="Pump Make">
                                <datalist id="modulemake">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="VFD/ Control Make">VFD/ Control Make</label>
                                <input type="text" name="vfd_make" id="VFD/ Control Make" class="form-control" list="VFD/ Control Make">
                                <datalist id="VFD/ Control Make">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="RMS Working Condition">RMS Working Condition</label>
                                <select id="RMS Working Condition" class="form-control" name="rms_condtn">
                                    <option value=""> Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Installed Date">System Installed Date</label>
                                <input type="date" name="sys_install_date" id="System Installed Date" class="form-control" list="System Installed Date">
                                <datalist id="System Installed Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Inspected Date">System Inspected Date</label>
                                <input type="date" name="sys_inspect_date" id="System Inspected Date" class="form-control" list="System Inspected Date">
                                <datalist id="System Inspected Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="System Inspected BY">System Inspected BY</label>
                                <input type="text" name="sys_inspectby" id="System Inspected BY" class="form-control" list="System Inspected BY">
                                <datalist id="System Inspected BY">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="CFA in Rs.">CFA in Rs.</label>
                                <input type="number" min="1" name="cfa" id="CFA in Rs." class="form-control" list="CFA in Rs.">
                                <datalist id="CFA in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SFA in Rs.">SFA in Rs.</label>
                                <input type="number" min="1" name="sfa" id="SFA in Rs." class="form-control" list="SFA in Rs.">
                                <datalist id="SFA in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Beneficiary Share in Rs.">Beneficiary Share in Rs.</label>
                                <input type="number" min="1" name="beneficiary_share" id=" Beneficiary Share in Rs." class="form-control" list=" Beneficiary Share in Rs.">
                                <datalist id=" Beneficiary Share in Rs.">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Total Pump Cost">Total Pump Cost</label>
                                <input type="number" min="1" name="total_pump_cost" id="Total Pump Cost" class="form-control" list="Total Pump Cost">
                                <datalist id="Total Pump Cost">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Sanction"> Sanction</label>
                                <input type="text" name="sanction" id=" Sanction" class="form-control" list=" Sanction">
                                <datalist id=" Sanction">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Application current Status">Application current Status</label>
                                <input type="text" name="app_current_status" id="Application current Status" class="form-control" list="Application current Status">
                                <datalist id="Application current Status">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" Survey Done By">Survey Done By</label>
                                <input type="text" name="survey_by" id=" Survey Done By" class="form-control" list=" Survey Done By">
                                <datalist id=" Survey Done By">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Father/husband Name">Father/husband Name</label>
                                <input type="text" name="father_name" id="Father/husband Name" class="form-control" list="Father/husband Name">
                                <datalist id="Father/husband Name">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Land Coverage(sq m)">Land Coverage(sq m)</label>
                                <input type="number" min="1" name="land_coverage" id="Land Coverage(sq m)" class="form-control" list="Land Coverage(sq m)">
                                <datalist id="Land Coverage(sq m)">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IrrigationMode">IrrigationMode</label>
                                <input type="text" name="irrigationmode" id="IrrigationMode" class="form-control" list="IrrigationMode">
                                <datalist id="IrrigationMode">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Source Of Water">Source Of Water </label>
                                <input type="text" name="water_source" id="Source Of Water	 " class="form-control" list="Source Of Water	 ">
                                <datalist id="Source Of Water	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Water Depth Level(ft)">Water Depth Level(ft)</label>
                                <input type="number" min="1" name="water_depth" id="Water Depth Level(ft) " class="form-control" list="Water Depth Level(ft) " >
                                <datalist id="Water Depth Level(ft)	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" IMEI">IMEI</label>
                                <input type="number" min="1" name="imei" id="IMEI" class="form-control" list=" IMEI ">
                                <datalist id=" IMEI	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="PumpSerialNo">Pump Serial No</label>
                                <input type="number" min="1" name="pump_no" id="PumpSerialNo " class="form-control" list="PumpSerialNo ">
                                <datalist id=" PumpSerialNo	 ">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for=" PumpControllerSerialNo ">Pump Controller Serial No</label>
                                <input type="number" min="1" name="pump_controller_no" id="PumpControllerSerialNo" class="form-control" list="PumpControllerSerialNo">
                                <datalist id="PumpControllerSerialNo">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SolarPanelSerialNo">Solar Panel Serial No</label>
                                <input type="number" min="1" name="solar_panel_no" id="SolarPanelSerialNo" class="form-control" list="SolarPanelSerialNo">
                                <datalist id="SolarPanelSerialNo">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="isSouthFacing">IS South Facing</label>
                                <select id="isSouthFacing" name="southfacing" class="form-control">
                                    <option value=""> Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsSiteSuitable">IS Site Suitable</label>
                                <select id="IsSiteSuitable" name="site_suitable" class="form-control">
                                    <option value=""> Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Head Of Pump Meter">Head Of Pump Meter</label>
                                <input type="number" min="1" name="head_pump" id="Head Of Pump Meter" class="form-control" list="Head Of Pump Meter" >
                                <datalist id="Head Of Pump Meter">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Site Survey Latitude">Site Survey Latitude</label>
                                <input type="number" min="1" name="survey_latitude" id="Site Survey Latitude" class="form-control" list="Site Survey Latitude">
                                <datalist id="Site Survey Latitude">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Site Survey Longitude">Site Survey Longitude</label>
                                <input type="number" min="1" name="survey_longitude" id="Site Survey Longitude" class="form-control" list="Site Survey Longitude">
                                <datalist id="Site Survey Longitude">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Is Site Survey Done">Is Site Survey Done</label>
                                <input type="text" name="survey_done" id="Is Site Survey Done" class="form-control" list="Is Site Survey Done">
                                <datalist id="Is Site Survey Done">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="SiteSurvey Date">Site Survey Date</label>
                                <input type="date" name="survey_date" id="SiteSurvey Date" class="form-control" list="SiteSurvey Date">
                                <datalist id="SiteSurvey Date">
                                    <option value=""></option>
                                </datalist>
                            </div>

                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="IsFeasibleApplications">Is Feasible Applications</label>
                                <select id="IsFeasibleApplications" class="form-control" name="is_feasible_app">
                                    <option value=""> Select</option>

                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="FeasibleApplications Date">Feasible Applications Date</label>
                                <input type="date" name="FeasibleApplications Date" name="feasible_date" id="FeasibleApplications Date" class="form-control" list="FeasibleApplications Date">
                                <datalist id="FeasibleApplications Date">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Member ID">Member ID</label>
                                <input type="number" min="1" name="member_id" id="Member ID" class="form-control" list="Member ID">
                                <datalist id="Member ID">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Family ID">Family ID</label>
                                <input type="number" min="1" name="family_id" id="Family ID" class="form-control" list="Family ID">
                                <datalist id="Family ID">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Controller Type">Controller Type</label>
                                <input type="text" name="controller_type" id="Controller Type" class="form-control" list="Controller Type" >
                                <datalist id="Controller Type">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Old ApplicationNo">Old Application No</label>
                                <input type="number" min="1" name="old_app" id="Old ApplicationNo" class="form-control" list="Old ACpplicationNo">
                                <datalist id="Old ApplicationNo">
                                    <option value=""></option>
                                </datalist>
                            </div>
                            <div class="col-lg-4 col-md-6  col-12 form-group">
                                <label for="Boaring Diameter">Boaring Diameter</label>
                                <input type="number" min="1" name="boring_dym" id="Boaring Diameter" class="form-control" list="Boaring Diameter" >
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

                    <div class="card-footer" style="background-color: green;  ">
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