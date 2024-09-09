@include('component.table-head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View SRT Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View SRT Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!--<section class="col-12">-->
            <!-- Custom tabs (Charts with tabs)-->
<!--            <div class="card bg-transparent">-->
<!--              <form action="#">-->
<!--                <div class="row p-3 ">-->
<!--                  <div class="col-12 col-sm form-group">-->
<!--                    <label for="power">Power 1</label>-->
<!--                    <select name="power" id="power" class="form-control">-->
<!--                      <option value="dis" selected disabled>--- Please Select ---</option>-->
<!--                    </select>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-sm form-group">-->
<!--                    <label for="power">Power 2</label>-->
<!--                    <select name="power" id="power" class="form-control">-->
<!--                      <option value="dis" selected disabled>--- Please Select ---</option>-->
<!--                    </select>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-sm form-group">-->
<!--                    <label for="power">Power 3</label>-->
<!--                    <select name="power" id="power" class="form-control">-->
<!--                      <option value="dis" selected disabled>--- Please Select ---</option>-->
<!--                    </select>-->
<!--                  </div>-->
<!--                  <div class="col-12 col-sm-2">-->
<!--                    <label for="btn">&nbsp;</label>-->
<!--                    <button class="btn btn-primary w-100">Submit</button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </form>-->
<!--            </div>-->
            <!-- /.card -->
<!--          </section>-->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View SRT Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x:scroll">
                  <thead>
                  <tr>
                   <th>Sr. No.</th>
                    <th>Discom</th>
                    <th>District</th>
                    <th>Dept Name</th>
                    <th>Site Name</th>
                    <th>Location</th>
                    <th>Firm Name</th>
                    <th>CA No</th>
                    <th>Sanction Load</th>
                    <th>Plant SC</th>
                    <th>WO No</th>
                    <th>Phase</th>
                    <th>Vendor</th>
                    <th>Date</th>
                    <th>Material I Date</th>
                    <th>MB Invoice</th>
                    <th>Material Payment</th>
                    <th>Installation Status</th>
                    <th>Inst Remarks</th>
                    <th>IC Bill Submit</th>
                    <th>Bill I No</th>
                    <th>IC Payment</th>
                    <th>IC Date</th>
                    <th>Net Meter Submit Date</th>
                    <th>Metering Status</th>
                    <th>Smart Meter</th>
                    <th>Convert NM</th>
                    <th>NM Required</th>
                    <th>NM Install</th>
                    <th>Test Slip</th>
                    <th>TS Image</th>
                    <th>Fix Slip</th>
                    <th>FS Image</th>
                    <th>Meter I Date</th>
                    <th>RMS URL</th>
                    <th>RMS Status</th>
                    <th>Geo Image Status</th>
                    <th>ABC Format</th>
                    <th>Comm Report</th>
                    <th>IV Curv</th>
                    <th>Inspect Image</th>
                    <th>Insurance</th>
                    <th>WMS</th>
                    <th>WMS Login</th>
                    <th>Final I DT</th>
                    <th>Agency Remarks</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($srts as $srt)
                  <tr class="gradeX">
                           <th>{{$number}}</th>
                    <td style="white-space: nowrap;" >{{$srt->discom}}</td>
                    <td style="white-space: nowrap;" >{{$srt->district}}</td>
                    <td style="white-space: nowrap;" >{{$srt->dept_name}}</td>
                    <td style="white-space: nowrap;" >{{$srt->site_name}}</td>
                    <td style="white-space: nowrap;" >{{$srt->location}}</td>
                    <td style="white-space: nowrap;" >{{$srt->firm_name}}</td>
                    <td style="white-space: nowrap;" >{{$srt->ca_no}}</td>
                    <td style="white-space: nowrap;" >{{$srt->sanction_load}}</td>
                    <td style="white-space: nowrap;" >{{$srt->plant_sc}}</td>
                    <td style="white-space: nowrap;" >{{$srt->wo_no}}</td>
                    <td style="white-space: nowrap;" >{{$srt->phase}}</td>
                    <td style="white-space: nowrap;" >{{$srt->vendor}}</td>
                    <td style="white-space: nowrap;" >{{$srt->date}}</td>
                    <td style="white-space: nowrap;" >{{$srt->material_i_date}}</td>
                    <td style="white-space: nowrap;" >{{$srt->mb_invoice}}</td>
                    <td style="white-space: nowrap;" >{{$srt->material_payment}}</td>
                    <td style="white-space: nowrap;" >{{$srt->installation_status}}</td>
                    <td style="white-space: nowrap;" >{{$srt->inst_remarks}}</td>
                    <td style="white-space: nowrap;" >{{$srt->ic_bill_submit}}</td>
                    <td style="white-space: nowrap;" >{{$srt->bill_i_no}}</td>
                    <td style="white-space: nowrap;" >{{$srt->ic_payment}}</td>
                    <td style="white-space: nowrap;" >{{$srt->ic_date}}</td>
                    <td style="white-space: nowrap;" >{{$srt->net_meter_submit_date}}</td>
                    <td style="white-space: nowrap;" >{{$srt->metering_status}}</td>
                    <td style="white-space: nowrap;" >{{$srt->smart_meter}}</td>
                    <td style="white-space: nowrap;" >{{$srt->convert_nm}}</td>
                    <td style="white-space: nowrap;" >{{$srt->nm_required}}</td>
                    <td style="white-space: nowrap;" >{{$srt->nm_install}}</td>
                    <td style="white-space: nowrap;" >{{$srt->test_slip}}</td>
                    <td style="white-space: nowrap;" >{{$srt->ts_image}}</td>
                    <td style="white-space: nowrap;" >{{$srt->fix_slip}}</td>
                    <td style="white-space: nowrap;" >{{$srt->fs_image}}</td>
                    <td style="white-space: nowrap;" >{{$srt->meter_i_date}}</td>
                    <td style="white-space: nowrap;" >{{$srt->rms_url}}</td>
                    <td style="white-space: nowrap;" >{{$srt->rms_status}}</td>
                    <td style="white-space: nowrap;" >{{$srt->geo_image_status}}</td>
                    
                    <td style="white-space: nowrap;" >{{$srt->abc_format}}</td>
                    <td style="white-space: nowrap;" >{{$srt->comm_report}}</td>
                    <td style="white-space: nowrap;" >{{$srt->iv_curv}}</td>
                    <td style="white-space: nowrap;" >{{$srt->inspect_image}}</td>
                    <td style="white-space: nowrap;" >{{$srt->insurance}}</td>
                    <td style="white-space: nowrap;" >{{$srt->wms}}</td>
                    <td style="white-space: nowrap;" >{{$srt->wms_login}}</td>
                    <td style="white-space: nowrap;" >{{$srt->final_i_dt}}</td>
                    <td style="white-space: nowrap;" >{{$srt->agency_remarks}}</td>
                  <td style="white-space: nowrap;" >
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="{{asset('update-srtdata/'. $srt->id)}}">Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{asset('view-srt/'. $srt->id)}}">View</a>
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
                    <th>Discom</th>
                    <th>District</th>
                    <th>Dept Name</th>
                    <th>Site Name</th>
                    <th>Location</th>
                    <th>Firm Name</th>
                    <th>CA No</th>
                    <th>Sanction Load</th>
                    <th>Plant SC</th>
                    <th>WO No</th>
                    <th>Phase</th>
                    <th>Vendor</th>
                    <th>Date</th>
                    <th>Material I Date</th>
                    <th>MB Invoice</th>
                    <th>Material Payment</th>
                    <th>Installation Status</th>
                    <th>Inst Remarks</th>
                    <th>IC Bill Submit</th>
                    <th>Bill I No</th>
                    <th>IC Payment</th>
                    <th>IC Date</th>
                    <th>Net Meter Submit Date</th>
                    <th>Metering Status</th>
                    <th>Smart Meter</th>
                    <th>Convert NM</th>
                    <th>NM Required</th>
                    <th>NM Install</th>
                    <th>Test Slip</th>
                    <th>TS Image</th>
                    <th>Fix Slip</th>
                    <th>FS Image</th>
                    <th>Meter I Date</th>
                    <th>RMS URL</th>
                    <th>RMS Status</th>
                    <th>Geo Image Status</th>
                    <th>ABC Format</th>
                    <th>Comm Report</th>
                    <th>IV Curv</th>
                    <th>Inspect Image</th>
                    <th>Insurance</th>
                    <th>WMS</th>
                    <th>WMS Login</th>
                    <th>Final I DT</th>
                    <th>Agency Remarks</th>
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