@include('component.table-head')
@include('component.jammu-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1>View Jammu Srt</h1> -->
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View {{$state}} Srt</li>
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
              <h3 class="card-title">View {{$state}} Srt</h3>
            </div>
            <!-- /.card-header -->
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
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto; text-wrap: nowrap;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Application Status</th>
                    <th>Scheme</th>
                    <th>Application No</th>
                    <th>Registeration No.</th>
                    <th>Installer Name</th>
                    <th>Installer Category</th>
                    <th>PV Capacity Band</th>
                    <th>Project Name</th>
                    <th>PV Capacity</th>
                    <th>Discom Name</th>
                    <th>Consumer No.</th>
                    <th>Division/Zone</th>
                    <th>Sub-division</th>
                    <th>Sanctioned / Contract Load</th>
                    <th>Phase of proposed Solar Inverter</th>
                    <th>Category</th>
                    <th>Who will provide the Net-Meter?</th>
                    <th>Lat</th>
                    <th>Long</th>
                    <th>Consumer Email</th>
                    <th>Consumer Mobile</th>
                    <th>Installer Email</th>
                    <th>Installer Mobile</th>
                    <th>Name Prefix</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Landline No.</th>
                    <th>Street/ House No.</th>
                    <th>Taluka</th>
                    <th>District</th>
                    <th>City/Village</th>
                    <th>State</th>
                    <th>Pin</th>
                    <th>Communication Address</th>
                    <th>Passport Size Photo</th>
                    <th>Whether the Premises is owned or Rented</th>
                    <th>Electricity Bill</th>
                    <th>Aadhaar No. Entered</th>
                    <th>Solar PV system Owned by the Consumer</th>
                    <th>Don't Want Subsidy</th>
                    <th>OTP Verified on</th>
                    <th>Signed Document Uploaded Date</th>
                    <th>Last Comment</th>
                    <th>Last Comment Date</th>
                    <th>Last Comment Replied Date</th>
                    <th>Document Verified Date</th>
                    <th>Field Report Status Received from DisCom on</th>
                    <th>Quotation No.</th>
                    <th>DisCom Estimate Amount</th>
                    <th>Due Date</th>
                    <th>Payment Received</th>
                    <th>Payment Made on</th>
                    <th>Self- Certification</th>
                    <th>CEI Drawing Application ID</th>
                    <th>CEI Drawing Application Approval Date</th>
                    <th>Work Order No.</th>
                    <th>Work Order Date</th>
                    <th>Work Start Date</th>
                    <th>Work End Date</th>
                    <th>Bi-directional Meter Make</th>
                    <th>Bi-directional Meter No.</th>
                    <th>Solar Meter Make</th>
                    <th>Solar Meter No.</th>
                    <th>Date of Installation of Solar Meter</th>
                    <th>Agreement Signing Date</th>
                    <th>Project Estimated Cost</th>
                    <th>PCR Number</th>
                    <th>PCR Submitted Date</th>
                    <th>Created BY</th>

                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($srts as $srt)
                  <tr>
                    <td>{{$number}}</td>
                    <td>{{$srt->app_status}}</td>
                    <td>{{$srt->scheme}}</td>
                    <td>{{$srt->app_no}}</td>
                    <td>{{$srt->reg_no}}</td>
                    <td>{{$srt->installer_name}}</td>
                    <td>{{$srt->installer_category}}</td>
                    <td>{{$srt->pv_band}}</td>
                    <td>{{$srt->project_name}}</td>
                    <td>{{$srt->pv_capacity}}</td>
                    <td>{{$srt->discom_name}}</td>
                    <td>{{$srt->consumer_no}}</td>
                    <td>{{$srt->division}}</td>
                    <td>{{$srt->sub_divison}}</td>
                    <td>{{$srt->sanction}}</td>
                    <td>{{$srt->phase_inverter}}</td>
                    <td>{{$srt->category}}</td>
                    <td>{{$srt->provider}}</td>
                    <td>{{$srt->lat}}</td>
                    <td>{{$srt->long}}</td>
                    <td>{{$srt->consumer_email}}</td>
                    <td>{{$srt->consumer_mobile}}</td>
                    <td>{{$srt->installer_email}}</td>
                    <td>{{$srt->installer_mobile}}</td>
                    <td>{{$srt->name_prefix}}</td>
                    <td>{{$srt->first_name}}</td>
                    <td>{{$srt->middle_name}}</td>
                    <td>{{$srt->last_name}}</td>
                    <td>{{$srt->landline_no}}</td>
                    <td>{{$srt->street_house_no}}</td>
                    <td>{{$srt->taluka}}</td>
                    <td>{{$srt->district}}</td>
                    <td>{{$srt->city_village}}</td>
                    <td>{{$srt->state}}</td>
                    <td>{{$srt->pin}}</td>
                    <td>{{$srt->comm_address}}</td>
                    <td>{{$srt->passport_size_photo}}</td>
                    <td>{{$srt->premises_ownership}}</td>
                    <td>{{$srt->electricity_bill}}</td>
                    <td>{{$srt->aadhaar_no}}</td>
                    <td>{{$srt->solar_pv_owned_by_consumer}}</td>
                    <td>{{$srt->subsidy}}</td>
                    <td>{{$srt->otp_verified_on}}</td>
                    <td>{{$srt->signed_doc_upload_date}}</td>
                    <td>{{$srt->last_comment}}</td>
                    <td>{{$srt->last_comment_date}}</td>
                    <td>{{$srt->last_comment_replied_date}}</td>
                    <td>{{$srt->doc_verified_date}}</td>
                    <td>{{$srt->field_report_status_received}}</td>
                    <td>{{$srt->quotation_no}}</td>
                    <td>{{$srt->discom_estimate_amount}}</td>
                    <td>{{$srt->due_date}}</td>
                    <td>{{$srt->pay_received}}</td>
                    <td>{{$srt->pay_made_on}}</td>
                    <td>{{$srt->self_certify}}</td>
                    <td>{{$srt->cei_app_id}}</td>
                    <td>{{$srt->cei_approval_date}}</td>
                    <td>{{$srt->work_order_no}}</td>
                    <td>{{$srt->work_order_date}}</td>
                    <td>{{$srt->work_start_date}}</td>
                    <td>{{$srt->work_end_date}}</td>
                    <td>{{$srt->bi_meter_make}}</td>
                    <td>{{$srt->bi_meter_no}}</td>
                    <td>{{$srt->solar_meter_make}}</td>
                    <td>{{$srt->solar_meter_no}}</td>
                    <td>{{$srt->install_solar_meter_date}}</td>
                    <td>{{$srt->agreement_signing_date}}</td>
                    <td>{{$srt->project_estimated_cost}}</td>
                    <td>{{$srt->pcr_number}}</td>
                    <td>{{$srt->pcr_submit_date}}</td>
                    <td>{{$srt->created_by}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('edit-jammu-srt', ['id' => $srt->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('delete-jammu-srt', ['id' => $srt->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
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
                    <th>Application Status</th>
                    <th>Scheme</th>
                    <th>Application No.</th>
                    <th>Registeration No.</th>
                    <th>Installer Name</th>
                    <th>Installer Category</th>
                    <th>PV Capacity Band</th>
                    <th>Project Name</th>
                    <th>PV Capacity</th>
                    <th>Discom Name</th>
                    <th>Consumer No.</th>
                    <th>Division/Zone</th>
                    <th>Sub-division</th>
                    <th>Sanctioned / Contract Load</th>
                    <th>Phase of proposed Solar Inverter</th>
                    <th>Category</th>
                    <th>Who will provide the Net-Meter?</th>
                    <th>Lat</th>
                    <th>Long</th>
                    <th>Consumer Email</th>
                    <th>Consumer Mobile</th>
                    <th>Installer Email</th>
                    <th>Installer Mobile</th>
                    <th>Name Prefix</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Landline No.</th>
                    <th>Street/ House No.</th>
                    <th>Taluka</th>
                    <th>District</th>
                    <th>City/Village</th>
                    <th>State</th>
                    <th>Pin</th>
                    <th>Communication Address</th>
                    <th>Passport Size Photo</th>
                    <th>Whether the Premises is owned or Rented</th>
                    <th>Electricity Bill</th>
                    <th>Aadhaar No. Entered</th>
                    <th>Solar PV system Owned by the Consumer</th>
                    <th>Don't Want Subsidy</th>
                    <th>OTP Verified on</th>
                    <th>Signed Document Uploaded Date</th>
                    <th>Last Comment</th>
                    <th>Last Comment Date</th>
                    <th>Last Comment Replied Date</th>
                    <th>Document Verified Date</th>
                    <th>Field Report Status Received from DisCom on</th>
                    <th>Quotation No.</th>
                    <th>DisCom Estimate Amount</th>
                    <th>Due Date</th>
                    <th>Payment Received</th>
                    <th>Payment Made on</th>
                    <th>Self- Certification</th>
                    <th>CEI Drawing Application ID</th>
                    <th>CEI Drawing Application Approval Date</th>
                    <th>Work Order No.</th>
                    <th>Work Order Date</th>
                    <th>Work Start Date</th>
                    <th>Work End Date</th>
                    <th>Bi-directional Meter Make</th>
                    <th>Bi-directional Meter No.</th>
                    <th>Solar Meter Make</th>
                    <th>Solar Meter No.</th>
                    <th>Date of Installation of Solar Meter</th>
                    <th>Agreement Signing Date</th>
                    <th>Project Estimated Cost</th>
                    <th>PCR Number</th>
                    <th>PCR Submitted Date</th>
                    <th>Created BY</th>
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