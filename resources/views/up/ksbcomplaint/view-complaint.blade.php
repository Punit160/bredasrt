@include('component.table-head')
@include('component.upksb-header')
<!-- / Navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Complaints</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Complaints</li>
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
                <h3 class="card-title">View Complaints</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;"
                  <thead>
                  <tr>
                        <th data-field="S.NO">Sr. no.</th>
                        <th data-field="complaindate" data-editable="true">Complaint Date</th>
                        <th data-field="District" data-editable="true">District</th>
                        <th data-field="Block" data-editable="true">Block</th>
                        <th data-field="Village" data-editable="true">Village</th>
                        <th data-field="Complaint" data-editable="true">Complaint Detail</th>
                        <th data-field="Complaint BY" data-editable="true">Complaint BY</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach($data as $Complaint)
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                        <td>{{$Complaint->complain_date}}</td>
                        <td>{{$Complaint->district}}</td>
                        <td>{{$Complaint->block}}</td>
                        <td>{{$Complaint->village}}</td>
                        <td>{{$Complaint->complaint}}</td>
                        <td>{{$Complaint->created_by}}</td>
                      </tr>
                      @endforeach
                   </tbody>
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
  