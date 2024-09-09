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
                <table id="example1" class="table table-bordered table-striped d-block d-md-table text-center"  style="overflow-x: scroll;"
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Site Details</th>
                    <th>Engineer Remarks</th>
                    <th>Final Remarks</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach($data as $Complaint)
                        <td>{{ $data->firstItem()+$loop->index}}</td>
                    <td>
                      <p><span style="font-weight: 600;">District:</span>  {{$Complaint->district}} </p>
                      <p><span style="font-weight: 600;">Block:</span> {{$Complaint->block}} </p>
                      <p><span style="font-weight: 600;">Village:</span> {{$Complaint->village}} </p>
                      <p><span style="font-weight: 600;">Complaint:</span>  {{$Complaint->complaint}} </p>
                    </td>
                    @php $engine = DB::table('ksbengineers')->where('id', $Complaint->engineer_assign)->first();  @endphp
                    <td>
                      <p><span style="font-weight: 600;">Engineer Name: {{$engine->engineer ??  '' }}</span> </p>
                      <p><span style="font-weight: 600;">Status: Completed</span> </p>
                      <p><span style="font-weight: 600;">Remarks:</span> {{$Complaint->solved_remark ??  '' }} </p>
                      <div>
                          @if($Complaint->image)
                          @php
                          $filePath = asset('uploads/image/' .$Complaint->image);
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
                      </div>
                    </td>
                    <td>
                      <p><span style="font-weight: 600;">Status:</span> @if($Complaint->final_status == 0)
                          <span>Open</span>
                        @else
                          <span style="color:red">Closed </span>
                        @endif   </p>
                      <p><span style="font-weight: 600;">Remarks:</span> {{$Complaint->final_remarks}} </p>
                    </td>
                    <td style="text-wrap: nowrap;">
                        <a href="{{ route('final-kusumb-approve', ['id' => $Complaint->id]) }}" class="btn btn-secondary" role="button" ><i class="fa-solid fa-pen-to-square"></i></a> &nbsp; 
                      <!--<a href="javascript:void(0)" class="btn btn-danger" role="button"><i class="fa-solid fa-trash-can" style="cursor:pointer;" role="button"></i></a>-->
                    </td>
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
  