@include('component.table-head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor Wise Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vendor Wise Report</li>
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
                <h3 class="card-title">Vendor Wise Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x:auto">
                                      <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Vendor</th>
                                  <th>Total allocation</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                   <th>90 %Payment Done</th>
                                  <th>90% Payment Pending</th>
                                  <th>10 %Payment Done</th>
                                  <th>10% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($vendorwise as $vendorwises)
                                <tr>
                                  <th>{{ $number }}</th>
                                   <td>{{$vendorwises->c_contractor_name}}</td>
                                  <td>{{$vendorwises->allocate}}</td>
                                  <td>{{$vendorwises->material_supplied}}</td>
                                  <td>{{$vendorwises->not_supplied}}</td>
                                  <td>{{$vendorwises->total_installed}}</td>
                                  <td>{{$vendorwises->pending_installed}}</td>
                                  <td>{{$vendorwises->inspect_done}}</td>
                                  <td>{{$vendorwises->pending_inspection}}</td>
                                  <td>{{$vendorwises->pay90}}</td>
                                  <td>{{$vendorwises->notpay90}}</td>
                                  <td>{{$vendorwises->pay10}}</td>
                                  <td>{{$vendorwises->notpay10}}</td>
                                
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->allocate}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay90}}</th>
                                  <th>{{$query->notpay90}}</th>
                                  <th>{{$query->pay10}}</th>
                                  <th>{{$query->notpay10}}</th>
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