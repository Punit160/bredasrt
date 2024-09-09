@include('component.table-head')
@include('component.head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.upksb-header')
@else
@include('component.jammu-header')
@endif
<style>

  table p{
    margin-bottom:0;
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
          <h1>View  {{ strtoupper($state) }} SWP Complaints</h1>
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
            <div class="card-body">
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
                        <td>{{ $number }}</td>
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
                        <p><span style="font-weight:bold"> Complaint Id</span>&nbsp - &nbsp {{ $complaint->complaint_id }}</p>
                            <p><span style="font-weight:bold">Customer No</span>&nbsp - &nbsp {{ $complaint->customer_no }}</p>
                            <p><span style="font-weight:bold">Start Date</span>&nbsp - &nbsp {{ $complaint->start_date }}</p>
                            <p><span style="font-weight:bold">Name</span>&nbsp - &nbsp {{ $complaint->name }}</p>
                            <p><span style="font-weight:bold">Father Name</span>&nbsp - &nbsp {{ $complaint->father_name }}</p>
                            <p><span style="font-weight:bold">Email</span>&nbsp - &nbsp {{ $complaint->email }}/<span style="font-weight:bold">Mobile</span>&nbsp - &nbsp {{ $complaint->mobile }}</p>
                            <!-- <p><span style="font-weight:bold">Mobile</span>&nbsp - &nbsp {{ $complaint->mobile }}</p> -->
                            <p><span style="font-weight:bold">District</span>&nbsp - &nbsp {{ $complaint->district }}/<span style="font-weight:bold">Village</span>&nbsp - &nbsp {{ $complaint->village }}</p>
                            <!-- <p><span style="font-weight:bold">Village</span>&nbsp - &nbsp {{ $complaint->village }}</p> -->
                            <p><span style="font-weight:bold">Tehsil</span>&nbsp - &nbsp {{ $complaint->tehsil }}/<span style="font-weight:bold">Post</span>&nbsp - &nbsp {{ $complaint->post }}/<span style="font-weight:bold">Pin</span>&nbsp - &nbsp {{ $complaint->pin }}</p>
                            <!-- <p><span style="font-weight:bold">Post</span>&nbsp - &nbsp {{ $complaint->post }}</p>
                            <p><span style="font-weight:bold">Pin</span>&nbsp - &nbsp {{ $complaint->pin }}</p> -->



                        </td>
                        <td class="">                         
                             <p><span style="font-weight:bold">Closing Date</span>&nbsp - &nbsp {{ $complaint->close_date }}</p>

                        <p class=" "><span style="font-weight:bold">Pump Type</span>&nbsp - &nbsp{{ $complaint->pump_capacity }}Kw {{ $complaint->pump_type }} {{ $complaint->pump_subtype }}</p>
                            <!-- <p ><span style="font-weight:bold">Pump Capacity</span>&nbsp - &nbsp {{ $complaint->pump_capacity }}Kw</p>
                            <p><span style="font-weight:bold">Pump SubType</span>&nbsp - &nbsp {{ $complaint->pump_subtype }}</p> -->
                            <p><span style="font-weight:bold">Complaint</span>&nbsp - &nbsp {{ $complaint->complaint }}</p>
                            <!-- <p><span style="font-weight:bold">Closing Date</span>&nbsp - &nbsp {{ $complaint->close_date }}</p> -->
                            <p><span style="font-weight:bold">Resolved By</span>&nbsp - &nbsp {{ $complaint->resolved_by }}</p>
                            <p><span style="font-weight:bold"> Resolver Mobile No</span>- &nbsp - &nbsp{{ $complaint->r_mobile }}/{{ $complaint->r_email }}</p>
                            <!-- <p><span style="font-weight:bold">Resolver Email</span>&nbsp - &nbsp {{ $complaint->r_email }}</p> -->
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