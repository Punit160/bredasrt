@include('vendor.component.table-head')
@include('vendor.component.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>View Work Orders</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">View Work Orders</li>
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
                  <h3 class="card-title">All Work Orders</h3>
                </div>
                <div class="card shadow-none">
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x: scroll;">
                      <thead>
                        <tr>
                        <th>Sr. No.</th>
                          <td>Date</td>
                          <th>Work Order ID</th>
                          <th>Work Order</th>
                          <th>Work Order Number</th>
                          <th>State</th>
                          <th>Project Head</th>
                          <th>Work Order Quantity</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $number = 1; ?>
                      @foreach($wo as $wos)
                        <tr>
                        <td>{{$number}}</td>
                          <td>{{$wos->date}}</td>
                          <td>{{$wos->wo_id}}</td>
                          <td>{{$wos->work_order}}</td>
                          <td>{{$wos->wo_number}}</td>
                          <td>{{$wos->state}}</td>
                          <td>{{$wos->project_head}} ({{$wos->email}} / {{$wos->phone}})</td>
                          <td>{{$wos->order_qty}}</td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-info">Action</button>
                              <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a class="dropdown-item" href="{{ route('edit-workorder', ['id' => $wos->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('delete-workorder', ['id' => $wos->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
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
                          <td>Date</td>
                          <th>Work Order ID</th>
                          <th>Work Order</th>
                          <th>Work Order Number</th>
                          <th>State</th>
                          <th>Project Head</th>
                          <th>Work Order Quantity</th>
                          <th>Action</th>
                        </tr>
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

    @include('component.table-footer')