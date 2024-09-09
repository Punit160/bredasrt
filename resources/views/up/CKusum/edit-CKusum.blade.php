@include('kusum.component.header')
@include('component.upksb-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Kusum C</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breasdcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Kusum C</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Kusum C</h3>

        </div>
        @if(session()->has('status'))
            <div class="alert my-3 p-3 alert-success">
              {{session('status')}}
            </div>
            @endif
        <form action="{{route('update-kusum-C')}}" method="Post">
          @csrf
          <div class="card-body">
            <div class="row">


              <div class="col-md-6">
                <div class="form-group">
                  <label>Lot No</label>
                  <input type="hidden" name="kid" id="kid" class="form-control" value="{{$Ckusum->id}}">
                  <input type="text" name="lot_no" class="form-control" value="{{($Ckusum->lot_no)}}">
                </div>
              </div>
              <h4 class="col-12 mt-4 mb-3 ">Farmer Personnel Information</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Farmer Name</label>
                  <input type="text" name="f_farmer_name" class="form-control" value="{{($Ckusum->f_farmer_name)}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Father Name</label>
                  <input type="text" name="f_father_name" class="form-control" value="{{($Ckusum->f_father_name)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label>Customer No</label>
                  <input type="number" name="f_customer_no" class="form-control" value="{{($Ckusum->f_customer_no)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="tel" name="f_contact" id="f_contact" class="form-control" value="{{($Ckusum->f_contact)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="adharNo">Adhar No</label>
                  <input type="number" name="f_aadhar" class="form-control" value="{{($Ckusum->f_aadhar)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="village">Village</label>
                  <input type="text" id="village" name="f_village" class="form-control" value="{{($Ckusum->f_village)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="post">Post</label>
                  <input type="text" id="post" name="f_post" class="form-control" value="{{($Ckusum->f_post)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="tehsil">Tehsil</label>
                  <input type="text" id="tehsil" name="f_tehsil" class="form-control" value="{{($Ckusum->f_tehsil)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="district">District</label>
                  <input type="text" id="district" name="f_district" class="form-control" value="{{($Ckusum->f_district)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="pin">PIN</label>
                  <input type="number" name="f_pin" class="form-control" value="{{($Ckusum->f_pin)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Invoice Details</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="invoiceNo">INVOICE NO</label>
                  <input type="text" id="invoiceNo" name="f_invoice_no" class="form-control" value="{{$Ckusum->f_invoice_no}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date">DATE</label>
                  <input type="date" name="f_invoice_date" class="form-control" value="{{$Ckusum->f_invoice_date}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Pump Details</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pumpCapacity">Pump Capacity</label>
                  <input type="number" id="pumpCapacity" name="pump_capacity" class="form-control" value="{{($Ckusum->pump_capacity)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Contractor Allocation</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="contractorName">Contractor Name</label>
                  <input type="text" id="contractorName" name="c_contractor_name" class="form-control" value="{{($Ckusum->c_contractor_name)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="klkFirm">KLK Firm</label>
                  <input type="text" id="klkFirm" name="KLK_Firm" class="form-control" value="{{($Ckusum->KLK_Firm)}}">
                </div>
              </div>selec
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="contractorContactNo">Contact No</label>
                  <input type="tel" id="contractorContactNo" name="c_contact_no" class="form-control" value="{{($Ckusum->c_contact_no)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="email">Email ID</label>
                  <input type="text" id="email" name="email" class="form-control" value="{{($Ckusum->c_email)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Site Details</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="surveyDone">Survey Done</label>
                  <input type="text" id="surveyDone" name="sd_survey_done" class="form-control" value="{{($Ckusum->sd_survey_done)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="number" id="latitude" name="sd_latitude" class="form-control" value="{{($Ckusum->sd_latitude)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="longitude">Longitude</label>
                  <input type="number" id="longitude" name="sd_longitude" class="form-control" value="{{($Ckusum->sd_longitude)}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="surveyReceived">Survey received</label>
                  <select name="sd_survey_received" class="form-control">
                    <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->sd_survey_received == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->sd_survey_received == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="surveyReceivedDate">Survey Received Date</label>
                  <input type="date" name="sd_survey_received_date" class="form-control" value="{{($Ckusum->sd_survey_received_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Material Status</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="inverter">INVERTER</label>
                  <select name="mt_inverter" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->mt_inverter == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->mt_inverter == "No") echo 'selected'; ?>>No</option>
                  </select>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structure">STRUCTURE</label>
                  <select name="mt_structure" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->mt_structure == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->mt_structure == "No") echo 'selected'; ?>>No</option>
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="modules">MODULES</label>
                  <select name="mt_modules" class="form-control" >
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->mt_modules == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->mt_modules == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bos">BOS</label>
                  <select name="mt_bos" class="form-control" value="{{($Ckusum->mt_bos)}}">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->mt_bos == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->mt_bos == "No") echo 'selected'; ?>>No</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="materialStatusDate">Date</label>
                  <input type="date" name="mt_date" class="form-control" value="{{($Ckusum->mt_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Installation status</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foundation">Foundation</label>
                  <select name="ins_foundation" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->ins_foundation == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->ins_foundation == "No") echo 'selected'; ?>>No</option>

                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foundationDate">Foundation Date</label>
                  <input type="date" name="ins_foundation_date" class="form-control" value="{{($Ckusum->ins_foundation_date)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structureData">Structure</label>
                  <select name="ins_structure" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->ins_structure == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->ins_structure == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structureDate">Structure Date</label>
                  <input type="date" id="structureDate" name="ins_structure_data" class="form-control" value="{{($Ckusum->ins_structure_data)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="moduleMountingData">Module Mounting</label>
                  <select name="ins_module_mounting" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->ins_module_mounting == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->ins_module_mounting == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="moduleMountingDate">Module Mounting Date</label>
                  <input type="date" name="ins_module_mounting_date" class="form-control" value="{{($Ckusum->ins_module_mounting_date)}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inverterInstallationData">Inverter Installation Data</label>
                  <select name="ins_inverter_installation" class="form-control">
                      <option value="" disabled >Select...</option>
                    <option value="Yes" <?php if ($Ckusum->ins_inverter_installation == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->ins_inverter_installation == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inverterInstallationDate">Inverter Installation Date</label>
                  <input type="text" name="ins_inverter_installation_date" class="form-control" value="{{($Ckusum->ins_inverter_installation_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Documentation Status</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="doc_hoc">HOC Data</label>
                  <select name="doc_hoc" class="form-control">
                  <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->doc_hoc == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->doc_hoc == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="hocDate">HOC Date</label>
                  <input type="date" name="doc_hoc_date" class="form-control" value="{{($Ckusum->doc_hoc_date)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="photoData">Photo Data</label>
                  <select name="doc_hoc_photo" class="form-control">
                      <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->doc_hoc_photo == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->doc_hoc_photo == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="doc_hoc_photo_date">Photo Date</label>
                  <input type="date" name="doc_hoc_photo_date" class="form-control" value="{{($Ckusum->doc_hoc_photo_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">File Submission</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="inspectionData">Inspection Done</label>
                  <select name="inspection_done" class="form-control">
                  <option value="Yes" <?php if ($Ckusum->inspection_done == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->inspection_done == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
                  <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                  <label for="inspectionData">File Submission</label>
                  <select name="file_submission" class="form-control">
                  <option value="Yes" <?php if ($Ckusum->file_submission == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->file_submission == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="inspectionDate">Inspection Date</label>
                  <input type="date" name="file_submission_date" class="form-control" value="{{($Ckusum->file_submission_date)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="netMeteringData">Net Metering Data</label>
                  <select name="net_metering" class="form-control" >
                  <option value="Yes" <?php if ($Ckusum->net_metering == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->net_metering == "No") echo 'selected'; ?>>No</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="netMeteringDate">Net Metering Date</label>
                  <input type="date" name="net_metering_date" class="form-control" value="{{($Ckusum->net_metering_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">KLK Payment Status</h4>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="50paymentStatus">50% Payment Status</label>
                  <select name="payment_50" class="form-control">
                      <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->payment_50 == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->payment_50 == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="50paymentDate">50% Payment Date</label>
                  <input type="date" name="payment_50_date" class="form-control" value="{{($Ckusum->payment_50_date)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="35paymentStatus">35% Payment Status</label>
                  <select name="payment_35" class="form-control">
                      <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->payment_35 == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->payment_35 == "No") echo 'selected'; ?>>No</option>
               </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="35paymentStatusDate">35% Payment Date</label>
                  <input type="date" name="payment_35_date" class="form-control" value="{{($Ckusum->payment_35_date)}}">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="15paymentStatus">15% Payment Status</label>
                  <select name="payment_15" class="form-control">
                      <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->payment_15 == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->payment_15 == "No") echo 'selected'; ?>>No</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="15paymentDate">15% Payment Date</label>
                  <input type="date" name="payment_15_date" class="form-control" value="{{($Ckusum->payment_15_date)}}">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Contractor Payment</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="paymentStatus">Payment Status</label>
                  <select name="c_payment_status" class="form-control">
                      <option value="" disabled >Select...</option>
                  <option value="Yes" <?php if ($Ckusum->c_payment_status == "Yes") echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($Ckusum->c_payment_status == "No") echo 'selected'; ?>>No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-group">
                  <label for="paymentDate">Date</label>
                  <input type="date" name="c_payment__date" class="form-control" value="{{($Ckusum->c_payment__date)}}">
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label for="inverterNo">Inverter No</label>
                  <input type="text" name="Inverter_no" class="form-control" value="{{($Ckusum->Inverter_no)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="rmsId">RMS ID</label>
                  <input type="text" id="rmsId" name="rmsid" class="form-control" value="{{($Ckusum->rmsid)}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="imeiNo">IMEI No</label>
                  <input type="text" name="imei" class="form-control" value="{{($Ckusum->imei)}}">
                </div>
              </div>

              <div class="additionOnDemand col-12 mt-4">
                <div class="row" id="addMore">
                <div class="col-md-12">
                  <button class="btn btn-secondary rounded-circle" type="button" id="addBtn"><i class="fa fa-plus" style="font-size: 18px;"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button class="btn btn-primary" type="submit">
          Submit
        </button>
        <button class="btn btn-default float-right" type="button">
          Cancel
        </button>
      </div>
      </form>
    </div>
    <!-- /.card -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const addMore = document.getElementById('addMore');
    const addBtn = document.getElementById('addBtn');
    let i = 1;
    let ck_id;
    ck_id = document.getElementById('kid').value;
    fetch(`/get-ckusum-modules?ck_id=${ck_id}`)
      .then(response => response.json())
      .then(data => {
        const modules = data.modules; // Accessing the 'modules' array from fetched data
        modules.forEach(savedValue => {
          i++;

          const innerHtml = `<div class="col-md-6 col-lg-4 col-12 module form-group">
            <label style="color: rgb(61, 22, 22);" for="Module SR No">Module SR No</label>
            <div style="position: relative; display: flex;flex-direction: row;border: 1px solid rgb(210, 204, 204); border-radius: 5px;">
              <input type="text" name="modules[]" id="module_${i}" value="${savedValue}" class="form-control" style="padding-right: 40px; border: None;">
                          <i class="fa fa-times closeBtn" style="position: absolute; top: 30%;right: 4%; cursor:pointer"></i>
            </div>
          </div>`;

          addMore.insertAdjacentHTML('beforeend', innerHtml);
        });

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

    addBtn.addEventListener('click', (event) => {
      event.preventDefault();
      i++;

      const innerHtml = `<div class="col-md-6 col-lg-4 col-12 module form-group">
        <label style="color: rgb(61, 22, 22);" for="Module SR No">Module SR No</label>
        <div style="position: relative; display: flex;flex-direction: row;border: 1px solid rgb(210, 204, 204); border-radius: 5px;">
          <input type="text" name="modules[]" id="module_${i}" class="form-control" style="padding-right: 40px; border: None;">
                          <i class="fa fa-times closeBtn" style="position: absolute; top: 30%;right: 4%; cursor:pointer"></i>
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

@include('kusum.component.footer')