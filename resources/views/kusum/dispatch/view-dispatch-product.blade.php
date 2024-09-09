@include('kusum.component.table-header')
@include('kusum.component.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dispatch Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dispatch Product</li>
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
                <h3 class="card-title">Dispatch Product</h3>
              </div>
              <!-- <div class="card-header newHead">-->
              <!--                          <h3 class="card-title" style="font-weight: bold;">-->
              <!--  Dispatch Product-->
              <!--  </h3>-->
              <!--</div>-->
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x:auto">
                  <thead>
                  <tr>
                    <th style="white-space: nowrap;">Sr. No.</th>
                    <th style="white-space: nowrap;">Date</th>
                    <th style="white-space: nowrap;">Driver Detail</th>
                    <th  style="white-space: nowrap;">Status</th>
                    <th style="white-space: nowrap;">Dispacth By</th>
                    <th style="white-space: nowrap;">Product</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php $number = 1; ?>
                @foreach($orders as $order)
        <tr>
        <td>{{ $number}}</td>
        <td>{{ $order->datedispatch ?? '' }}</td>
        <td> <ul>
            <li>Truck : {{ $order->truck ?? '' }}</li>
            <li>Challan : {{ $order->challan ?? '' }}</li>
            <li>Phone : {{ $order->phone ?? '' }}</li>
        </ul>  
        </td>
        <td>{{ $order->dispatch_status ?? '' }}</td>
        <td>{{ $order->dispatch_by ?? '' }}</td>
        <td>
            <ul>
            @foreach($order->products as $product)
                <li>{{ $product->name }} ---- ({{ $product->pivot->quantity}} {{ $product->units }})</li>
            @endforeach
            </ul>
        </td>
    </tr>
    <?php $number++; ?>
@endforeach
                </tbody>
                  <tfoot>
                  <tr>
                  <th style="white-space: nowrap;"  >Sr. No.</th>
                    <th style="white-space: nowrap;"  >Date</th>
                    <th style="white-space: nowrap;"  >Driver Detail</th>
                    <th  style="white-space: nowrap;" >Status</th>
                    <th style="white-space: nowrap;"  >Dispacth By</th>
                    <th style="white-space: nowrap;"  >Product</th>
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