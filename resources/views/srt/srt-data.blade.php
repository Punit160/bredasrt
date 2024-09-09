@include('component.table-head')
@include('component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SRT Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SRT Data</li>
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
                <h3 class="card-title">SRT Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Sr. No.</th>
                    <th>Phase</th>
                    <th>Discom</th>
                    <th>District</th>
                    <th>Vendor</th>
                    <th>Site Name</th>
                    <th>CA No.</th>
                    <th>Sanction Load</th>
                    <th>Work Order No.</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($srts as $srt)
                  <tr class="gradeX">
                    <th>{{$number}}</th>
                    <td>{{$srt->phase}}</td>
                     <td>{{$srt->discom}}</td>
                    <td>{{$srt->district}}</td>
                    <td>{{$srt->vendor}}</td>
                    <td>{{$srt->site_name}}</td>
                    <td>{{$srt->ca_no}}</td>
                    <td>{{$srt->sanction_load}}</td>
                    <td>{{$srt->wo_no}}</td>
                  <td>
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
                    <th>Phase</th>
                    <th>Discom</th>
                    <th>District</th>
                    <th>Vendor</th>
                    <th>Site Name</th>
                    <th>CA No.</th>
                    <th>PLANT SPP Capacity</th>
                    <th>Work Order No.</th>
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