@include('component.table-head')
@include('component.jammu-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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

  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card  card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Open</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Closed</a>
                </li>


              </ul>
            </div>
            <div class="card-body m-0 p-0">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                  <table id="example1" class="table table-bordered table-striped text-center" style="overflow-x: auto;display:block;">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Complaint ID</th>
                        <th>Customer Number</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>District</th>
                        <th>Village</th>
                        <th>Tehsil</th>
                        <th>Post</th>
                        <th>Pin</th>
                        <th>Pump Type</th>
                        <th>Pump Capacity</th>
                        <th>Pump Subtype</th>
                        <th>Complaint</th>
                        <th>Start Date</th>
                        <th>Created By</th>
                        <td>Edit</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1; ?>
                      @foreach($open as $complaint)
                      <tr>
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                        <td>{{ $complaint->complaint_id }}</td>
                        <td>{{ $complaint->customer_no }}</td>
                        <td>{{ $complaint->name }}</td>
                        <td>{{ $complaint->father_name }}</td>
                        <td>{{ $complaint->email }}</td>
                        <td>{{ $complaint->mobile }}</td>
                        <td>{{ $complaint->district }}</td>
                        <td>{{ $complaint->village }}</td>
                        <td>{{ $complaint->tehsil }}</td>
                        <td>{{ $complaint->post }}</td>
                        <td>{{ $complaint->pin }}</td>
                        <td>{{ $complaint->pump_type }}</td>
                        <td>{{ $complaint->pump_capacity }}</td>
                        <td>{{ $complaint->pump_subtype }}</td>
                        <td>{{ $complaint->complaint }}</td>
                        <td>{{ $complaint->start_date }}</td>
                        <td>{{ $complaint->created_by }}</td>
                        <td>
                          <a href="{{ route('edit-swp', ['id' => $complaint->id]) }}">
                            <i class="fas fa-pencil" style="color:blue"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach

                      </tfoot>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                  <table id="example3" class="table table-bordered table-striped text-center" style="overflow-x: auto; display:block;">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Complaint ID</th>
                        <th>Customer Number</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>District</th>
                        <th>Village</th>
                        <th>Tehsil</th>
                        <th>Post</th>
                        <th>Pin</th>
                        <th>Pump Type</th>
                        <th>Pump Capacity</th>
                        <th>Pump Subtype</th>
                        <th>Complaint</th>
                        <th>Start Date</th>
                        <th>Close Date</th>
                        <th>Resolved By</th>
                        <th>Resolving Mobile</th>
                        <th>Resolving Email</th>
                        <th>File</th>
                        <th>Created By</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1; ?>
                      @foreach($data as $complaint)
                      <tr>
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                        <td>{{ $complaint->complaint_id }}</td>
                        <td>{{ $complaint->customer_no }}</td>
                        <td>{{ $complaint->name }}</td>
                        <td>{{ $complaint->father_name }}</td>
                        <td>{{ $complaint->email }}</td>
                        <td>{{ $complaint->mobile }}</td>
                        <td>{{ $complaint->district }}</td>
                        <td>{{ $complaint->village }}</td>
                        <td>{{ $complaint->tehsil }}</td>
                        <td>{{ $complaint->post }}</td>
                        <td>{{ $complaint->pin }}</td>
                        <td>{{ $complaint->pump_type }}</td>
                        <td>{{ $complaint->pump_capacity }}</td>
                        <td>{{ $complaint->pump_subtype }}</td>
                        <td>{{ $complaint->complaint }}</td>
                        <td>{{ $complaint->start_date }}</td>
                        <td>{{ $complaint->close_date }}</td>
                        <td>{{ $complaint->resolved_by }}</td>
                        <td>{{ $complaint->r_mobile }}</td>
                        <td>{{ $complaint->r_email }}</td>
                        <td class="file-container">
                          @if ($complaint->file)
                          @php
                          $filePath = asset('uploads/image/' .$complaint->file);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <a href="{{ $filePath }}" target="_blank" alt=" file">
                            <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: auto;">
                          </a>

                          @else
                          <a href="{{ $filePath }}" download>
                            <i class="fas fa-download"></i> {{($extension) }}
                          </a>
                          @endif

                          @else
                          <p>No file available</p>
                          @endif
                        </td>
                        <td>{{ $complaint->created_by }}</td>
                        <td>Closed</td>

                      </tr>
                      @endforeach

                      </tfoot>
                  </table>
                </div>

              </div>
            </div>
            <!-- /.card -->
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
