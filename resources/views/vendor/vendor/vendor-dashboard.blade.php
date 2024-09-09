@include('vendor.component.head')
@include('vendor.component.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: max-content !important; max-height: max-content !important; min-height: 500px !important;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <a class="col-12 col-sm-6 col-md-4" style="cursor:pointer; color: black;" href="javascript:void(0)">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-money-bills"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Payment</span>
                <span class="info-box-number"> 10 <small>%</small>
                </span>
              </div>
            </div>
          </a>
          <a class="col-12 col-sm-6 col-md-4" style="cursor:pointer; color: black;" href="javascript:void(0)">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-receipt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Payment</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </a>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <a class="col-12 col-sm-6 col-md-4" style="cursor:pointer; color: black;" href="javascript:void(0)">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa-regular fa-money-bill-1"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Remaining Payment</span>
                <span class="info-box-number">760</span>
              </div>
            </div>
          </a>
            
            <a class="col-12 col-sm-6 col-md-3" style="cursor:pointer; color: black;" href="javascript:void(0)"> 
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-people-roof"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">SRT</span>
                  <span class="info-box-number">760</span>
                </div>
              </div>
            </a>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

            <a class="col-12 col-sm-6 col-md-3" style="cursor:pointer; color: black;" href="javascript:void(0)">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="ion ion-stats-bars"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">On Grid</span>
                  <span class="info-box-number">760</span>
                </div>
              </div>
            </a>
            
            <a class="col-12 col-sm-6 col-md-3" style="cursor:pointer; color: black;" href="javascript:void(0)">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-network-wired"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Off Grid</span>
                  <span class="info-box-number">760</span>
                </div>
              </div>
            </a>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <a class="col-12 col-md-3" style="cursor:pointer; color: black;" href="javascript:void(0)">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-lightbulb"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">SSL</span>
                <span class="info-box-number">760</span>
              </div>
            </div>
          </a>

          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover d-block d-xl-table" style="overflow-x: auto;">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th>Project</th>
                      <th>Start Date</th>
                      <th>Total Quantity</th>
                      <th>Completed</th>
                      <th>Pending</th>
                      <th>District</th>
                      <th>Total Payment</th>
                      <th>Payment Received</th>
                      <th>Payment Remaining</th>
                      <th>Deadline Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>WO 112244</td>
                      <td>28-07-2024</td>
                      <td>300</td>
                      <td>200</td>
                      <td>100</td>
                      <td>Bishanpura</td>
                      <td>1,00,00,000</td>
                      <td>1,00,000</td>
                      <td>1,00,00,000</td>
                      <td>28-08-2024</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>WO 223344</td>
                      <td>28-07-2024</td>
                      <td>300</td>
                      <td>200</td>
                      <td>100</td>
                      <td>G B Nagar</td>
                      <td>1,00,00,000</td>
                      <td>1,00,000</td>
                      <td>1,00,00,000</td>
                      <td>28-08-2024</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>S No</th>
                      <th>Project</th>
                      <th>Start Date</th>
                      <th>Total Quantity</th>
                      <th>Completed</th>
                      <th>Pending</th>
                      <th>District</th>
                      <th>Total Payment</th>
                      <th>Payment Received</th>
                      <th>Payment Remaining</th>
                      <th>Deadline Date</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Complaints Raised</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover d-block d-sm-table" style="overflow-x: auto;">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th>Complaint</th>
                      <th>Complaint Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Not Wokring</td>
                      <td>28-07-2024</td>
                      <td>Pending</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Not Wokring</td>
                      <td>28-07-2024</td>
                      <td>Pending</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>S No</th>
                      <th>Complaint</th>
                      <th>Complaint Date</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('vendor.component.footer')
