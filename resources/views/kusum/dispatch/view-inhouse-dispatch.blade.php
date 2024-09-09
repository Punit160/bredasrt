@include('kusum.component.table-head')
@include('kusum.component.header')
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
              <li class="breadcrumb-item active">Inhouse Dispatch Product</li>
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
                <h3 class="card-title">Inhouse Dispatch Product</h3>
              </div>
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
                    <th style="white-space: nowrap;">Action</th>
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
        @if($order->status == '1')
        <td><h6 class="text-success">Order Accepted</h6> </td>
        @elseif($order->status == '0')
        <td><h6 class="text-danger">Order Rejected</h6></td>
        @else
        <td>
                    <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <form action="{{route('accept-order')}}" method="POST">
                    @csrf
                    <input type="hidden"  name="id"  value="{{$order->id}}">
                    <input type="hidden"  name="status"  value="1">
                    <button class="btn">Accept</button>
                      </form>
                      <div class="dropdown-divider"></div>
                      <form action="{{route('accept-order')}}" method="POST">
                       @csrf
                       <input type="hidden"  name="id"  value="{{$order->id}}">
                       <input type="hidden"  name="status"  value="0">
                       <button class="btn">Reject</button>
                      </form>
                    </div>
                  </div>
                    </td>
          @endif
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
                    <th style="white-space: nowrap;">Action</th>
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