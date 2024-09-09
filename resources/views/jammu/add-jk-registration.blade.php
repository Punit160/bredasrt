@include('component.head')
@include('component.jammu-header')
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
      <div class="card card-default borderCard">
        <div class="card-header ">
          <h3 class="card-title text-bold">{{$state}} Registration Form</h3>
        </div>
        @if(session()->has('status'))
              <div class="alert my-3 p-3 alert-success">
                {{session('status')}}
              </div>
              @endif
              @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
            @endif
        <form action="{{route('save-jk-registration')}}" method="Post" enctype='multipart/form-data'>
          @csrf
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted ">The field labels marked with * required input
              fields.</h6>
            <div class="row">


              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="lotNo">Lot No</label>
                <input type="text" name="lot_no" id="lot_No" class="form-control" required>
              </div>
              
              
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="lotNo">Phase</label>
                <input type="text" name="monitering" id="monitering" class="form-control" required>
              </div>

              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Farmer's Personal Detail</p>
              </div>
              <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="lotNo">Customer No</label>
                <input type="text" name="f_customer_no" id="f_customer_No" class="form-control" required>
              </div>
              
                <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="lotNo">Work Order</label>
                <input type="text" name="work_order" id="f_customer_No" class="form-control" required>
              </div>
              
                <div class="col-lg-4 col-md-6   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="lotNo">Work Order Date</label>
                <input type="text" name="work_order_date" id="f_customer_No" class="form-control" required>
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Application No">Application No</label>
                <input type="text" name="f_app_no" id="f_app_No" class="form-control" required>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_farmer_name">Farmer Name</label>
                <input type="text" name="f_farmer_name" id="f_farmer_name" class="form-control" required>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_father_name">Father Name</label>
                <input type="text" name="f_father_name" id="f_father_name" class="form-control" required>
              </div>
               <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_father_name">Contact No</label>
                <input type="number" name="contact_number" id="f_father_name" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_father_name">Adhaar No</label>
                <input type="number" name="adhaar_number" id="f_father_name" class="form-control" required>
              </div>
            <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">District</label>
                <input type="text" name="district" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">Post</label>
                <input type="text" name="post" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">Village</label>
                <input type="text" name="village" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">Tehsil</label>
                <input type="text" name="tehsil" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-f_invoice_dategroup">
                <label style="color: rgb(61, 22, 22);" for="f_pin">PIN</label>
                <input type="text" name="f_pin" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">Invoice</label>
                <input type="text" name="f_invoice" id="f_pin" class="form-control" required>
              </div>
                <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_pin">Date</label>
                <input type="date" name="f_invoice_date" id="f_pin" class="form-control" required>
              </div>
              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Pump Details</p>
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="p_pump_capacity" style="color: brown;">Pump
                  Capacity</label>
                <input type="text" name="p_pump_capacity" id="p_pump_capacity" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="p_pump_type">Pump Type</label>
                 <select class="form-control" name="p_pump_type">
                  <option value="AC">AC</option>
                  <option value="DC">DC</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="p_pump_subtype">Sub type</label>
                  <select class="form-control" name="p_pump_subtype">
                  <option value="SUBMERSIBLE">SUBMERSIBLE</option>
                  <option value="SURFACE">SURFACE</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="p_pump_head">Head</label>
                <input type="number" name="p_pump_head" class="form-control">
              </div>
             <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Contractor Allocation</p>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="c_contractor_name">Contractor Name</label>
                <select class="form-control" name="c_contractor_name" id="vendors">
                  @foreach($vendors as $vendor)
                  <option value="{{$vendor->c_contractor_name}}">{{$vendor->c_contractor_name}}</option>
                  @endforeach
                </select>

              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="c_firm">Firm</label>
                <input type="text" name="c_firm" class="form-control" id="c_firm">
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for=" c_contact,">Contact No</label>
                <input type="text" name="c_contact" class="form-control" id="c_contact">
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Email">Email ID</label>
                <input type="text" name="email"  class="form-control" id="email">
              </div>

              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Site Details
                </p>
              </div>


              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Aadhar">Survey Done</label>
                <select class="form-control" name="s_survey_done">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="s_latitude">Latitude</label>
                <input type="text" name="s_latitude" id="" class="form-control">
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="s_longitude">Longitude</label>
                <input type="text" name="s_longitude" id="" class="form-control">
              </div>

              <div class=" col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Aadhar">Survey Received</label>
                <select class="form-control" name="s_recieved">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Date">Date</label>
                <input type="date" name="s_date" id="" class="form-control">
              </div>

              <div class="col-12">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Material Status
                </p>
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Pump">Pump</label>
                <select class="form-control" name="m_pump">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Structure">Structure</label>
                <select class="form-control" name="m_structure">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Modules">Modules</label>
                <select class="form-control" name="m_modules">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="BOS">BOS</label>
                <select class="form-control" name="m_bos">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="  col-md-6 col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="m_date">Date</label>
                <input type="date" name="m_date" id="" class="form-control">
              </div>



              <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  JCR
                  Status
                </p>
              </div>

              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Foundation">Foundation</label>
                <select class="form-control" name="jcr_found">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_found_date">Foundation Date</label>
                <input type="date" name="jcr_found_date" id="" class="form-control">
              </div>

              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Structure">Structure</label>
                <select class="form-control" name="jcr_structure">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_structure_date">Structure Date</label>
                <input type="date" name="jcr_structure_date" id="" class="form-control">
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Module">Module</label>
                <select class="form-control" name="jcr_module">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_module_date">Module Date</label>
                <input type="date" name="jcr_module_date" id="" class="form-control">
              </div>

              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Pump">Pump
                </label>
                <select class="form-control" name="jcr_pump">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="Date">Pump Date</label>
                <input type="date" name="jcr_pump_date" id="" class="form-control">
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_hoc">HOC</label>
                <select class="form-control" name="jcr_hoc">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_hoc_date">HOC Date</label>
                <input type="date" name="jcr_hoc_date" id="" class="form-control">
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_photo">Photo
                </label>
                <select class="form-control" name="jcr_photo">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_photo_date">Photo Date</label>
                <input type="date" name="jcr_photo_date" id="" class="form-control">
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_insurance">Insurance</label>
                <select class="form-control" name="jcr_insurance">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="jcr_insurance_date">Insurance Date</label>
                <input type="date" name="jcr_insurance_date" id="" class="form-control">
              </div>
              <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  File Submission
                </p>
              </div>

              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_file_submit">File Submission</label>
                <select class="form-control" name="f_file_submit">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_file_submit_date">File Submission Date</label>
                <input type="date" name="f_file_submit_date" id="" class="form-control">
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_inspect">Inspection</label>
                <select class="form-control" name="f_inspect">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="f_inspect_date">Inspection Date</label>
                <input type="date" name="f_inspect_date" id="" class="form-control">
              </div>

              <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  KLK Payment Status
                </p>
              </div>
               <div class=" col-md-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_amount">KLK Amount</label>
               <input type="number" name="klk_amount" id="" class="form-control">
              </div>
                 <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_pay_90">90% Amount</label>
               <input type="number" name="klk_pay_90" id="" class="form-control">
              </div>
               <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_pay_90">90% Payment</label>
                <select class="form-control" name="90_status">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
               <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_pay_90_date">90% Payment Date</label>
                <input type="date" name="klk_pay_90_date" id="" class="form-control">
              </div>
              
            <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_pay_10">10% Amount</label>
               <input type="number" name="klk_pay_10" id="" class="form-control">
              </div>

              <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="10_status">10% Payment
                </label>
                <select class="form-control" name="10_status">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            <div class="col-lg-4 col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="klk_pay_10_date">10% Payment Date</label>
                <input type="date" name="klk_pay_10_date" id="" class="form-control">
              </div>


              <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Contractor Payment
                </p>
              </div>
              <div class="  col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="contractor_pay">Payment Status
                </label>
                <select class="form-control" name="contractor_pay">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-md-6  col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="contractor_pay_date">Date</label>
                <input type="date" name="contractor_pay_date" id="" class="form-control">
              </div>
              <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Material Tracking
                </p>
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="mt_pump_No">Pump No</label>
                <input  type="text" name="mt_pump_no" id="" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="mt_motor_No">Motor No</label>
                <input  type="text"  name="mt_motor_no" id="" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="mt_controller_No">Controller No</label>
                <input type="text"  name="mt_controller_no" id="" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="mt_rmsid">RMS ID</label>
                <input  type="text"  name="mt_rmsid" id="" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="mt_imei">IMEI No</label>
                <input type="text" min="1" name="mt_imei" id="" class="form-control">
              </div>
              <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Module Watt</label>
                <input type="text" name="mt_module_watt" id="" class="form-control">
              </div>
              
                 <div class="col-12 mt-2">
                <p style="font-weight: bold; font-size: 24px; color: black ;border-bottom: 2px dotted rgb(235, 209, 209);">
                  Documentation
                </p>
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">HOC</label>
                <input type="file" name="image1" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Pre Photo</label>
                <input type="file" name="image2" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Controller Photo</label>
                <input type="file" name="image3" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Panel Photo</label>
                <input type="file" name="image4" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Water Dispatch Photo</label>
                <input type="file" name="image5" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="module_watt">Insurance</label>
                <input type="file" name="image6" id="" class="form-control">
              </div>
               <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="image7">Invoice</label>
                <input type="file" name="image7" id="" class="form-control">
              </div>
                <div class="col-md-6 col-lg-4   col-12 form-group">
                <label style="color: rgb(61, 22, 22);" for="image7">Document</label>
                <input type="file" name="image8" id="" class="form-control">
              </div>

              <div class="col-12 mt-2">
                <p style="  font-size: 24px; color: black  ">
                  Module No
                </p>
              </div>
              <div class="col-12 form-group">
                <div class="row " id="addMore">
                  <div class="col-md-6 col-lg-4 module  col-12 form-group">
                    <label style="color: rgb(61, 22, 22);" for="">Module SR No
                    </label>
                    <div style="position: relative; display: flex;flex-direction: row;border: 1px solid rgb(210, 204, 204); border-radius: 5px;">
                      <input type="text" name="modules[]" id="module_0" class="form-control" style="padding-right: 40px; border: None;" required>
                      <i class="fa fa-close closeBtn" style="position: absolute; top: 30%;right: 3%;"></i>
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-12 mt-2">
                <button type="btn" id="addBtn" style="border-radius: 40%;background-color: brown;border: None; ">
                  <i class="fa fa-plus" style="color: white;  padding: 10px; font-size: 20px;"></i>
                </button>
              </div>

            </div>

          </div>

            <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>

        </form>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- / Content -->
