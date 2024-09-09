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
                <span class="info-box-text">Total Allocation</span>
                <span class="info-box-number">
                  {{$jk_count}}
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
                <span class="info-box-number"><a href="{{asset('/view-jk-registration/material-supplied')}}" style="text-decoration:none;color:black" >{{$material_supply}} </a>  /<a href="{{asset('/view-jk-registration/material-not-supplied')}}" style="text-decoration:none;color:black"" > {{$material_not_supply}} </a> </span>
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
                <span class="info-box-number"><a href="{{asset('/view-jk-registration/install')}}" style="text-decoration:none;color:black" >{{$total_install}} </a> / <a href="{{asset('/view-jk-registration/not-install')}}" style="text-decoration:none;color:black" > {{$total_not_install}} </a> </span>
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
                <span class="info-box-number"><a href="{{asset('/view-jk-registration/inspection-done')}}" style="text-decoration:none;color:black" > {{$inspection_done}} </a>/ <a href="{{asset('/view-jk-registration/inspection-pending')}}" style="text-decoration:none;color:black" > {{$inspection_not_done}} </a></span>
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
                <span class="info-box-number"><a href="{{asset('/view-jk-registration/file-submit')}}" style="text-decoration:none;color:black" > {{$file_submit}} </a> / <a href="{{asset('/view-jk-registration/file-not-submit')}}" style="text-decoration:none;color:black" >  {{$file_not_submit}} </a> </span>
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
                <span class="info-box-text">90%  Done / 90%  Pending / 10%  Done / 10%  Pending</span>
                <span class="info-box-number"><a href="{{asset('/view-jk-registration/pay90')}}" style="text-decoration:none;color:black" > {{$pay90}} </a> / <a href="{{asset('/view-jk-registration/not-pay90')}}" style="text-decoration:none;color:black" > {{$notpay90}} </a> / <a href="{{asset('/view-jk-registration/pay10')}}" style="text-decoration:none;color:black" > {{$pay10}} </a> / <a href="{{asset('/view-jk-registration/not-pay10')}}" style="text-decoration:none;color:black" > {{$notpay10}} </a> </span>
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
                                   echo "'" .$capacities->p_pump_capacity."HP"."'," ;
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
                                   echo "'" .$pumptypes->p_pump_type."'," ;
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
                             data: [<?php echo $total_bar->material_structure ; ?>, <?php echo $total_bar->material_module ; ?>, <?php echo $total_bar->material_pump ; ?>, <?php echo $total_bar->jcr_hocs ; ?>, <?php echo $total_bar->inspect_done ; ?>, <?php echo $total_bar->jcr_insurances ; ?>, <?php echo $total_bar->file_submission ; ?> ,<?php echo $total_bar->pay90 ; ?>, <?php echo $total_bar->pay10 ; ?>]
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
                             'Structure', 'Module', 'Pump', 'HOC', 'Inspection', 'Insurance',
                             ['File', 'Submission'],
                             ['90%', 'Payment'],
                             ['10%' ,'Payment']
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
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-phase-tab" data-toggle="pill" href="#custom-tabs-four-phase" role="tab" aria-controls="custom-tabs-four-phase" aria-selected="false">Phase Wise</a>
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
                                  <th>Total allocation</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                   <th>90 %Payment Done</th>
                                  <th>90% Payment Pending</th>
                                  <th>10 %Payment Done</th>
                                  <th>10% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($vendorwise as $vendorwises)
                                <tr>
                                  <th>{{ $number }}</th>
                                   <td><a style="text-decoration:none;color:black" href="{{asset('/vendor-swp-jammu/vendor/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->c_contractor_name}}</a></td> 
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/vendor/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->allocate}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/material-supplied/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->material_supplied}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/material-not-supplied/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->not_supplied}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/install/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->total_installed}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/not-install/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pending_installed}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/inspection-done/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->inspect_done}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/inspection-pending/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pending_inspection}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/pay90/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pay90}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/not-pay90/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->notpay90}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/pay10/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->pay10}}</a></td>
                                  <td><a style="text-decoration:none;color:black"  href="{{asset('/vendor-swp-jammu/not-pay10/'. $vendorwises->c_contractor_name)}}" >{{$vendorwises->notpay10}}</a></td>
                                
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                              </tbody>
                              <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->allocate}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay90}}</th>
                                  <th>{{$query->notpay90}}</th>
                                  <th>{{$query->pay10}}</th>
                                  <th>{{$query->notpay10}}</th>
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
                                  <th>Total allocation</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                               <th>90 %Payment Done</th>
                                  <th>90% Payment Pending</th>
                                  <th>10 %Payment Done</th>
                                  <th>10% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  @foreach($districtwise as $districtwises)
                                <tr>
                                  <th>{{ $number }}</th> 
                                   <td><a style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/district/'. $districtwises->district)}}" >{{$districtwises->district}}</a></td>
                                   <td><a style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/district/'. $districtwises->district)}}" >{{$districtwises->allocate}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/material-supplied/'. $districtwises->district)}}" >{{$districtwises->material_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/material-not-supplied/'. $districtwises->district)}}" >{{$districtwises->not_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/install/'. $districtwises->district)}}" >{{$districtwises->total_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/not-install/'. $districtwises->district)}}" >{{$districtwises->pending_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/inspection-done/'. $districtwises->district)}}" >{{$districtwises->inspect_done}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/inspection-pending/'. $districtwises->district)}}" >{{$districtwises->pending_inspection}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/pay90/'. $districtwises->district)}}" >{{$districtwises->pay90}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/not-pay90/'. $districtwises->district)}}" >{{$districtwises->notpay90}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/pay10/'. $districtwises->district)}}" >{{$districtwises->pay10}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/district-swp-data/not-pay10/'. $districtwises->district)}}" >{{$districtwises->notpay10}}</a></td>
                                 
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                              </tbody>
                             <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->allocate}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay90}}</th>
                                  <th>{{$query->notpay90}}</th>
                                  <th>{{$query->pay10}}</th>
                                  <th>{{$query->notpay10}}</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      
                      
                      
                      
                      <div class="tab-pane fade" id="custom-tabs-four-phase" role="tabpanel" aria-labelledby="custom-tabs-four-phase-tab">
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
                                  <th>Phase</th>
                                  <th>Total allocation</th>
                                  <th>Material Supplied</th>
                                  <th>Pending Supplied</th>
                                  <th>Total Installed</th>
                                  <th>Pending Installation</th>
                                  <th>Inspection Done</th>
                                  <th>Inspection Pending</th>
                                  <th>90 %Payment Done</th>
                                  <th>90% Payment Pending</th>
                                  <th>10 %Payment Done</th>
                                  <th>10% Payment Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  @foreach($phasewise as $phasewises)
                                <tr>
                                  <th>{{ $number }}</th>
                                   <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/phase/'. $phasewises->monitering)}}" >{{$phasewises->monitering}}</a></td>  
                                   <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/phase/'. $phasewises->monitering)}}" >{{$phasewises->allocate}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/material-supplied/'. $phasewises->monitering)}}" >{{$phasewises->material_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/material-not-supplied/'. $phasewises->monitering)}}" >{{$phasewises->not_supplied}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/install/'. $phasewises->monitering)}}" >{{$phasewises->total_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/not-install/'. $phasewises->monitering)}}" >{{$phasewises->pending_installed}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/inspection-done/'. $phasewises->monitering)}}" >{{$phasewises->inspect_done}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/inspection-pending/'. $phasewises->monitering)}}" >{{$phasewises->pending_inspection}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/pay90/'. $phasewises->monitering)}}" >{{$phasewises->pay90}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/not-pay90/'. $phasewises->monitering)}}" >{{$phasewises->notpay90}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/pay10/'. $phasewises->monitering)}}" >{{$phasewises->pay10}}</a></td>
                                  <td><a  style="text-decoration:none;color:black"  href="{{asset('/phase-swp-data/not-pay10/'. $phasewises->monitering)}}" >{{$phasewises->notpay10}}</a></td>
                                </tr>
                                 <?php $number++; ?>
                                @endforeach
                                </tr>
                              </tbody>
                             <tfoot>
                                <tr>
                                   <th></th>
                                   <th>Total</th>
                                  <th>{{$query->allocate}}</th>
                                  <th>{{$query->material_supplied}}</th>
                                  <th>{{$query->not_supplied}}</th>
                                  <th>{{$query->total_installed}}</th>
                                  <th>{{$query->pending_installed}}</th>
                                  <th>{{$query->inspect_done}}</th>
                                  <th>{{$query->pending_inspection}}</th>
                                  <th>{{$query->pay90}}</th>
                                  <th>{{$query->notpay90}}</th>
                                  <th>{{$query->pay10}}</th>
                                  <th>{{$query->notpay10}}</th>
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