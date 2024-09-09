@include('component.head')
@include('component.jammu-header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Target</span>
                <span class="info-box-number">
                  9936
                  <!-- <small>%</small> -->
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Installed / Total Not Installed</span>
                <span class="info-box-number">6602 / 3334</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck-loading"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inspection Done / Inspection Pending</span>
                <span class="info-box-number">6359 / 243</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-wrench"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bill Submitted / Bill Not Submitted</span>
                <span class="info-box-number">6602 / 3334</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payment Received / Payment Pending</span>
                <span class="info-box-number">13,09,61,920 / 1,91,28,855</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payment Pending On Supply / Payment Pending On Installation</span>
                <span class="info-box-number">2428130 / 16700725</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  SSL Status
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales (id="revenue-chart") -->
                  <div class="chart tab-pane active" >
                       <div id="chart"></div>

                       <script>
                         
                           var options = {
                             series: [{
                              name: "SSL Status",
                             data: [9936, 6602, 3334, 6359, 243, 6602, 3334]
                           }],
                             chart: {
                             height: 350,
                             type: 'bar',
                             events: {
                               click: function(chart, w, e) {
                               }
                             }
                           },
                           plotOptions: {
                             bar: {
                               columnWidth: '45%',
                               distributed: true,
                             }
                           },
                           dataLabels: {
                             enabled: false
                           },
                           legend: {
                             show: false
                           },
                           xaxis: {
                             categories: [
                               ['Total', 'Target'],
                               ['Total', 'Installed'],
                               ['Total', 'Not', 'Installed'],
                               ['Inspection', 'Done'],
                               ['Inspection', 'Pending'],
                               ['Bill', 'Submitted'],
                               ['Bill', 'Not','Submitted'], 
                             ],
                             labels: {
                               style: {
                                 fontSize: '12px'
                               }
                             }
                           }
                           };
                   
                           var chart = new ApexCharts(document.querySelector("#chart"), options);
                           chart.render();
                         
                         
                       </script>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col -->
          <section class="col-lg-6 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>SSL Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                       <div id="chart2"></div>

                       <script>
                         
                           var options2 = {
                             series: [{
                              name: "SSL Status",
                             data: [130961920, 19128855, 2428130, 16700725]
                           }],
                             chart: {
                             height: 350,
                             type: 'bar',
                             events: {
                               click: function(chart2, w, e) {
                               }
                             }
                           },
                           plotOptions: {
                             bar: {
                               columnWidth: '45%',
                               distributed: true,
                             }
                           },
                           dataLabels: {
                             enabled: false
                           },
                           legend: {
                             show: false
                           },
                           xaxis: {
                             categories: [
                               ['Payment', 'Received'],
                               ['Payment', 'Pending'],
                               ['Payment', 'Pending', 'On','Supply'],
                               ['Payment', 'Pending', 'On','Installation']
                             ],
                             labels: {
                               style: {
                                 fontSize: '12px'
                               }
                             }
                           }
                           };
                   
                           var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
                           chart2.render();
                         
                         
                       </script>
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
        
        <!-- Second row -->
        <div class="row">
          <!-- top col -->
          <section class="col-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Details
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active">
                       <table class="table  d-block" style="overflow-x: auto ;background: orange; color: white !important;">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Phase</th>
                            <th>Total Target</th>
                            <th>Total supply</th>
                            <th>Total supply pending</th>
                            <th>Total Installed</th>
                            <th>Total Not Intalled</th>
                            <th>Inspection Done</th>
                            <th>Inspection Pending</th>
                            <th>Bill Submitted</th>
                            <th>Bill Not Submitted</th>
                            <th>Payment Recived</th>
                            <th>Payment Pending</th>
                            <th>Payment Pending On Supply</th>
                            <th>Payment Pending On Installation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>1</th>
                            <td>Phase 1</td>
                            <td>3,344</td>
                            <td>3,344</td>
                            <td>0</td>
                            <td>3,344</td>
                            <td>0</td>
                            <td>3,101</td>
                            <td>243</td>
                            <td>3,344</td>
                            <td>0</td>
                            <td>4,71,79,322</td>
                            <td>5,36,214</td>
                            <td>0</td>
                            <td>5,32,614</td>
                          </tr>
                          <tr>
                            <th>2</th>
                            <td>Phase 2</td>
                            <td>1,835</td>
                            <td>1,835</td>
                            <td>0</td>
                            <td>1,629</td>
                            <td>206</td>
                            <td>1,629</td>
                            <td>0</td>
                            <td>1,629</td>
                            <td>206</td>
                            <td>2,14,50,960</td>
                            <td>62,84,147</td>
                            <td>19,04,920</td>
                            <td>43,79,227</td>
                          </tr>
                          <tr>
                            <th>3</th>
                            <td>Phase 3</td>
                            <td>4,757</td>
                            <td>4,716</td>
                            <td>41</td>
                            <td>1,629</td>
                            <td>3,128</td>
                            <td>1,629</td>
                            <td>0</td>
                            <td>1,629</td>
                            <td>3,128</td>
                            <td>6,23,31,638</td>
                            <td>1,23,08,494</td>
                            <td>5,23,210</td>
                            <td>1,17,85,284</td>
                          </tr>
                        </tbody>
                       </table>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.top col -->
        </div>
        <!-- /.row (Second row) -->
        
        <!-- Third row -->
        <div class="row">
          
          <!-- modal col -->
          <section class="col-12 ">
            <!-- Custom tabs (Charts with tabs)-->
              <!-- View Tables -->
              <div class="col-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Phase Wise</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">District Wise</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Vendor Wise</a>
                    </li> -->
                </ul>
                <div class="card-body p-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card mb-0">
                          <!-- <div class="card-header">
                            <h3 class="card-title">Phase Wise</h3>
                          </div> -->
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: scroll;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Phase</th>
                                  <th>Total Target</th>
                                  <th>Total supply</th>
                                  <th>Total supply pending</th>
                                  <th>Total Installed</th>
                                  <th>Total Not Intalled</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>Bill Submitted</th>
                                  <th>Bill Not Submitted</th>
                                  <th>Payment Recived</th>
                                  <th>Payment Pending</th>
                                  <th>Payment Pending On Supply</th>
                                  <th>Payment Pending On Installation</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>1</th>
                                  <td>Phase 1</td>
                                  <td>3,344</td>
                                  <td>3,344</td>
                                  <td>0</td>
                                  <td>3,344</td>
                                  <td>0</td>
                                  <td>3,101</td>
                                  <td>243</td>
                                  <td>3,344</td>
                                  <td>0</td>
                                  <td>4,71,79,322</td>
                                  <td>5,36,214</td>
                                  <td>0</td>
                                  <td>5,32,614</td>
                                </tr>
                                <tr>
                                  <th>2</th>
                                  <td>Phase 2</td>
                                  <td>1,835</td>
                                  <td>1,835</td>
                                  <td>0</td>
                                  <td>1,629</td>
                                  <td>206</td>
                                  <td>1,629</td>
                                  <td>0</td>
                                  <td>1,629</td>
                                  <td>206</td>
                                  <td>2,14,50,960</td>
                                  <td>62,84,147</td>
                                  <td>19,04,920</td>
                                  <td>43,79,227</td>
                                </tr>
                                <tr>
                                  <th>3</th>
                                  <td>Phase 3</td>
                                  <td>4,757</td>
                                  <td>4,716</td>
                                  <td>41</td>
                                  <td>1,629</td>
                                  <td>3,128</td>
                                  <td>1,629</td>
                                  <td>0</td>
                                  <td>1,629</td>
                                  <td>3,128</td>
                                  <td>6,23,31,638</td>
                                  <td>1,23,08,494</td>
                                  <td>5,23,210</td>
                                  <td>1,17,85,284</td>
                                </tr>
                              </tbody>
                              <!-- <tfoot>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Phase</th>
                                  <th>Total Target</th>
                                  <th>Total supply</th>
                                  <th>Total supply pending</th>
                                  <th>Total Installed</th>
                                  <th>Total Not Intalled</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>Bill Submitted</th>
                                  <th>Bill Not Submitted</th>
                                  <th>Payment Recived</th>
                                  <th>Payment Pending</th>
                                  <th>Payment Pending On Supply</th>
                                  <th>Payment Pending On Installation</th>
                                </tr>
                              </tfoot> -->
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card mb-0">
                          <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div> -->
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>District</th>
                                  <th>Total Target</th>
                                  <th>Total Installed</th>
                                  <th>Total Not Intalled</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>Bill Submitted</th>
                                  <th>Bill Not Submitted</th>
                                  <th>Payment Recived</th>
                                  <th>Payment Pending</th>
                                  <th>Payment Pending On Supply</th>
                                  <th>Payment Pending On Installation</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>1</th>
                                  <td>Kathua</td>
                                  <td>6085</td>
                                  <td>2862</td>
                                  <td>3223</td>
                                  <td>2862</td>
                                  <td>0</td>
                                  <td>2862</td>
                                  <td>3223</td>
                                  <td>81147109</td>
                                  <td>13117021</td>
                                  <td>204586</td>
                                  <td>12912435</td>
                                </tr>
                                <tr>
                                  <th>2</th>
                                  <td>Jammu</td>
                                  <td>1153</td>
                                  <td>1132</td>
                                  <td>21</td>
                                  <td>1132</td>
                                  <td>0</td>
                                  <td>1132</td>
                                  <td>21</td>
                                  <td>15695900</td>
                                  <td>483664</td>
                                  <td>407296</td>
                                  <td>76368</td>
                                </tr>
                                <tr>
                                  <th>3</th>
                                  <td>Samba</td>
                                  <td>626</td>
                                  <td>626</td>
                                  <td>0</td>
                                  <td>626</td>
                                  <td>0</td>
                                  <td>626</td>
                                  <td>0</td>
                                  <td>8010345</td>
                                  <td>1202194</td>
                                  <td>479808</td>
                                  <td>722386</td>
                                </tr>
                                <tr>
                                  <th>4</th>
                                  <td>Rajouri</td>
                                  <td>1013</td>
                                  <td>920</td>
                                  <td>93</td>
                                  <td>920</td>
                                  <td>0</td>
                                  <td>920</td>
                                  <td>93</td>
                                  <td>11747944</td>
                                  <td>1367464</td>
                                  <td>1145520</td>
                                  <td>221944</td>
                                </tr>
                                <tr>
                                  <th>5</th>
                                  <td>Reasi</td>
                                  <td>1059</td>
                                  <td>1059</td>
                                  <td>0</td>
                                  <td>816</td>
                                  <td>243</td>
                                  <td>1059</td>
                                  <td>0</td>
                                  <td>14349357</td>
                                  <td>774196</td>
                                  <td>190920</td>
                                  <td>583276</td>
                                </tr>
                              </tbody>
                              <!-- <tfoot>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>District</th>
                                  <th>Total Target</th>
                                  <th>Total Installed</th>
                                  <th>Total Not Intalled</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>Bill Submitted</th>
                                  <th>Bill Not Submitted</th>
                                  <th>Payment Recived</th>
                                  <th>Payment Pending</th>
                                  <th>Payment Pending On Supply</th>
                                  <th>Payment Pending On Installation</th>
                                </tr>
                              </tfoot> -->
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      
                      <!-- <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div> -->
                          <!-- /.card-header -->
                          <!-- <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x: scroll;">
                              <thead>
                              <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                              </tr>
                              <tr>
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                              </tr>
                              <tr>
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                              </tr>
                              <tr>
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                              </tr>
                              <tr>
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div> -->
                          <!-- /.card-body -->
                        <!-- </div>
                      </div> -->
                    </div>
                </div>
            <!-- /. View Tables -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.modal col -->
        </div>
        <!-- /.row (Third row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('component.footer')