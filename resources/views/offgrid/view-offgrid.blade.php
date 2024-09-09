@include('component.table-head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Offgrid Data</h1>
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
              <h3 class="card-title">View Offgrid Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class=" d-block  table table-bordered table-striped" style="overflow-x:auto ;">
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>State</th>
                    <th>WORK ORDER NO</th>
                    <th>WORK ORDER DATE</th>
                    <th>INVOICE NO</th>
                    <th>INVOICE DATE</th>
                    <th>BENEFICIARY NAME</th>
                    <th>MOBILE NO</th>
                    <th>DISTRICT</th>
                    <th>PLANT CAPACITY</th>
                    <th>MATERIAL SUPPLY</th>
                    <th>MATERIAL SUPPLY DATE</th>
                    <th>MATERIAL PAYMENT</th>
                    <th>CONTRACTOR NAME</th>
                    <th>INSTALLATION</th>
                    <th>DATE OF INSTALLATION</th>
                    <th>PLANT CONNECTION</th>
                    <th>SATYAPAN</th>
                    <th>PDI</th>
                    <th>PAYMENT </th>
                    <th> AMOUNT</th>
                    <th>REMARKS</th>
                    <th> Created By</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $number = 1; ?>
                  @foreach($off as $offs)
                  <tr>
                    <td>{{$number}}</td>
                    <td>{{$offs->state}}</td>
                    <td>{{$offs->material_supply}}</td>
                    <td>{{$offs->work_order_no}}</td>
                    <td>{{$offs->work_order_date}}</td>
                    <td>{{$offs->invoice_no}}</td>
                    <td>{{$offs->invoice_date}}</td>
                    <td>{{$offs->beneficiary_name}}</td>
                    <td>{{$offs->mobile_no}}</td>
                    <td>{{$offs->district}}</td>
                    <td>{{$offs->plant_capacity}}</td>
                    <td>{{$offs->material_supply_date}}</td>
                    <td>{{$offs->material_payment}}</td>
                    <td>{{$offs->contractor_name}}</td>
                    <td>{{$offs->installation}}</td>
                    <td>{{$offs->date_of_installation}}</td>
                    <td>{{$offs->plant_connection}}</td>
                    <td>{{$offs->satyapan}}</td>
                    <td>{{$offs->pdi}}</td>
                    <td>{{$offs->payment}}</td>
                    <td>{{$offs->amount}}</td>
                    <td>{{$offs->remarks}}</td>
                    <td>{{$offs->created_by}}</td>

                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" href="{{ route('edit-offs', ['id' => $offs->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
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
                    <th>WORK ORDER NO</th>
                    <th>WORK ORDER DATE</th>
                    <th>INVOICE NO</th>
                    <th>INVOICE DATE</th>
                    <th>BENEFICIARY NAME</th>
                    <th>MOBILE NO</th>
                    <th>DISTRICT</th>
                    <th>PLANT CAPACITY</th>
                    <th>MATERIAL SUPPLY</th>
                    <th>MATERIAL SUPPLY DATE</th>
                    <th>MATERIAL PAYMENT</th>
                    <th>CONTRACTOR NAME</th>
                    <th>INSTALLATION</th>
                    <th>DATE OF INSTALLATION</th>
                    <th>PLANT CONNECTION</th>
                    <th>SATYAPAN</th>
                    <th>PDI</th>
                    <th>PAYMENT </th>
                    <th> AMOUNT</th>
                    <th>REMARKS</th>
                    <th> Created By</th>

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