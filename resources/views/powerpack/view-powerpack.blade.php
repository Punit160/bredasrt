@include('component.table-head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Power Pack</li>
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
              <h3 class="card-title">View Power Pack Details</h3>
            </div>
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped d-block" style="overflow-y: auto;">
                <thead>
                  <tr>

                  <th style="text-wrap: nowrap;">S.NO</th>
                    <th style="text-wrap: nowrap;">State</th>
                    <th style="text-wrap: nowrap;">Empanelled Agency</th>
                    <th style="text-wrap: nowrap;">Beneficiary Name</th>
                    <th style="text-wrap: nowrap;">Beneficiary Contact</th>
                    <th style="text-wrap: nowrap;">Beneficiary Gender</th>
                    <th style="text-wrap: nowrap;">Latitude</th>
                    <th style="text-wrap: nowrap;">Longitude</th>
                    <th style="text-wrap: nowrap;">District</th>
                    <th style="text-wrap: nowrap;">Beneficiary Address</th>
                    <th style="text-wrap: nowrap;">Contractor Name</th>
                    <th style="text-wrap: nowrap;">Material Dispatch</th>
                    <th style="text-wrap: nowrap;">Material Dispatch Date</th>
                    <th style="text-wrap: nowrap;">Installation Status</th>
                    <th style="text-wrap: nowrap;">Date Of Installation</th>
                    <th style="text-wrap: nowrap;">Site Inspection Status</th>
                    <th style="text-wrap: nowrap;">Date of Site Inspection</th>
                    <th style="text-wrap: nowrap;">Payment (85%)</th>
                    <th style="text-wrap: nowrap;">Payment (85%) Date</th>
                    <th style="text-wrap: nowrap;">AMC 1</th>
                    <th style="text-wrap: nowrap;">AMC 2</th>
                    <th style="text-wrap: nowrap;">AMC 3</th>
                    <th style="text-wrap: nowrap;">AMC 4</th>
                    <th style="text-wrap: nowrap;">AMC 5</th>
                    <th style="text-wrap: nowrap;">AMC 1 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 2 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 3 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 4 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 5 Docment</th>
                    <th style="text-wrap: nowrap;">Remarks</th>
                    <th style="text-wrap: nowrap;">Created By</th>
                    <th style="text-wrap: nowrap;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($power as $powers)
                  <tr><td>{{$number}}</td>
                    <td>{{ $powers->state }}</td>
                    <td>{{ $powers->empanelled_agency }}</td>
                    <td>{{ $powers->beneficiary_name }}</td>
                    <td>{{ $powers->beneficiary_contact }}</td>
                    <td>{{ $powers->beneficiary_gender }}</td>
                    <td>{{ $powers->latitude }}</td>
                    <td>{{ $powers->longitude }}</td>
                    <td>{{ $powers->district }}</td>
                    <td>{{ $powers->beneficiary_address }}</td>
                    <td>{{ $powers->contractor_name }}</td>
                    <td>{{ $powers->material_dispatch }}</td>
                    <td>{{ $powers->material_dispatch_date }}</td>
                    <td>{{ $powers->installation_status }}</td>
                    <td>{{ $powers->installation_date }}</td>
                    <td>{{ $powers->inspection_status }}</td>
                    <td>{{ $powers->inspection_status_date }}</td>
                    <td>{{ $powers->payment_85 }}</td>
                    <td>{{ $powers->payment_date}}</td>
                    <td>{{ $powers->amc1}}</td>
                    <td>{{ $powers->amc2}}</td>
                    <td>{{ $powers->amc3}}</td>
                    <td>{{ $powers->amc4}}</td>
                    <td>{{ $powers->amc5}}</td>
                    <td class="file-container">
                      @if ($powers->amc_1_doc)
                      @php
                      $filePath = asset('uploads/image/' .$powers->amc_1_doc);
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
                    <td class="file-container">
                      @if ($powers->amc_2_doc)
                      @php
                      $filePath = asset('uploads/image/' .$powers->amc_2_doc);
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
                    </td> <td class="file-container">
                      @if ($powers->amc_3_doc)
                      @php
                      $filePath = asset('uploads/image/' .$powers->amc_3_doc);
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
                     <td class="file-container">
                      @if ($powers->amc_4_doc)
                      @php
                      $filePath = asset('uploads/image/' .$powers->amc_4_doc);
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
                    <td class="file-container">
                      @if ($powers->amc_5_doc)
                      @php
                      $filePath = asset('uploads/image/' .$powers->amc_5_doc);
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
                    <td>{{ $powers->remarks }}</td>
                    <td>{{ $powers->created_by }}</td>
                    <td style="text-wrap: nowrap;"><a class="dropdown-item" href="{{ route('edit-power', ['id' => $powers->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                    </td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>

                    <th style="text-wrap: nowrap;">S.NO</th>
                    <th style="text-wrap: nowrap;">State</th>
                    <th style="text-wrap: nowrap;">Empanelled Agency</th>
                    <th style="text-wrap: nowrap;">Beneficiary Name</th>
                    <th style="text-wrap: nowrap;">Beneficiary Contact</th>
                    <th style="text-wrap: nowrap;">Beneficiary Gender</th>
                    <th style="text-wrap: nowrap;">Latitude</th>
                    <th style="text-wrap: nowrap;">Longitude</th>
                    <th style="text-wrap: nowrap;">District</th>
                    <th style="text-wrap: nowrap;">Beneficiary Address</th>
                    <th style="text-wrap: nowrap;">Contractor Name</th>
                    <th style="text-wrap: nowrap;">Material Dispatch</th>
                    <th style="text-wrap: nowrap;">Material Dispatch Date</th>
                    <th style="text-wrap: nowrap;">Installation Status</th>
                    <th style="text-wrap: nowrap;">Date Of Installation</th>
                    <th style="text-wrap: nowrap;">Site Inspection Status</th>
                    <th style="text-wrap: nowrap;">Date of Site Inspection</th>
                    <th style="text-wrap: nowrap;">Payment (85%)</th>
                    <th style="text-wrap: nowrap;">Payment (85%) Date</th>
                    <th style="text-wrap: nowrap;">AMC 1</th>
                    <th style="text-wrap: nowrap;">AMC 2</th>
                    <th style="text-wrap: nowrap;">AMC 3</th>
                    <th style="text-wrap: nowrap;">AMC 4</th>
                    <th style="text-wrap: nowrap;">AMC 5</th>
                    <th style="text-wrap: nowrap;">AMC 1 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 2 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 3 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 4 Docment</th>
                    <th style="text-wrap: nowrap;">AMC 5 Docment</th>
                    <th style="text-wrap: nowrap;">Remarks</th>
                    <th style="text-wrap: nowrap;">Created By</th>
                    <th style="text-wrap: nowrap;">Action</th>
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