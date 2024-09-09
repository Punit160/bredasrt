@include('component.table-head')
@include('component.jammu-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View material</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View material</li>
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
              <h3 class="card-title">View material</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1"  class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Order Pump Capacity</th>
                    <th>Head</th>
                    <th>Actual Order</th>
                    <th>Pump Available</th>
                    <th>Pump Sent on Site</th>
                    <th>Pump requirement</th>
                    <th>BOS Available</th>
                    <th>BOS Sent on Site</th>
                    <th>BOS Sent on Site</th>
                    <th>Modules Available</th>
                    <th>Modules Sent on Site</th>
                    <th>Modules Required</th>
                    <th>Structure Available</th>
                    <th>Structure Sent on Site</th>
                    <th>Structure Required</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($materials as $material)
                  <tr>
                    <th>{{$number}}</th>
                    <td>{{$material->order_pump_capacity}}</td>
                    <td>{{$material->head}}</td>
                    <td>{{$material->actual_order}}</td>
                    <td>{{$material->pump_available}}</td>
                    <td>{{$material->pump_sent_site}}</td>
                    <td>{{$material->pump_req}}</td>
                    <td>{{$material->bos_available}}</td>
                    <td>{{$material->bos_sent_site}}</td>
                    <td>{{$material->bos_req}}</td>
                    <td>{{$material->module_available}}</td>
                    <td>{{$material->module_sent_site}}</td>
                    <td>{{$material->module_req}}</td>
                    <td>{{$material->structure_available}}</td>
                    <td>{{$material->structure_sent_site}}</td>
                    <td>{{$material->structure_req}}</td>
                    <td>{{$material->created_by}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('edit-material', ['id' => $material->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('delete-material', ['id' => $material->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
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
                    <th>Order Pump Capacity</th>
                    <th>Head</th>
                    <th>Actual Order</th>
                    <th>Pump Available</th>
                    <th>Pump Sent on Site</th>
                    <th>Pump requirement</th>
                    <th>BOS Available</th>
                    <th>BOS Sent on Site</th>
                    <th>BOS Required</th>
                    <th>Modules Available</th>
                    <th>Modules Sent on Site</th>
                    <th>Modules Required</th>
                    <th>Structure Available</th>
                    <th>Structure Sent on Site</th>
                    <th>Structure Required</th>
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