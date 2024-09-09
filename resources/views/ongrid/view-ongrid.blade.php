@include('component.table-head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Ongrid Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Registeration Data</li>
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
              <h3 class="card-title">View Ongrid Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                  <th>Sr No</th>
                    <th>State</th>
                    <th>Work Order No.</th>
                    <th>Work Order Date</th>
                    <th>Beneficiary Name</th>
                    <th>Contact Number</th>
                    <th>District</th>
                    <th>PIN</th>
                    <th>Invoice No.</th>
                    <th>Invoice Date</th>
                    <th>Material Supply</th>
                    <th>Material Supply Date</th>
                    <th>Material Payment</th>
                    <th>Plant Capacity</th>
                    <th>Contractor Name</th>
                    <th>Firm</th>
                    <th>Contractor Number</th>
                    <th>Meter Status</th>
                    <th>85% Payment</th>
                    <th>Payment Date</th>
                    <th>Remarks</th>
                    <th>Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($on as $ons)
                  <tr>
                  <td>{{$number}}</td>
                    <td>{{ $ons->state }}</td>
                    <td>{{ $ons->work_order_no }}</td>
                    <td>{{ $ons->work_order_date }}</td>
                    <td>{{ $ons->beneficiary_name }}</td>
                    <td>{{ $ons->contact_number }}</td>
                    <td>{{ $ons->district }}</td>
                    <td>{{ $ons->pin }}</td>
                    <td>{{ $ons->invoice_no }}</td>
                    <td>{{ $ons->invoice_date }}</td>
                    <td>{{ $ons->material_supply }}</td>
                    <td>{{ $ons->material_supply_date }}</td>
                    <td>{{ $ons->material_payment }}</td>
                    <td>{{ $ons->plant_capacity }}</td>
                    <td>{{ $ons->contractor_name }}</td>
                    <td>{{ $ons->firm }}</td>
                    <td>{{ $ons->contractor_number }}</td>
                    <td>{{ $ons->meter_status }}</td>
                    <td>{{ $ons->payment_85 }}</td>
                    <td>{{ $ons->payment_date }}</td>
                    <td>{{ $ons->remarks }}</td>
                    <td>{{$ons->created_by}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" href="{{ route('edit-ongrids', ['id' => $ons->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
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
                    <th>Work Order No.</th>
                    <th>Work Order Date</th>
                    <th>Beneficiary Name</th>
                    <th>Contact Number</th>
                    <th>District</th>
                    <th>PIN</th>
                    <th>Invoice No.</th>
                    <th>Invoice Date</th>
                    <th>Material Supply</th>
                    <th>Material Supply Date</th>
                    <th>Material Payment</th>
                    <th>Plant Capacity</th>
                    <th>Contractor Name</th>
                    <th>Firm</th>
                    <th>Contractor Number</th>
                    <th>Meter Status</th>
                    <th>85% Payment</th>
                    <th>Payment Date</th>
                    <th>Remarks</th>
                    <th>Created By</th>
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