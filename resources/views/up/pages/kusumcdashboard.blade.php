@include('component.head')
@include('component.upksb-header')

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
              <li class="breadcrumb-item active">Dashboard</li>
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
                <span class="info-box-text">Target/Allocate/Survey Done</span>
                <span class="info-box-number">
                  507/<a href="{{asset('/view-kusumc-survey/')}}" style="text-decoration:none;color:black">{{$jk_count}}</a>/<a href="{{asset('/view-kusumc-survey/survey-done')}}" style="text-decoration:none;color:black" >{{$surveydone}}</a>
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
                <span class="info-box-text">Material Supplied / Pending Supplied</span>
                <span class="info-box-number"><a href="{{asset('/view-kusumc-survey/material-supplied')}}" style="text-decoration:none;color:black" >{{$material_supply}} </a>  /<a href="{{asset('/view-kusumc-survey/material-not-supplied')}}" style="text-decoration:none;color:black"" > {{$material_not_supply}} </a> </span>
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
                <span class="info-box-text">Total Installed / Pending Installed</span>
                <span class="info-box-number"><a href="{{asset('/view-kusumc-survey/install')}}" style="text-decoration:none;color:black" >{{$total_install}} </a> / <a href="{{asset('/view-kusumc-survey/not-install')}}" style="text-decoration:none;color:black" > {{$total_not_install}} </a> </span>
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
                <span class="info-box-text">Inspection Done / Inspection Pending</span>
                <span class="info-box-number"><a href="{{asset('/view-kusumc-survey/inspection-done')}}" style="text-decoration:none;color:black"> {{$inspection_done}} </a>/ <a href="{{asset('/view-kusumc-survey/inspection-pending')}}" style="text-decoration:none;color:black" > {{$inspection_not_done}} </a></span>
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
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-inbox"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Document Submitted / Document Pending</span>
                <span class="info-box-number"><a href="{{asset('/view-kusumc-survey/file-submit')}}" style="text-decoration:none;color:black" > {{$file_submit}} </a> / <a href="{{asset('/view-kusumc-survey/file-not-submit')}}" style="text-decoration:none;color:black" >  {{$file_not_submit}} </a> </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-box"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">50%  Done / 50%  Pending / 35%  Done / 35%  Pending/ 15%  Done / 15%  Pending</span>
                <span class="info-box-number"><a href="{{asset('/view-kusumc-survey/pay50')}}" style="text-decoration:none;color:black" > {{$pay50}} </a> / <a href="{{asset('/view-kusumc-survey/not-pay50')}}" style="text-decoration:none;color:black" > {{$notpay50}} </a> / <a href="{{asset('/view-kusumc-survey/pay35')}}" style="text-decoration:none;color:black" > {{$pay35}} </a> / <a href="{{asset('/view-kusumc-survey/not-pay35')}}" style="text-decoration:none;color:black" > {{$notpay35}} </a> / <a href="{{asset('/view-kusumc-survey/pay15')}}" style="text-decoration:none;color:black" > {{$pay15}} </a> / <a href="{{asset('/view-kusumc-survey/not-pay15')}}" style="text-decoration:none;color:black" > {{$notpay15}} </a>  </span>
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
                  Pump Capacity
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body" style="height:310px !important">
                <div class="tab-content p-0 d-flex align-items-center justify-content-center">
                  <!-- Morris chart - Sales (id="revenue-chart") -->
                  <div class="chart tab-pane active" >
                       <div id="chart"></div>
                       <script>
                        var options = {
                          series: [<?php foreach($capacity as $capacities){ 
                                   echo $capacities->pump_count. ',' ;
                             } ?>],
                          chart: {
                          width: 365,
                          type: 'donut',
                        },
                        labels: [<?php foreach($capacity as $capacities){ 
                                   echo "'" .$capacities->pump_capacity."HP"."'," ;
                             } ?>],
                        plotOptions: {
                          pie: {
                            startAngle: -90,
                            endAngle: 270
                          }
                        },
                        dataLabels: {
                          enabled: true,
                          
          formatter: function (val, opts) {
                return opts.w.globals.series[opts.seriesIndex]
            },
                        },
                        fill: {
                          type: 'gradient',
                        },
                        legend: {
                          formatter: function(val, opts) {
                            return val + " - " + opts.w.globals.series[opts.seriesIndex]
                          }
                        },
                        responsive: [{
                          breakpoint: 480,
                          options: {
                            chart: {
                              width: 200
                            },
                            legend: {
                              position: 'bottom'
                            }
                          }
                        }]
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
          
          <!-- Right col -->
          <section class="col-lg-6 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Pump Type
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body" style="height:310px !important">
                <div class="tab-content p-0 d-flex align-items-center justify-content-center">
                  <!-- Morris chart - Sales (id="revenue-chart") -->
                  <div class="chart tab-pane active" >
                       <div id="chart2"></div>

                       <script>
      
                        var options2 = {
                          series: [<?php foreach($pumptype as $pumptypes){ 
                                   echo $pumptypes->count_type. ',' ;
                             } ?>],
                          chart: {
                          width: 380,
                          type: 'pie',
                        },
                        labels: [<?php foreach($pumptype as $pumptypes){ 
                                   echo "'" .$pumptypes->c_contractor_name."'," ;
                             } ?>],
                        dataLabels: {
                          enabled: true,
                          
          formatter: function (val, opts) {
                return opts.w.globals.series[opts.seriesIndex]
            },
                        },
                        responsive: [{
                          breakpoint: 480,
                          options: {
                            chart: {
                              width: 200
                            },
                            legend: {
                              position: 'bottom'
                            }
                          }
                        }]
                        };
                
                        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
                        chart2.render();
                      
                      
                    </script>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.right col -->

          <!-- bigger col -->
          <section class="col-12 px-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>SWP Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                       <div id="chart3"></div>
                       <script>
                           var options3 = {
                             series: [{
                              name: "SWP Status",
                             data: [{{$jk_count}}, {{$material_supply}} , {{$total_install}},  {{$inspection_done}}  , {{$file_submit}} , {{$pay50}},<?php echo $total_bar->pay35 ; ?>, <?php echo $total_bar->pay15 ; ?>]
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
                             enabled: true,
                                             
                             },
                           legend: {
                             show: false
                           },
                           xaxis: {
                             categories: [
                             'Target', 'Material Supplies', 'Installation', 'Inspection',
                             ['File', 'Submission'],
                             ['50%', 'Payment'],
                             ['35%' ,'Payment'],
                             ['15%' ,'Payment']
                             ],
                             labels: {
                               style: {
                                 fontSize: '12px'
                               }
                             }
                           }
                           };
                   
                           var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
                           chart3.render();
                       </script>
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- bigger col -->
        </div>
        <!-- /.row (main row) -->
        
        <!-- Second row -->
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
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Vendor Wise Bifurcation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">District Wise Bifurcation</a>
                    </li>
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
                            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Vendor</th>
                                  <th>Total Survey Done</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>50 %Payment Done</th>
                                  <th>50% Payment Pending</th>
                                  <th>35 %Payment Done</th>
                                  <th>35% Payment Pending</th>
                                  <th>15% Payment Done</th>
                                  <th>15% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($vendorwise as $vendorwises)
                                <tr>
                                  <th>{{ $number }}</th>
                                   <td><a style="text-decoration:none;color:black" href="{{asset('/vendor-kusumc-data/vendor/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->c_contractor_name}}</a></td> 
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/survey-dones/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->sd_survey_done}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/material-supplied/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->material_supplied}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/material-not-supplied/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->not_supplied}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/install/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->total_installed}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/not-install/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pending_installed}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/inspection-done/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->inspect_done}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/inspection-pending/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pending_inspection}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/pay50/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pay50}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/not-pay50/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->notpay50}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/pay35/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pay35}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/not-pay35/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->notpay35}}</a></td>
                                   <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/pay15/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pay15}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-kusumc-data/not-pay15/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->notpay15}}</a></td>
                                
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->sd_survey_done}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay50}}</th>
                                  <th>{{$query->notpay50}}</th>
                                  <th>{{$query->pay35}}</th>
                                  <th>{{$query->notpay35}}</th>
                                  <th>{{$query->pay15}}</th>
                                  <th>{{$query->notpay15}}</th>
                                </tr>
                              </tfoot>
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
                                  <th>Total Survey Done</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>50 %Payment Done</th>
                                  <th>50% Payment Pending</th>
                                  <th>35 %Payment Done</th>
                                  <th>35% Payment Pending</th>
                                  <th>15 %Payment Done</th>
                                  <th>15% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  @foreach($districtwise as $districtwises)
                                <tr>
                                  <th>{{ $number }}</th> 
                                   <td><a style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/district/'. $districtwises->f_district)}}" >{{$districtwises->f_district}}</a></td>
                                   <td><a style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/survey-done/'. $districtwises->f_district)}}" >{{$districtwises->sd_survey_done}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/material-supplied/'. $districtwises->f_district)}}" >{{$districtwises->material_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/material-not-supplied/'. $districtwises->f_district)}}" >{{$districtwises->not_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/install/'. $districtwises->f_district)}}" >{{$districtwises->total_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/not-install/'. $districtwises->f_district)}}" >{{$districtwises->pending_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/inspection-done/'. $districtwises->f_district)}}" >{{$districtwises->inspect_done}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/inspection-pending/'. $districtwises->f_district)}}" >{{$districtwises->pending_inspection}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/pay50/'. $districtwises->f_district)}}" >{{$districtwises->pay50}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/not-pay50/'. $districtwises->f_district)}}" >{{$districtwises->notpay50}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/pay35/'. $districtwises->f_district)}}" >{{$districtwises->pay35}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/not-pay35/'. $districtwises->f_district)}}" >{{$districtwises->notpay35}}</a></td>
                                    <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/pay15/'. $districtwises->f_district)}}" >{{$districtwises->pay15}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-kusumc-data/not-pay15/'. $districtwises->f_district)}}" >{{$districtwises->notpay15}}</a></td>
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                              </tbody>
                             <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->sd_survey_done}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay50}}</th>
                                  <th>{{$query->notpay50}}</th>
                                  <th>{{$query->pay35}}</th>
                                  <th>{{$query->notpay35}}</th>
                                  <th>{{$query->pay15}}</th>
                                  <th>{{$query->notpay15}}</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
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
  <!-- /.content-wrapper -->
 @include('component.footer')