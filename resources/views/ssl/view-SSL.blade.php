@include('component.table-head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View SSL Data</h1>
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
              <h3 class="card-title">View SSL Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>State</th>
                    <th>PROJECT NAME</th>
                    <th>LOI NO</th>
                    <th>DISTRICT</th>
                    <th>BILL SIGN DATE</th>
                    <th>WORK ORDER NO</th>
                    <th>INVOICE NO</th>
                    <th>INVOICE DATE</th>
                    <th>INVOICE QTY</th>
                    <th>TOTAL INSTALLED</th>
                    <th>JCR SUBMITTED</th>
                    <th>UNDER SDM VERIFICATION</th>
                    <th>SDM Submission Date</th>
                    <th>Not Submitted To SDM</th>
                    <th>Under Approved</th>
                    <th>Approved Date</th>
                    <th>PAYMENT STATUS</th>
                    <th>85% PAYMENT</th>
                    <th>SCHEME NAME</th>
                    <th>1ST YEAR AMC PAYMENT</th>
                    <th>2ND YEAR AMC PAYMENT</th>
                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($ssl as $ssls)
                  <tr>
                    <td>{{$number}}</td>
                    <td>{{ $ssls->state }}</td>
                    <td>{{ $ssls->project_name }}</td>
                    <td>{{ $ssls->loi_no }}</td>
                    <td>{{ $ssls->district }}</td>
                    <td>{{ $ssls->bill_sign_date }}</td>
                    <td>{{ $ssls->work_order_no }}</td>
                    <td>{{ $ssls->invoice_no }}</td>
                    <td>{{ $ssls->invoice_date }}</td>
                    <td>{{ $ssls->invoice_qty }}</td>
                    <td>{{ $ssls->total_installed }}</td>
                    <td>{{ $ssls->jcr_submitted }}</td>
                    <td>{{ $ssls->under_sdm_verification }}</td>
                    <td>{{ $ssls->sdm_submission_date }}</td>
                    <td>{{ $ssls->not_submitted_to_sdm }}</td>
                    <td>{{ $ssls->under_approved }}</td>
                    <td>{{ $ssls->approved_date }}</td>
                    <td>{{ $ssls->payment_status }}</td>
                    <td>{{ $ssls->pay_85 }}</td>
                    <td>{{ $ssls->scheme_name }}</td>
                    <td>{{ $ssls->first_year_amc_payment }}</td>
                    <td>{{ $ssls->second_year_amc_payment }}</td>
                    <td>{{$ssls->created_by}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" target="_blank" href="{{ route('edit-ssl', ['id' => $ssls->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                  <th>Sr No</th>
                    <th>State</th>
                    <th>PROJECT NAME</th>
                    <th>LOI NO</th>
                    <th>DISTRICT</th>
                    <th>BILL SIGN DATE</th>
                    <th>WORK ORDER NO</th>
                    <th>INVOICE NO</th>
                    <th>INVOICE DATE</th>
                    <th>INVOICE QTY</th>
                    <th>TOTAL INSTALLED</th>
                    <th>JCR SUBMITTED</th>
                    <th>UNDER SDM VERIFICATION</th>
                    <th>SDM Submission Date</th>
                    <th>Not Submitted To SDM</th>
                    <th>Under Approved</th>
                    <th>Approved Date</th>
                    <th>PAYMENT STATUS</th>
                    <th>85% PAYMENT</th>
                    <th>SCHEME NAME</th>
                    <th>1ST YEAR AMC PAYMENT</th>
                    <th>2ND YEAR AMC PAYMENT</th>
                    <th>Created By</th>
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