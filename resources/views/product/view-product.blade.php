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
            <h1>View Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Product</li>
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
                <h3 class="card-title">View Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Maker</th>
                    <th>Warehouse</th>
                    <th>Capacity</th>
                    <th>Quantity</th>
                    <th>Units</th>
                    <th>Current Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($product as $products)
                  <tr>
                    <th>{{$number}}</th>
                    <td>{{$products->name}}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->make}}</td>
                    <td>{{$products->warehouse}}</td>
                    <td>{{$products->capacity}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>{{$products->units}}</td>
                    <td class="tableCon" style="display: hide;"></td>
                          <td style="white-space: nowrap;" >
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="{{asset('/update-product/'. $products->id)}}">Edit</a>
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
                    <th>Name</th>
                    <th>Category</th>
                    <th>Maker</th>
                    <th>Warehouse</th>
                    <th>Capacity</th>
                    <th>Quantity</th>
                    <th>Units</th>
                    <th>Current Time</th>
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