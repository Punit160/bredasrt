@include('component.table-head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View UP SSL Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View UP SSL </li>
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
              <h3 class="card-title">View UP SSL Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto;">
            <thead>
                  <tr>
                    <th>Sr No</th>
                    <th style="text-wrap: nowrap;">Serial No.</th>
                    <th style="text-wrap: nowrap;">Financial Year</th>
                    <th style="text-wrap: nowrap;">State</th>
                    <th style="text-wrap: nowrap;">District</th>
                    <th style="text-wrap: nowrap;">Village</th>
                    <th style="text-wrap: nowrap;">Scheme</th>
                    <th style="text-wrap: nowrap;">UID</th>
                    <th style="text-wrap: nowrap;">Beneficiary Name</th>
                    <th style="text-wrap: nowrap;">Contact NO</th>
                    <th style="text-wrap: nowrap;">Installed Date</th>
                    <th style="text-wrap: nowrap;">Payment 85%</th>
                    <th style="text-wrap: nowrap;">AMC 1st Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 2nd Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 3rd Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 4th Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 5th Yr 3%</th>
                    <th style="text-wrap: nowrap;">Document</th>
                    <th style="text-wrap: nowrap;">Remarks</th>

                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($ssl as $ssls)
                  <tr>
                    <td>{{$number}}</td>
                    <td>{{ $ssls->s_no }}</td>
                    <td>{{ $ssls->fy }}</td>
                    <td>{{ $ssls->state }}</td>
                    <td>{{ $ssls->district }}</td>
                    <td>{{ $ssls->village }}</td>
                    <td>{{ $ssls->scheme }}</td>
                    <td>{{ $ssls->uid }}</td>
                    <td>{{ $ssls->beneficiary_name }}</td>
                    <td>{{ $ssls->contact }}</td>
                    <td>{{ $ssls->installed_date }}</td>
                    <td>{{ $ssls->payment_85 }}</td>
                    <td>{{ $ssls->amc1 }}</td>
                    <td>{{ $ssls->amc2 }}</td>
                    <td>{{ $ssls->amc3 }}</td>
                    <td>{{ $ssls->amc4 }}</td>
                    <td>{{ $ssls->amc5 }}</td>
                    <td class="file-container">
                      @if ($ssls->doc_submit)
                      @php
                      $filePath = asset('uploads/image/' .$ssls->doc_submit);
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
                    </td>                     <td>{{ $ssls->remarks }}</td>
                    <td>{{ $ssls->created_by }}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a target="_blank" class="dropdown-item" href="{{ route('edit-upssl', ['id' => $ssls->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                  <th>Sr No</th>
                    <th style="text-wrap: nowrap;">Serial No.</th>
                    <th style="text-wrap: nowrap;">Financial Year</th>
                    <th style="text-wrap: nowrap;">State</th>
                    <th style="text-wrap: nowrap;">District</th>
                    <th style="text-wrap: nowrap;">Village</th>
                    <th style="text-wrap: nowrap;">Scheme</th>
                    <th style="text-wrap: nowrap;">UID</th>
                    <th style="text-wrap: nowrap;">Beneficiary Name</th>
                    <th style="text-wrap: nowrap;">Contact NO</th>
                    <th style="text-wrap: nowrap;">Installed Date</th>
                    <th style="text-wrap: nowrap;">Payment 85%</th>
                    <th style="text-wrap: nowrap;">AMC 1st Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 2nd Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 3rd Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 4th Yr 3%</th>
                    <th style="text-wrap: nowrap;">AMC 5th Yr 3%</th>
                    <th style="text-wrap: nowrap;">Document</th>
                    <th style="text-wrap: nowrap;">Remarks</th>

                    <th>Created By</th>
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