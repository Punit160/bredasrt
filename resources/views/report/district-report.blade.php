@include('component.table-head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>District Wise Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">District Wise Report</li>
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
                <h3 class="card-title">District Wise Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x:auto">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>District</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($query as $queries)
                  <tr>
                    <th>{{$number}}</th>
                    <td>{{$queries->district}}</td>
                    <td>{{$queries->site_count}}</td>
                    <td>{{$queries->sanction_load}}</td>
                    <td>{{$queries->material_i_date}}</td>
                    <td>{{$queries->material_payment}}</td>
                    <td>{{$queries->installation_status}}</td>
                    <td>{{$queries->metering_status}}</td>
                    <td>{{$queries->rms_status}}</td>
                    <td>{{$queries->abc_format}}</td>
                    <td>{{$queries->geo_image_status}}</td>
                    <td>{{$queries->insurance}}</td>
                    <td>{{$queries->ic_bill_submit}}</td>
                    <td>{{$queries->bill_i_no}}</td>
                    <td>{{$queries->ic_payment}}</td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Sr. No.</th>
                    <th>District</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
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