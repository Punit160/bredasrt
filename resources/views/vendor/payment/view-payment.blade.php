@include('vendor.component.table-head')
@include('vendor.component.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Payments</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Payments</li>
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
              <h3 class="card-title">All Payments</h3>
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
            <div class="card shadow-none">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x: scroll;">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Work Order</th>
                      <th>Vendor name</th>
                      <th>Project Head</th>
                      <th>Payment Mode</th>
                      <th>Amount</th>
                      <th>File</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($payment as $payments)
                    <tr>
                      <td>{{$payments->payment_date}}</td>
                      <td>{{$payments->work_order}}</td>
                      <td>{{$payments->created_by}}</td>
                      <td>{{$payments->project_head}}</td>
                      <td>{{$payments->payment_mode}}</td>
                      <td>{{$payments->amount}}</td>
                      <td>
                        @if ($payments->file)
                        @php
                        $filePath = asset('uploads/image/' .$payments->file);
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
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" href="{{ route('edit-payment', ['id' => $payments->id]) }}"><span><i class="fa fa-pencil"></i></span>&emsp;Edit</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('delete-payment', ['id' => $payments->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Work Order</th>
                      <th>Vendor name</th>
                      <th>Project Head</th>
                      <th>Payment Mode</th>
                      <th>Amount</th>
                      <th>File</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('vendor.component.table-footer')