<!-- Footer -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const addMore = document.getElementById('addMore');
    const addBtn = document.getElementById('addBtn');
    let i = 0;

    addBtn.addEventListener('click', (event) => {
      event.preventDefault();
      i++;

      const innerHtml = `<div class="col-md-6 col-lg-4 col-12 module form-group">
        <label style="color: rgb(61, 22, 22);" for="Module SR No">Module SR No
        </label>
        <div style="position: relative; display: flex;flex-direction: row;border: 1px solid rgb(210, 204, 204); border-radius: 5px;">
          <input type="text" name="modules[]" id="module_${i}" class="form-control" style="padding-right: 40px; border: None;">
          <i class="fa fa-close closeBtn" style="position: absolute; top: 30%;right: 3%;"></i>
        </div>
      </div>`;

      addMore.insertAdjacentHTML('beforeend', innerHtml);

      const closeBtn = document.querySelectorAll('.closeBtn');
      closeBtn.forEach((item) => {
        item.addEventListener('click', (event) => {
          const module = event.target.closest('.module');
          if (module) {
            addMore.removeChild(module);
          }
        });
      });
    });
  });
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#vendors').change(function() {
      var vid = $(this).val(); // Use $(this).val() to get the selected value
      
      $.ajax({
        type: "GET",
        url: "/jk/vendors",
        data: {
          vid: vid,
        },
        success: function(response) {
          console.log(response);
          $("#email").val(response.email);
          $("#c_contact").val(response.mobile);
          $("#c_firm").val(response.firm);
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }
      });
    });
  });
</script>

@include("component.footer");