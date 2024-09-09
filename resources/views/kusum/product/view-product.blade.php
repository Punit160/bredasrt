@include('kusum.component.table-header')
@include('kusum.component.sidebar')

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
  @include('kusum.component.table-footer')