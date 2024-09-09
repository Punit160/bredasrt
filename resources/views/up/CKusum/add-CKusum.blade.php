@include('kusum.component.header')
@include('component.upksb-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Kusum C</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <form action="{{route('save-kusum-C')}}" method="Post">
          @csrf
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">


              <div class="col-md-6">
                <div class="form-group">
                  <label>Lot No</label>

                  <input type="text" name="lot_no" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Farmer Personnel Information</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Farmer Name</label>
                  <input type="text" name="f_farmer_name" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Father Name</label>
                  <input type="text" name="f_father_name" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label>Customer No</label>
                  <input type="number" name="f_customer_no" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="tel" name="f_contact" id="f_contact" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="adharNo">Adhar No</label>
                  <input type="number" name="f_aadhar" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="village">Village</label>
                  <input type="text" id="village" name="f_village" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="post">Post</label>
                  <input type="text" id="post" name="f_post" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="tehsil">Tehsil</label>
                  <input type="text" id="tehsil" name="f_tehsil" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="district">District</label>
                  <input type="text" id="district" name="f_district" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="pin">PIN</label>
                  <input type="number" name="f_pin" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Invoice Details</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="invoiceNo">INVOICE NO</label>
                  <input type="text" id="invoiceNo" name="f_invoice_no" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date">DATE</label>
                  <input type="date" name="f_invoice_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Pump Details</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pumpCapacity">Pump Capacity</label>
                  <input type="number" id="pumpCapacity" name="pump_capacity" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Contractor Allocation</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="contractorName">Contractor Name</label>
                  <input type="text" id="contractorName" name="c_contractor_name" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="klkFirm">KLK Firm</label>
                  <input type="text" id="klkFirm" name="KLK_Firm" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="contractorContactNo">Contact No</label>
                  <input type="tel" id="contractorContactNo" name="c_contact_no" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="email">Email ID</label>
                  <input type="email" id="email" name="c_email" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Site Details</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="surveyDone">Survey Done</label>
                  <input type="text" id="surveyDone" name="sd_survey_done" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="number" id="latitude" name="sd_latitude" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="longitude">Longitude</label>
                  <input type="number" id="longitude" name="sd_longitude" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="surveyReceived">Survey received</label>
                  <select name="sd_survey_received" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="surveyReceivedDate">Survey Received Date</label>
                  <input type="date" name="sd_survey_received_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Material Status</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="inverter">INVERTER</label>
                  <select name="mt_inverter" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structure">STRUCTURE</label>
                  <select name="mt_structure" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="modules">MODULES</label>
                  <select name="mt_modules" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bos">BOS</label>
                  <select name="mt_bos" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="materialStatusDate">Date</label>
                  <input type="date" name="mt_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Installation status</h4>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foundation">Foundation</label>
                  <select name="ins_foundation" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foundationDate">Foundation Date</label>
                  <input type="date" name="ins_foundation_date" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structureData">Structure</label>
                  <select name="ins_structure" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="structureDate">Structure Date</label>
                  <input type="date" id="structureDate" name="ins_structure_data" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="moduleMountingData">Module Mounting</label>
                  <select name="ins_module_mounting" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="moduleMountingDate">Module Mounting Date</label>
                  <input type="date" name="ins_module_mounting_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inverterInstallationData">Inverter Installation Data</label>
                  <select name="ins_inverter_installation" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inverterInstallationDate">Inverter Installation Date</label>
                  <input type="text" name="ins_inverter_installation_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Documentation Status</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="doc_hoc">HOC Data</label>
                  <select name="doc_hoc" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="hocDate">HOC Date</label>
                  <input type="date" name="doc_hoc_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="photoData">Photo Data</label>
                  <select name="doc_hoc_photo" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="photoDate">Photo Date</label>
                  <input type="date" name="doc_hoc_photo_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">File Submission</h4>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="inspectionData">Inspection Data</label>
                  <select name="file_submission" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="inspectionDate">Inspection Date</label>
                  <input type="date" name="file_submission_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="netMeteringData">Net Metering Data</label>
                  <select name="net_metering" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="netMeteringDate">Net Metering Date</label>
                  <input type="date" name="net_metering_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">KLK Payment Status</h4>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="50paymentStatus">50% Payment Status</label>
                  <select name="payment_50" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="50paymentDate">50% Payment Date</label>
                  <input type="date" name="payment_50_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="35paymentStatus">35% Payment Status</label>
                  <select name="payment_35" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="35paymentStatusDate">35% Payment Date</label>
                  <input type="date" name="payment_35_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="15paymentStatus">15% Payment Status</label>
                  <select name="payment_15" class="form-control">
                    <option value="dis">Select...</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="15paymentDate">15% Payment Date</label>
                  <input type="date" name="payment_15_date" class="form-control">
                </div>
              </div>


              <h4 class="col-12 mt-4 mb-3 ">Contractor Payment</h4>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="paymentStatus">Payment Status</label>
                  <select name="c_payment_status" class="form-control">
                    <option value="dis">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-group">
                  <label for="paymentDate">Date</label>
                  <input type="date" name="c_payment__date" class="form-control">
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <label for="inverterNo">Inverter No</label>
                  <input type="text" name="Inverter_no" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="rmsId">RMS ID</label>
                  <input type="text" id="rmsId" name="rmsid" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="imeiNo">IMEI No</label>
                  <input type="text" name="imei" class="form-control">
                </div>
              </div>

              <div class="col-12 form-group">
                <div class="row " id="addMore">

                <div class="col-md-6 col-lg-4 module">
                    <div class="form-group">
                        <label  style="color: rgb(61, 22, 22);" for="moduleSRNo">Module SR No</label>
                          <div class="row border rounded mx-1">
                            <div class="col-11">
                              <input type="text" id="moduleSRNo0" name="modules[]" class="form-control border-0">
                            </div>
                            <div class="col-1 d-flex align-items-center">
                              <i class="fa fa-times destroyer" style="cursor: pointer;"></i>
                            </div>
                          </div>
                    </div>
                </div>

                  

                </div>

              </div>
              <div class="col-12 mt-2">
              <button class="btn btn-secondary rounded-circle" type="button" id="addBtn"><i class="fa fa-plus" style="font-size: 18px;"></i></button>

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
    let i = 0;

    addBtn.addEventListener('click', (event) => {
      event.preventDefault();
      i++;

      const innerHtml = `<div class="col-md-6 col-lg-4 module">
                    <div class="form-group">
                        <label  style="color: rgb(61, 22, 22);" for="moduleSRNo">Module SR No</label>
                          <div class="row border rounded mx-1">
                            <div class="col-11">
                              <input type="text" id="moduleSRNo${i}" name="modules[]" class="form-control border-0">
                            </div>
                            <div class="col-1 d-flex align-items-center">
                              <i class="fa fa-times destroyer" style="cursor: pointer;"></i>
                            </div>
                          </div>
                      </div>
                    </div>`;

      addMore.insertAdjacentHTML('beforeend', innerHtml);

      const closeBtn = document.querySelectorAll('.destroyer');
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
@include("component.footer");