@include('component.table-head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Phase Wise Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Phase Wise Report</li>
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
                <h3 class="card-title">Phase Wise Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x:auto">
                            <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>District</th>
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
                                <tr>
                                  @foreach($phasewise as $phasewises)
                                <tr>
                                  <th>{{ $number }}</th>
                                   <td>{{$phasewises->monitering}}</td>
                                   <td>{{$phasewises->allocate}}</td>
                                  <td>{{$phasewises->material_supplied}}</td>
                                  <td>{{$phasewises->not_supplied}}</td>
                                  <td>{{$phasewises->total_installed}}</td>
                                  <td>{{$phasewises->pending_installed}}</td>
                                  <td>{{$phasewises->inspect_done}}</td>
                                  <td>{{$phasewises->pending_inspection}}</td>
                                  <td>{{$phasewises->pay90}}</td>
                                  <td>{{$phasewises->notpay90}}</td>
                                  <td>{{$phasewises->pay10}}</td>
                                  <td>{{$phasewises->notpay10}}</td>
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                                </tr>
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