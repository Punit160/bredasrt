@include('component.table-head')
@include('component.jammu-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Registeration Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Registeration Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View Registeration Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1"  class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>State</th>
                    <th>Phase</th>
                    <th>LOT No</th>
                    <th>Customer No</th>
                    <th>Work Order</th>
                    <th>Work Order Date</th>
                    <th>Application No</th>
                    <th>Farmer Name</th>
                    <th>Father Name</th>
                    <th>Contact No</th>
                    <th>Adhaar Number</th>
                    <th>District</th>
                    <th>Post</th>
                    <th>Village</th>
                    <th>Tehsil</th>
                    <th>PIN</th>
                    <th>Invoice</th>
                    <th>Invoice Date</th>
                    <th>Pump Capacity</th>
                    <th>Pump Type</th>
                    <th>Subtype</th>
                    <th>Head</th>
                    <th>Contractor Name</th>
                    <th>Firm</th>
                    <th>Contact No</th>
                    <th>Email ID</th>
                    <th>Survey Done</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Survey Received</th>
                    <th>Date</th>
                    <th>Pump</th>
                    <th>Structure</th>
                    <th>Modules</th>
                    <th>BOS</th>
                    <th>Date</th>
                    <th>Foundation</th>
                    <th>Date</th>
                    <th>Structure</th>
                    <th>Date</th>
                    <th>Module</th>
                    <th>Date</th>
                    <th>Pump</th>
                    <th>Date</th>
                    <th>HOC</th>
                    <th>Date</th>
                    <th>Photo</th>
                    <th>Date</th>
                    <th>Insurance</th>
                    <th>Date</th>
                    <th>File Submission</th>
                    <th>Date</th>
                    <th>Inspection</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status of 90% Amount</th>
                    <th>90% Payment</th>
                    <th>Date</th>
                    <th>Status of 10% Amount</th>
                    <th>10% Payment</th>
                    <th>Date</th>
                    <th>Payment Status</th>
                    <th>Date</th>
                    <th>Pump No</th>
                    <th>Motor No</th>
                    <th>Controller No</th>
                    <th>RMS ID</th>
                    <th>IMEI No</th>
                    <th>Module Watt</th>
                    <th>Module-Sr.No</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($jks as $jk)
                  <tr>
                    <td>{{$number}}</td>
                     <td>{{$jk->state}}</td>
                    <td>{{$jk->monitering}}</td>
                    <td>{{$jk->lot_no}}</td>
                    <td>{{$jk->f_customer_no}}</td>
                    <td>{{$jk->work_order}}</td>
                    <td>{{$jk->work_order_date}}</td>
                    <td>{{$jk->f_app_no}}</td>
                    <td>{{$jk->f_farmer_name}}</td>
                    <td>{{$jk->f_father_name}}</td>
                    <td>{{$jk->contact_number}}</td>
                    <td>{{$jk->adhaar_number}}</td>
                    <td>{{$jk->district}}</td>
                    <td>{{$jk->post}}</td>
                    <td>{{$jk->village}}</td>
                    <td>{{$jk->tehsil}}</td>
                    <td>{{$jk->f_pin}}</td>
                    <td>{{$jk->f_invoice}}</td>
                    <td>{{$jk->f_invoice_date}}</td>
                    <td>{{$jk->p_pump_capacity}}</td>
                    <td>{{$jk->p_pump_type}}</td>
                    <td>{{$jk->p_pump_subtype}}</td>
                    <td>{{$jk->p_pump_head}}</td>
                    <td>{{$jk->c_contractor_name}}</td>
                    <td>{{$jk->c_firm}}</td>
                    <td>{{$jk->c_contact}}</td>
                    <td>{{$jk->c_email}}</td>
                    <td>{{$jk->s_survey_done}}</td>
                    <td>{{$jk->s_latitude}}</td>
                    <td>{{$jk->s_longitude}}</td>
                    <td>{{$jk->s_recieved}}</td>
                    <td>{{$jk->s_date}}</td>
                    <td>{{$jk->m_pump}}</td>
                    <td>{{$jk->m_structure}}</td>
                    <td>{{$jk->m_modules}}</td>
                    <td>{{$jk->m_bos}}</td>
                    <td>{{$jk->m_date}}</td>
                    <td>{{$jk->jcr_found}}</td>
                    <td>{{$jk->jcr_found_date}}</td>
                    <td>{{$jk->jcr_structure}}</td>
                    <td>{{$jk->jcr_structure_date}}</td>
                    <td>{{$jk->jcr_module}}</td>
                    <td>{{$jk->jcr_module_date}}</td>
                    <td>{{$jk->jcr_pump}}</td>
                    <td>{{$jk->jcr_pump_date}}</td>
                    <td>{{$jk->jcr_hoc}}</td>
                    <td>{{$jk->jcr_hoc_date}}</td>
                    <td>{{$jk->jcr_photo}}</td>
                    <td>{{$jk->jcr_photo_date}}</td>
                    <td>{{$jk->jcr_insurance}}</td>
                    <td>{{$jk->jcr_insurance_date}}</td>
                    <td>{{$jk->f_file_submit}}</td>
                    <td>{{$jk->f_file_submit_date}}</td>
                    <td>{{$jk->f_inspect}}</td>
                    <td>{{$jk->f_inspect_date}}</td>
                    <td>{{$jk->klk_amount}}</td>
                    <td>{{$jk->status_90}}</td>
                    <td>{{$jk->klk_pay_90}}</td>
                    <td>{{$jk->klk_pay_90_date}}</td>
                    <td>{{$jk->status_10}}</td>
                    <td>{{$jk->klk_pay_10}}</td>
                    <td>{{$jk->klk_pay_10_date}}</td>
                    <td>{{$jk->contractor_pay}}</td>
                    <td>{{$jk->contractor_pay_date}}</td>
                    <td>{{$jk->mt_pump_no}}</td>
                    <td>{{$jk->mt_motor_no}}</td>
                    <td>{{$jk->mt_controller_no}}</td>
                    <td>{{$jk->mt_rmsid}}</td>
                    <td>{{$jk->mt_imei}}</td>
                    <td>{{$jk->mt_module_watt}}</td>
                    <td>
                      <ul>
                        @if ($jk->JammuModulee)
                        @foreach ($jk->JammuModulee as $module)
                        <li>{{ $module->sr_no }}</li>
                        @endforeach
                        @endif
                      </ul>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                         <a class="dropdown-item" href="{{ route('print', ['id' => $jk->id]) }}"><i class="fa fa-print"></i>&emsp;Print</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('edit-jk', ['id' => $jk->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('delete-jk', ['id' => $jk->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
                        </div>
                      </div>
                    </td>
                   

                  </tr>
                  <?php $number++; ?>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                   <th>Sr. No.</th>
                    <th>State</th>
                    <th>Phase</th>
                    <th>LOT No</th>
                    <th>Customer No</th>
                    <th>Work Order</th>
                    <th>Work Order Date</th>
                    <th>Application No</th>
                    <th>Farmer Name</th>
                    <th>Father Name</th>
                    <th>Contact No</th>
                    <th>Adhaar Number</th>
                    <th>District</th>
                    <th>Post</th>
                    <th>Village</th>
                    <th>Tehsil</th>
                    <th>PIN</th>
                    <th>Invoice</th>
                    <th>Invoice Date</th>
                    <th>Pump Capacity</th>
                    <th>Pump Type</th>
                    <th>Subtype</th>
                    <th>Head</th>
                    <th>Contractor Name</th>
                    <th>Firm</th>
                    <th>Contact No</th>
                    <th>Email ID</th>
                    <th>Survey Done</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Survey Received</th>
                    <th>Date</th>
                    <th>Pump</th>
                    <th>Structure</th>
                    <th>Modules</th>
                    <th>BOS</th>
                    <th>Date</th>
                    <th>Foundation</th>
                    <th>Date</th>
                    <th>Structure</th>
                    <th>Date</th>
                    <th>Module</th>
                    <th>Date</th>
                    <th>Pump</th>
                    <th>Date</th>
                    <th>HOC</th>
                    <th>Date</th>
                    <th>Photo</th>
                    <th>Date</th>
                    <th>Insurance</th>
                    <th>Date</th>
                    <th>File Submission</th>
                    <th>Date</th>
                    <th>Inspection</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status of 90% Amount</th>
                    <th>90% Payment</th>
                    <th>Date</th>
                    <th>Status of 10% Amount</th>
                    <th>10% Payment</th>
                    <th>Date</th>
                    <th>Payment Status</th>
                    <th>Date</th>
                    <th>Pump No</th>
                    <th>Motor No</th>
                    <th>Controller No</th>
                    <th>RMS ID</th>
                    <th>IMEI No</th>
                    <th>Module Watt</th>
                    <th>Module-Sr.No</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('component.table-footer')