@include('component.table-head')
@include('component.header')

<style>
    .pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination {
    list-style: none;
    display: flex;
    padding-left: 0;
    border-radius: 0.25rem;
}

.page-item {
    margin: 0 5px;
}

.page-link {
    display: block;
    padding: 8px 12px;
    color: #007bff;
    text-decoration: none;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    background-color: #fff;
}

.page-link:hover {
    background-color: #e9ecef;
    border-color: #dee2e6;
    text-decoration: none;
}

.page-item.active .page-link {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}

<?php if($ssl instanceof \Illuminate\Pagination\LengthAwarePaginator){ ?>

div#example1_paginate {
    display: none !important;
 }
 
 <?php } ?>
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Bihar SSL Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View  Bihar SSL Data</li>
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
              <h3 class="card-title">View Bihar SSL Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>State</th>
                    <th>Work Order No</th>
                    <th>Phase</th>
                    <th>District</th>
                    <th>Block</th>
                    <th>Panchyat</th>
                    <th>Ward No.</th>
                    <th>Pole No.</th>
                    <th>Beneficiary Name</th>
                    <th>Contact No.</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Luminary No.</th>
                    <th>SIM No.</th>
                    <th>Battery Serial No.</th>
                    <th>Module No.</th>
                    <th>Supply</th>
                    <th>Material Inspection</th>
                    <th>Installation</th>
                    <th>Date of Installation</th>
                    <th>Installed By</th>
                    <th>Inspected By BEDA</th>
                    <th>Inspection Date</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($ssl as $ssls)
                  <tr>
                    <td>{{$number}}</td>
                    <td>{{ $ssls->state }}</td>
                    <td>{{ $ssls->wo_no }}</td>
                    <td>{{ $ssls->phase }}</td>
                    <td>{{ $ssls->district }}</td>
                    <td>{{ $ssls->block }}</td>
                    <td>{{ $ssls->panchyat }}</td>
                    <td>{{ $ssls->ward_no }}</td>
                    <td>{{ $ssls->pole_no }}</td>
                    <td>{{ $ssls->beneficiary_name }}</td>
                    <td>{{ $ssls->contact_no }}</td>
                    <td>{{ $ssls->latitude }}</td>
                    <td>{{ $ssls->longitude }}</td>
                    <td>{{ $ssls->luminary_no }}</td>
                    <td>{{ $ssls->sim_no }}</td>
                    <td>{{ $ssls->battery_serial_no }}</td>
                    <td>{{ $ssls->module_no }}</td>
                    <td>{{ $ssls->supply }}</td>
                    <td>{{ $ssls->material_inspection }}</td>
                    <td>{{ $ssls->installation }}</td>
                    <td>{{ $ssls->date_of_installation }}</td>
                    <td>{{ $ssls->installed_by }}</td>
                    <td>{{ $ssls->inspected_by_breda }}</td>
                    <td>{{ $ssls->inspection_date }}</td>
                    <td>{{ $ssls->status }}</td>
                    <td class="file-container">
                      @if ($ssls->image)
                      @php
                      $filePath = asset('uploads/image/' .$ssls->image);
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
                <td>{{ $ssls->created_by }}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" target="_blank" href="{{ route('edit-bssl', ['id' => $ssls->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
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
                    <th>State</th>
                    <th>Work Order No</th>
                    <th>Phase</th>
                    <th>District</th>
                    <th>Block</th>
                    <th>Panchyat</th>
                    <th>Ward No.</th>
                    <th>Pole No.</th>
                    <th>Beneficiary Name</th>
                    <th>Contact No.</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Luminary No.</th>
                    <th>SIM No.</th>
                    <th>Battery Serial No.</th>
                    <th>Module No.</th>
                    <th>Supply</th>
                    <th>Material Inspection</th>
                    <th>Installation</th>
                    <th>Date of Installation</th>
                    <th>Installed By</th>
                    <th>Inspected By BEDA</th>
                    <th>Inspection Date</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
                 @if($ssl instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="d-flex mt-4" style="justify-content : right">
            <nav aria-label="Page navigation example">
                {{ $ssl->links('vendor.pagination.bootstrap-4') }}
            </nav>
        </div>
    @endif
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