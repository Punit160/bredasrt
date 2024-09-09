@include('component.table-head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.upksb-header')
@else
@include('component.jammu-header')
@endif

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
                        <th>Sr. no.</th>
                        <th>Complaint Date</th>
                        <th>District</th>
                        <th>Block</th>
                        <th>Village</th>
                        <th>Complaint Detail</th>
                        <th>Complaint BY</th>
                        <th>File</th>
                        <th>File Submission</th>
                        <th>Submission Date</th>
                        <th>Submit By</th>
                        <th>Verify</th>
                        <th>Verification Date</th>
                        <th>Verify Status</th>
                        <th>Verified By</th>
                        <th>Verification Detail</th>
                        @if($loginrole == '1' || $loginrole == '2')
                        <th>Final Approval</th>
                        @endif
                        <th>Final Approvel Date</th>
                        <th>Final Remarks</th>
                        <th>Final Approvel By</th>
                        <th> Final Closing Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                   @foreach($data as $Complaint)
                <tr>
                         <td>{{ $loop->iteration }}</td>
                        <td>{{$Complaint->complain_date}}</td>
                        <td>{{$Complaint->district}}</td>
                        <td>{{$Complaint->block}}</td>
                        <td>{{$Complaint->village}}</td>
                        <td>{{$Complaint->complaint}}</td>
                        <td>{{$Complaint->created_by}}</td>
                        <td class="file-container">
                          @if ($Complaint->image)
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
                        </td>
                        @if($Complaint->status == 0)

                        <td>
                          <a href="{{ route('close', ['id' => $Complaint->id]) }}">
                            <i class="fas fa-pencil" style="color:blue"></i>
                          </a>

                        </td>
                        @else

                        <td>
                          <span>Completed</span>

                        </td>

                        @endif
                        <td>{{$Complaint->resolve_date}}</td>
                        <td>{{$Complaint->resolved_by}}</td>
                        @if($Complaint->status == 0)
                        <td>
                          <a href="{{ route('approve', ['id' => $Complaint->id]) }}">
                            <i class="fas fa-pencil" style="color:blue"></i>
                          </a>
                        </td>
                        @else
                        <td> Accepted </td>
                        @endif
                        <td>{{$Complaint->c_approve_date}}</td>
                        <td>{{$Complaint->approve}}</td>
                        <td>{{$Complaint->approved_by}}</td>
                        <td>{{$Complaint->remarks}}</td>
                          @if($loginrole == '1' || $loginrole == '2')
                        @if($Complaint->final_status == 0)
                        <td>
                          <a href="{{ route('final-approve', ['id' => $Complaint->id]) }}">
                            <i class="fas fa-pencil" style="color:blue"></i>
                          </a>
                        </td>
                        @else
                        <td> Approved </td>
                        @endif
                        @endif
                        <td>{{$Complaint->final_date}}</td>
                        <td>{{$Complaint->final_remarks}}</td>
                        <td>{{$Complaint->final_approved_by}}</td>
                        @if($Complaint->final_status == 0)
                        <td>
                          <span>Open</span>
                        </td>
                        @else
                        <td>
                          <span style="color:red">Closed </span>
                        </td>
                        @endif  
                      </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                       <th>Sr. no.</th>
                        <th>Complaint Date</th>
                        <th>District</th>
                        <th>Block</th>
                        <th>Village</th>
                        <th>Complaint Detail</th>
                        <th>Complaint BY</th>
                        <th>File</th>
                        <th>File Submission</th>
                        <th>Submission Date</th>
                        <th>Submit By</th>
                        <th>Verify</th>
                        <th>Verification Date</th>
                        <th>Verify Status</th>
                        <th>Verified By</th>
                        <th>Verification Detail</th>
                        @if($loginrole == '1' || $loginrole == '2')
                        <th>Final Approval</th>
                        @endif
                        <th>Final Approvel Date</th>
                        <th>Final Remarks</th>
                        <th>Final Approvel By</th>
                        <th>Final Closing Status</th>
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
  