@include('vendor.component.table-head')
@include('vendor.component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Vendor</li>
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
                <h3 class="card-title">View Vendor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x:scroll">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Vendor Id</th>
                    <th>Vendor Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Firm</th>
                    <th>Company Name</th>
                    <th>Registeration For</th>
                    <th>State</th>
                    <th>SOW</th>
                    <th>Bank Detail</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($vendor as $vendors)
                  <tr>
                    <th>{{$number}}</th>
                    <td>{{$vendors->vendor_id}}</td>
                    <td>{{$vendors->name}}</td>
                    <td>{{$vendors->email}}</td>
                    <td>{{$vendors->contact}}</td>
                    <td>{{$vendors->firm}}</td>
                    <td>{{$vendors->company}}</td>
                    <td>{{$vendors->register_for}}</td>
                    <td>{{$vendors->state}}</td>
                    <td>{{$vendors->sow}}</td>
                    <td>{{$vendors->bank}} / {{$vendors->ifsc}} / {{$vendors->account_no}}</td>
                    <td style="white-space: nowrap;" >
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="{{asset('update-vendor/'. $vendors->id)}}">Edit</a>
                    </div>
                  </div>
                    </td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Sr. No.</th>
                    <th>Vendor Id</th>
                    <th>Vendor Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Firm</th>
                    <th>Company Name</th>
                    <th>Registeration For</th>
                    <th>State</th>
                    <th>SOW</th>
                    <th>Bank Detail</th>
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
  @include('vendor.component.table-footer')