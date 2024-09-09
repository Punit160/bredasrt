@include('vendor.component.table-head')
@include('vendor.component.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Vendor Daily Progress</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Vendor Daily Progress</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 my-2">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Filter Vendor</div>
            </div>
            <div class="card-body">
            <form action="{{ route('view-daily-progress') }}" method="POST">
            @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="startDate">Start Date</label>
                      <input type="date" name="start_date" id="start_date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="till_date">Till Date</label>
                      <input type="date" name="till_date" id="till_date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="vendor">Select Vendor</label>
                      <select name="vendor" id="vendor" class="form-control select2" style="width: 100%;">
                        <option value="">Select</option>
                        @foreach($vendor as $vendors)
                     <option value="{{$vendors->created_by}}">{{$vendors->created_by}}</option>
                     @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="card-footer">
              <button class="btn btn-secondary d-block px-5" type="submit" name="submit">Search</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12 my-2">
          <div class="card">

            <div class="card-header">
              <h3 class="card-title">Vendor Progress      &nbsp&nbsp&nbsp&nbsp       {{$sd}} &nbsp&nbsp {{$td}} &nbsp&nbsp {{$vd}}
              </h3>

            </div>

            <div class="card shadow-none">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped  d-xxl-table" style="overflow-x: auto;">
                  <thead>
                    <tr>
                      <th style="text-wrap: nowrap;">Sno</th>
                      <th style="text-wrap: nowrap;">Date</th>
                      <th style="text-wrap: nowrap;">Work Order</th>
                      <th style="text-wrap: nowrap;">State</th>
                      <th style="text-wrap: nowrap;">District</th>
                      <th style="text-wrap: nowrap;">Work Order Quantity</th>
                      <th style="text-wrap: nowrap;">Images</th>
                      <th style="text-wrap: nowrap;">Report</th>
                      <!-- <th style="text-wrap: nowrap;">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php $number = 1; ?>

                    @foreach($wo as $wos)
                    <tr>
                      <td>{{ $number }}</td>
                      <td style="text-wrap: nowrap;">{{$wos->r_date}}</td>
                      <td style="text-wrap: nowrap;">{{$wos->workorder}}</td>
                      <td style="text-wrap: nowrap;">{{$wos->state}}</td>
                      <td style="text-wrap: nowrap;">{{$wos->district}}</td>
                      <td style="text-wrap: nowrap;">{{$wos->order_qty}}</td>
                      <td>
                        <ol>
                          <li> @if ($wos->img1)
                            @php
                            $filePath = asset('uploads/image/' .$wos->img1);
                            $fileInfo = pathinfo($filePath);
                            $extension = strtolower($fileInfo['extension'] ?? '');
                            @endphp
                            @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                            <p><a href="{{ $filePath }}" target="_blank" alt=" file">
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
                          </li>
                          <li> @if ($wos->img2)
                            @php
                            $filePath = asset('uploads/image/' .$wos->img2);
                            $fileInfo = pathinfo($filePath);
                            $extension = strtolower($fileInfo['extension'] ?? '');
                            @endphp
                            @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                            <p><a href="{{ $filePath }}" target="_blank" alt=" file">
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
                          </li>
                        </ol>

                      </td>
                      <td style="text-wrap: nowrap;">{{$wos->report}}</td>
                      <!-- <td style="text-wrap: nowrap;">
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a class="dropdown-item" href="./update-return-sale.html"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
                            <div class="dropdown-divider"></div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                              Launch Large Modal
                            </button>
                          </div>
                        </div>
                      </td> -->
                    </tr>
                    <?php $number++; ?>

                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="text-wrap: nowrap;">Sno</th>
                      <th style="text-wrap: nowrap;">Date</th>
                      <th style="text-wrap: nowrap;">Work Order</th>
                      <th style="text-wrap: nowrap;">State</th>
                      <th style="text-wrap: nowrap;">District</th>
                      <th style="text-wrap: nowrap;">Work Order Quantity</th>
                      <th style="text-wrap: nowrap;">Images</th>
                      <th style="text-wrap: nowrap;">Report</th>
                      <!-- <th style="text-wrap: nowrap;">Action</th> -->
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <!-- /.modal -->
  </section>
</div>

@include('vendor.component.table-footer')