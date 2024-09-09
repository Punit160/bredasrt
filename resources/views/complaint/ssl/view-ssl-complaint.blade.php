@include('component.table-head')
@include('component.header')
<style>
  table p {
    margin-bottom: 0;
  }
</style>

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
          <h1>View Bihar Complaints</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Bihar SSL Complaints</li>
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
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                  <table id="example1" class="table table-bordered table-striped text-center" style="overflow-x: auto;display:block;">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Complaint ID</th>
                        <th>Complaint Date</th>
                        <th>Complaint Date</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Block</th>
                        <th>Panchyat</th>
                        <th>Ward No</th>
                        <th>Pole No</th>
                        <th>Beneficiary Name</th>
                        <th>Contact No</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Along with Pole</th>
                        <th>Luminary No</th>
                        <th>SIM No</th>
                        <th>Battery Serial No</th>
                        <th>Module No</th>
                        <th>Date of Installation</th>
                        <th>Document</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1; ?>
                      @foreach($open as $complaint)
                      <tr>
                        <td>{{ $number }}</td>
                        <td>{{ $complaint->complaint_id }}</td>
                        <td>{{ $complaint->start_date }}</td>
                        <td>{{ $complaint->complaint }}</td>
                        <td>{{ $complaint->state }}</td>
                        <td>{{ $complaint->district }}</td>
                        <td>{{ $complaint->block }}</td>
                        <td>{{ $complaint->panchyat }}</td>
                        <td>{{ $complaint->ward_no }}</td>
                        <td>{{ $complaint->pole_no }}</td>
                        <td>{{ $complaint->beneficiary_name }}</td>
                        <td>{{ $complaint->contact_no }}</td>
                        <td>{{ $complaint->latitude }}</td>
                        <td>{{ $complaint->longitude }}</td>
                        <td>{{ $complaint->along_with_pole }}</td>
                        <td>{{ $complaint->luminary_no }}</td>
                        <td>{{ $complaint->sim_no }}</td>
                        <td>{{ $complaint->battery_serial_no }}</td>
                        <td>{{ $complaint->module_no }}</td>
                        <td>{{ $complaint->date_of_installation }}</td>
                        <td>
                        @if ($complaint->file)
                          @php
                          $filePath = asset('uploads/image/' .$complaint->file);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                              <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                            </a></p>
                          @else
                          <a href="{{ $filePath }}" download>
                            <i class="fas fa-download"></i> {{($extension) }}
                          </a>
                          @endif
                          @else
                          <p>No file available</p>
                          @endif
                          </td>
                        <td>
                          <a href="{{ route('edit-ssl-complaint', ['id' => $complaint->id]) }}">
                            <i class="fas fa-pencil" style="color:blue"></i>
                          </a>
                        </td>
                      </tr>
                      <?php $number++; ?>
                      @endforeach

                      </tfoot>
                  </table>

                </div>
                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                  <table id="example3" class="table table-bordered table-striped" style="overflow-x: auto; ">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Complaint Details</th>
                        <th>Complaint Closing Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1; ?>
                      @foreach($data as $complaint)
                      <tr>

                        <td>{{ $number }}</td>
                        <td>
                          <p><span style="font-weight:bold">Complaint Id</span>&nbsp - &nbsp {{ $complaint->complaint_id }}</p>
                          <p><span style="font-weight:bold">Complaint  Date</span>&nbsp - &nbsp {{ $complaint->start_date }}</p>
                          <p><span style="font-weight:bold">State</span>&nbsp - &nbsp {{ $complaint->state }}</p>
                          <p><span style="font-weight:bold">District</span>&nbsp - &nbsp {{ $complaint->district }}</span><span style="font-weight:bold">&nbsp  &nbsp Block</span>&nbsp - &nbsp {{ $complaint->block }}</p>
                          <p><span style="font-weight:bold">Panchyat</span>&nbsp - &nbsp {{ $complaint->panchyat }}</span><span style="font-weight:bold">&nbsp  &nbsp Ward No</span>&nbsp - &nbsp {{ $complaint->ward_no }}</span></p>
                          <p><span style="font-weight:bold">Name</span>&nbsp - &nbsp {{ $complaint->beneficiary_name }}/{{$complaint->contact_no }}</span></p>
                          <p><span style="font-weight:bold">Pole No </span>&nbsp - &nbsp {{ $complaint->pole_no }}</span>&nbsp  &nbsp <span style="font-weight:bold">Luminary No </span>&nbsp - &nbsp {{ $complaint->luminary_no }}</span></p>
                          @if ($complaint->file)
                          @php
                          $filePath = asset('uploads/image/' .$complaint->file);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                              <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                            </a></p>
                          @else
                          <a href="{{ $filePath }}" download>
                            <i class="fas fa-download"></i> {{($extension) }}
                          </a>
                          @endif
                          @else
                          <p>No file available</p>
                          @endif
                        </td>
                         <td class="">
                          <p><span style="font-weight:bold">Closing Date</span>&nbsp - &nbsp {{ $complaint->close_date }}</p>
                          <p><span style="font-weight:bold">Complaint</span>&nbsp - &nbsp {{ $complaint->complaint }}</p>
                          <p><span style="font-weight:bold">Resolved By</span>&nbsp - &nbsp {{ $complaint->resolved_by }}</p>
                          <p><span style="font-weight:bold"> Resolver Mobile No</span>- &nbsp - &nbsp{{ $complaint->r_mobile }}/{{ $complaint->r_email }}</p>
                          @if ($complaint->r_file)
                          @php
                          $filePath = asset('uploads/image/' .$complaint->r_file);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <p><span style="font-weight:bold"> File</span>&nbsp-&nbsp<a href="{{ $filePath }}" target="_blank" alt=" file">
                              <img src="{{ $filePath }}" alt=" Image" class="hidden-image" style="width: 100px; height: 50px;">
                            </a></p>
                          @else
                          <a href="{{ $filePath }}" download>
                            <i class="fas fa-download"></i> {{($extension) }}
                          </a>
                          @endif
                          @else
                          <p>No file available</p>
                          @endif
                        </td>
                      </tr>
                      <?php $number++; ?>
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