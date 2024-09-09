@include('component.head')
@include('component.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bihar SRT Dashboard</h1>
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
                <span class="info-box-text">Total Sites</span> 
                <span class="info-box-number">
                 <a class="text-dark" style="text-decoration:none !important" href="{{route('view-srt')}}"> {{$query->site_count}} Nos. </a>
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
                <span class="info-box-text">Total Capacity</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{route('view-srt')}}">{{$query->sanction_load}} KW </a></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cancel Sites</span> 
                <span class="info-box-number">
                 <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/cancel-site')}}"> {{$query->site_cancel}} Nos. </a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-map-signs" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cancel Capacity</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/cancel-site')}}">{{$query->cancel_load}} KW </a></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
                  <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-cart-plus" aria-hidden="true"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Feasible Sites</span> 
                <span class="info-box-number">
                 <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/feasible-site/')}}">{{$query->site_not_cancel}} Nos. </a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-map-pin" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Feasible Capacity</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/feasible-site/')}}">{{$query->not_cancel_load}} KW </a></span>
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
                <span class="info-box-text">Material Dispatch / Material Not Dispatch</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/dispatched/')}}">{{$query->material_i_date}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/not-dispatched/')}}">{{$query->material_ni_date}} KW </a></span>
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
                <span class="info-box-text">Installed / Not Installed</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/install')}}">{{$query->installation_status}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/not-install')}}"> {{$query->installation_nstatus}}</a> KW</span>
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
                <span class="info-box-text">Meter Install / Meter Not Install</span>
                <span class="info-box-number">
              <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/meter-install')}}">  {{$query->metering_status}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/meter-not-install')}}">{{$query->count_install - $query->metering_status}} Nos. </a>
                </span>
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
                <span class="info-box-text">RMS Install / RMS Not Install</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/rms-working')}}">{{$query->rms_status}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/not-rms-working')}}">{{$query->count_install - $query->rms_status}} Nos. </a></span>
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
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Material Payment Received / Material Payment Pending</span>
                <span class="info-box-number"><span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/material-payment')}}">{{$query->material_payment}} </a> /<a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/not-material-payment')}}"> {{$query->material_i_date - $query->material_payment}} KW </a></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Installation Payment Received /Installation Payment Pending</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/ic-payment')}}">{{$query->ic_payment}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-srt-data/not-ic-payment')}}"> {{$query->installation_status - $query->ic_payment}} KW </a></span>
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
                  SRT Status
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
                              name: "SRT Status",
                             data: [<?php echo $srt_g->site_count; ?>,<?php echo $srt_g->material_i_date; ?>,<?php echo $srt_g->installation_status; ?>, <?php echo $srt_g->nf; ?>]
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
                               ['Total', 'Sites (Nos.)'],
                               ['Material', 'Dispatch (Nos.)'],
                               ['site','Installed  (Nos.)'],
                               ['Not','Feasible (Nos.)',],
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
                  <i class="fas fa-chart-bar mr-1"></i> SRT Status</h3>
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
                              name: "SRT",
                             data: [<?php echo $srt_g->installation_status; ?>,<?php echo $srt_g->metering_status; ?>, <?php echo $srt_g->rms_status; ?>, <?php echo $srt_g->ic_payment; ?>]
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
                                 ['Installed', 'Sites (Nos.)'],
                               ['Meter', 'Installed (Nos.)'],
                               ['RMS', 'Installed (Nos.)'],
                                ['Payment','Recieved (Nos.)'],
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
                       <table class="table text-white text-center" style="background:orange">
                        <!--<tbody>-->
                        <!--<tr>-->
                        <!--    <th>Materials yet to be dispatched</th>-->
                        <!--    <td> <a href="{{asset('/srt-data/not-dispatched')}}"><?php echo $srt_g->not_dispatch; ?> KW </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>Site not installed</th>-->
                        <!--    <td><a href="{{asset('/srt-data/not-install')}}"> <?php echo $srt_g->not_install; ?> </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>Meter not Working</th>-->
                        <!--   <td> <a href="{{asset('/srt-data/not-working-meter')}}"> <?php echo $srt_g->not_meter; ?>  </a> </td>-->
                        <!--  </tr>-->
                        <!--  <tr>-->
                        <!--    <th>RMS not working</th>-->
                        <!--    <td> <a href="{{asset('/srt-data/not-rms-working')}}"><?php echo $srt_g->not_rms; ?>  </a> </td>-->
                        <!--  </tr>-->
                        <!--</tbody>-->
                        
                          <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Phase</th>
                    <th>Material yet to be dispatched</th>
                     <th>Site installed</th>
                    <th>Site not installed</th>
                    <th>Meter installed</th>
                    <th>Meter not installed</th>
                    <th>RMS installed</th>
                    <th>RMS not installed</th>
                    <th>Image Pending</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($mainsrt as $mainsrts)
                  <tr>
                    <th>{{$number}}</th>
                    <td style="white-space: nowrap;"  ><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/phase/'. $mainsrts->phase)}}">{{$mainsrts->phase}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-dispatched/'. $mainsrts->phase)}}">{{$mainsrts->not_dispatch}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/install/'. $mainsrts->phase)}}">{{$mainsrts->install}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-install/'. $mainsrts->phase)}}">{{$mainsrts->not_install}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/working-meter/'. $mainsrts->phase)}}">{{$mainsrts->meter}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-working-meter/'. $mainsrts->phase)}}">{{$mainsrts->not_meter}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/rms-working/'. $mainsrts->phase)}}">{{$mainsrts->rms}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/not-rms-working/'. $mainsrts->phase)}}">{{$mainsrts->not_rms}} </a></td>
                    <td><a class="text-white" style="text-decoration:none !important" href="{{asset('/srt-data/pending-image/'. $mainsrts->phase)}}">{{$mainsrts->not_image}} </a></td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  <tr>
                   <th></th>
                    <th>Total</th>
                    <th>{{$srt_g->not_dispatch}}</th>
                     <th>{{$srt_g->install}}</th>
                    <th>{{$srt_g->not_install}}</th>
                    <th>{{$srt_g->meter}}</th>
                   <th>{{$srt_g->not_meter}}</th>
                   <th>{{$srt_g->rms}}</th>
                   <th>{{$srt_g->not_rms}}</th>
                    <th>{{$srt_g->not_image}}</th>
                  </tr>
                  </tfoot>
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
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Vendor Wise</a>
                    </li>
                </ul>
                <div class="card-body p-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Phase</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($phases as $phaseses)
                  <tr>
                    <th>{{$number}}</th>
                    <td style="white-space: nowrap;" ><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/phase/'. $phaseses->phase)}}">{{$phaseses->phase}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/phase/'. $phaseses->phase)}}">{{$phaseses->site_count}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/phase/'. $phaseses->phase)}}">{{$phaseses->sanction_load}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/dispatched/'. $phaseses->phase)}}">{{$phaseses->material_i_date}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/payment/'. $phaseses->phase)}}">{{$phaseses->material_payment}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/Installed/'. $phaseses->phase)}}">{{$phaseses->installation_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/meter/'. $phaseses->phase)}}">{{$phaseses->metering_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/rms/'. $phaseses->phase)}}">{{$phaseses->rms_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/abc-format/'. $phaseses->phase)}}">{{$phaseses->abc_format}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/geo-image/'. $phaseses->phase)}}">{{$phaseses->geo_image_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/insurance/'. $phaseses->phase)}}">{{$phaseses->insurance}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/bill-submit/'. $phaseses->phase)}}">{{$phaseses->ic_bill_submit}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/bill_i_no/'. $phaseses->phase)}}">{{$phaseses->bill_i_no}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/phase-srt-data/ic-payment/'. $phaseses->phase)}}">{{$phaseses->ic_payment}}</a></td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                  <th>Sr. No.</th>
                    <th>District</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($districts as $districtses)
                  <tr>
                    <th>{{$number}}</th>
                     <td style="white-space: nowrap;" ><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/district/'. $districtses->district)}}">{{$districtses->district}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/district/'. $districtses->district)}}">{{$districtses->site_count}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/district/'. $districtses->district)}}">{{$districtses->sanction_load}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/dispatched/'. $districtses->district)}}">{{$districtses->material_i_date}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/payment/'. $districtses->district)}}">{{$districtses->material_payment}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/Installed/'. $districtses->district)}}">{{$districtses->installation_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/meter/'. $districtses->district)}}">{{$districtses->metering_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/rms/'. $districtses->district)}}">{{$districtses->rms_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/abc-format/'. $districtses->district)}}">{{$districtses->abc_format}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/geo-image/'. $districtses->district)}}">{{$districtses->geo_image_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/insurance/'. $districtses->district)}}">{{$districtses->insurance}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/bill-submit/'. $districtses->district)}}">{{$districtses->ic_bill_submit}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/bill_i_no/'. $districtses->district)}}">{{$districtses->bill_i_no}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/district-srt-data/ic-payment/'. $districtses->district)}}">{{$districtses->ic_payment}}</a></td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  @endforeach 
                </table>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      
                      <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <div class="card mb-0">
                          <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center"  style="overflow-x: scroll;">
                            <thead>
                  <tr>
                  <tr>
                  <th>Sr. No.</th>
                    <th>Vendor</th>
                    <th>Sites</th>
                    <th>Total Capacity</th>
                    <th>Material</th>
                    <th>Payment</th>
                    <th>Install</th>
                    <th>Metter</th>
                    <th>RMS</th>
                    <th>ABC</th>
                    <th>Photo</th>
                    <th>Insurance</th>
                    <th>I & C Bill Submitted</th>
                    <th>Bill Invoice</th>
                    <th>Bill Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $number = 1; ?>
                  @foreach($vendors as $vendorses)
                  <tr>
                  <th>{{$number}}</th>
                  <td style="white-space: nowrap;" ><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/vendor/'. $vendorses->vendor)}}">{{$vendorses->vendor}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/vendor/'. $vendorses->vendor)}}">{{$vendorses->site_count}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/vendor/'. $vendorses->vendor)}}">{{$vendorses->sanction_load}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/dispatched/'. $vendorses->vendor)}}">{{$vendorses->material_i_date}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/payment/'. $vendorses->vendor)}}">{{$vendorses->material_payment}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/Installed/'. $vendorses->vendor)}}">{{$vendorses->installation_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/meter/'. $vendorses->vendor)}}">{{$vendorses->metering_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/rms/'. $vendorses->vendor)}}">{{$vendorses->rms_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/abc-format/'. $vendorses->vendor)}}">{{$vendorses->abc_format}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/geo-image/'. $vendorses->vendor)}}">{{$vendorses->geo_image_status}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/insurance/'. $vendorses->vendor)}}">{{$vendorses->insurance}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/bill-submit/'. $vendorses->vendor)}}">{{$vendorses->ic_bill_submit}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/bill_i_no/'. $vendorses->vendor)}}">{{$vendorses->bill_i_no}}</a></td>
                    <td><a class="text-dark" style="text-decoration:none !important" href="{{asset('/vendor-srt-data/ic-payment/'. $vendorses->vendor)}}">{{$vendorses->ic_payment}}</a></td>
                  </tr>
                  <?php $number++; ?>
                  @endforeach 
                  </tbody>
                  <tfoot>
                  @foreach($sum as $sumes)
                  <tr>
                    <th></th>
                    <th>Total</th>
                    <th>{{$sumes->site_count}}</th>
                    <th>{{$sumes->sanction_load}}</th>
                    <th>{{$sumes->material_i_date}}</th>
                    <th>{{$sumes->material_payment}}</th>
                    <th>{{$sumes->installation_status}}</th>
                    <th>{{$sumes->metering_status}}</th>
                    <th>{{$sumes->rms_status}}</th>
                    <th>{{$sumes->abc_format}}</th>
                    <th>{{$sumes->geo_image_status}}</th>
                    <th>{{$sumes->insurance}}</th>
                    <th>{{$sumes->ic_bill_submit}}</th>
                    <th>{{$sumes->bill_i_no}}</th>
                    <th>{{$sumes->ic_payment}}</th>
                  </tr>
                  @endforeach 
                  </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
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
  @include('component.footer')