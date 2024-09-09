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
                        <th data-field="File" data-editable="true">File</th>
                        <th data-field="eng remarks" data-editable="true">Engineer Remarks</th>
                        <th data-field="file_sub" data-editable="true">Action</th>
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
                         <td>{{$Complaint->solved_remark}}</td>
                        @if($Complaint->status == 0)

                        <td>
                          <a href="{{ route('close-kusumb', ['id' => $Complaint->id]) }}">
                            <i class="fa fa-pencil-square-o" style="color:blue"></i>
                          </a>

                        </td>
                        @else
                        <td>
                          <span>Completed</span>
                        </td>
                        @endif
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
  