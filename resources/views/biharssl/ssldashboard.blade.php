@include('component.head')
@include('component.header')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Target</span>
                <span class="info-box-number">
                    <a class="text-dark" style="text-decoration:none !important" href="{{route('view-bssl')}}">{{$query->site_count}} </a>
                </span>
              </div>
            </div>
          </div>
             <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Total Workorder Recieved / Total Workorder Not Recieved</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/work-order-recieved')}}">{{$query->wo_recieved}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/work-order-not-recieved')}}">{{$query->wo_not_recieved}} </a></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Total Supplied / Total Not Supplied</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/supplied')}}">{{$query->supply_done}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/not-supplied')}}">{{$query->supply_not_done}} </a></span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wrench"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Material Inspect/Material Not Inspect</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/inspection-done')}}">{{$query->inspection_done}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/inspection-not-done')}}">{{$query->inspection_not_done}} </a></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wrench"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Total Installed / Total Not Installed</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/installation-done')}}">{{$query->installation_done}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/installation-not-done')}}">{{$query->installation_not_done}} </a> </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wrench"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Installaion Inspect / Installaion Not Inspect</span>
                <span class="info-box-number"> <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/installation-inspection-done')}}">{{$query->installation_inspect}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/installation-inspection-not-done')}}">{{$query->installation_not_inspect}} </a></span>
              </div>
            </div>
          </div>
             <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>40%</strong> Payment Submitted / <strong>40%</strong> Payment Pending</span>
                <span class="info-box-number">    <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-40')}}">{{$query->pay_40}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-not-40')}}">{{$query->pay_not_40}} </a></span>
              </div>
            </div>
          </div>
          
             <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-edit"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>5%</strong> Payment Submitted / <strong>5%</strong> Payment Pending</span>
                <span class="info-box-number">  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-5')}}">{{$query->pay_5}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-not-5')}}">{{$query->pay_not_5}} </a></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-edit"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>25%</strong> Payment Submitted / <strong>25%</strong> Payment Pending</span>
                <span class="info-box-number">  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-25')}}">{{$query->pay_25}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/payment-not-25')}}">{{$query->pay_not_25}} </a></span>
              </div>
            </div>
          </div>
                  <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>AMC Done : </strong>1st/ 2nd/ 3rd/ 4th/ 5th</span>
                <span class="info-box-number">   <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-1st-6')}}">{{$query->amc_1st_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-2nd-6')}}">{{$query->amc_2nd_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-3rd-6')}}">{{$query->amc_3rd_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-4th-6')}}">{{$query->amc_4th_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-5th-6')}}">{{$query->amc_5th_6}} </a></span>
              </div>
            </div>
          </div>
          
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>AMC Pending : </strong>1st/ 2nd/ 3rd/ 4th/ 5th</span>
                <span class="info-box-number">   <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-not-1st-6')}}">{{$query->amc_not_1st_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-not-2nd-6')}}">{{$query->amc_not_2nd_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-not-3rd-6')}}">{{$query->amc_not_3rd_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-not-4th-6')}}">{{$query->amc_not_4th_6}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-ssl-data/amc-not-5th-6')}}">{{$query->amc_not_5th_6}} </a></span>
              </div>
            </div>
          </div>

        
        <!-- <div class="row">
          <section class="col-lg-6 ">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  SRT Status
                </h3>
              </div>
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active" >
                       <div id="chart"></div>
                       <script>
                           var options = {
                             series: [{
                              name: "SRT Status",
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
              </div>
            </div>
          </section>
          
          <section class="col-lg-6 ">
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>SRT Payment Status</h3>
              </div>
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active" >
                       <div id="chart2"></div>
                       <script>                         
                           var options2 = {
                             series: [{
                              name: "SRT Status",
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
            </div>
          </section> -->
        </div> 

        
        <div class="row">
          <section class="col-12 ">
              <div class="col-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">District Wise Progess</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">District Wise Pendences</a>
                    </li>
                </ul>
                <div class="card-body p-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card mb-0">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center" style="overflow-x: scroll;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>District</th>
                                  <th>Total Target</th>
                                  <th>Total supply</th>
                                  <th>Total Installed</th>
                                  <th>Inspection Done</th>
                                   <th>40% Payment Recieved</th>
                                   <th>5% Payment Recieved</th>
                                  <th>25% Payment Recieved</th>
                                  <th>AMC 1st Recieved</th>
                                  <th>AMC 2nd Recieved</th>
                                  <th>AMC 3rd Recieved</th>
                                  <th>AMC 4th Recieved</th>
                                  <th>AMC 5th Recieved</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($districts as $district) 
                                <tr>
                                  <th><a href="#" class="text-dark">{{$number}}</a></th>
                                  <td><a href="{{asset('/district-ssl-data/district/'. $district->district)}}" class="text-dark">{{$district->district}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/district/'. $district->district)}}" class="text-dark">{{$district->site_count}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/supplied/'. $district->district)}}" class="text-dark">{{$district->supply_done}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/installation-done/'. $district->district)}}" class="text-dark">{{$district->installation_done}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/installation-inspection-done/'. $district->district)}}" class="text-dark">{{$district->installation_inspect}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/payment-40/'. $district->district)}}" class="text-dark">{{$district->pay_40}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/payment-5/'. $district->district)}}" class="text-dark">{{$district->pay_5}}</a></td>
                                   <td><a href="{{asset('/district-ssl-data/payment-25/'. $district->district)}}" class="text-dark">{{$district->pay_25}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-1st-6/'. $district->district)}}" class="text-dark">{{$district->amc_1st_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-2nd-6/'. $district->district)}}" class="text-dark">{{$district->amc_2nd_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-3rd-6/'. $district->district)}}" class="text-dark">{{$district->amc_3rd_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-4th-6/'. $district->district)}}" class="text-dark">{{$district->amc_4th_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-5th-6/'. $district->district)}}" class="text-dark">{{$district->amc_5th_6}}</a></td>
                                </tr>
                                <?php $number++; ?>
                                @endforeach
                              </tbody>
                                   <tfoot>
                                    <tr>
                                  <th></th>
                                  <th>Total</th>
                                  <th>{{$query->site_count}}</th>
                                  <th>{{$query->supply_done}}</th>
                                  <th>{{$query->installation_done}}</th>
                                  <th>{{$query->installation_inspect}}</th>
                                  <th>{{$query->pay_40}}</th>
                                  <th>{{$query->pay_5}}</th>
                                  <th>{{$query->pay_25}}</th>
                                  <th>{{$query->amc_1st_6}}</th>
                                  <th>{{$query->amc_2nd_6}}</th>
                                  <th>{{$query->amc_3rd_6}}</th>
                                  <th>{{$query->amc_4th_6}}</th>
                                  <th>{{$query->amc_5th_6}}</th>
                                </tr>
                              </tfoot>
                             </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card mb-0">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block text-center" style="overflow-x: scroll;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>District</th>
                                  <th>Total Target</th>
                                  <th>Total Supply Pending</th>
                                  <th>Total Installation Pending</th>
                                  <th>Inspection Pending</th>
                                  <th>40% Payment Recieved Pending</th>
                                  <th>5% Payment Recieved Pending</th>
                                  <th>25% Payment Recieved Pending</th>
                                   <th>AMC 1st Pending</th>
                                  <th>AMC 2nd Pending</th>
                                  <th>AMC 3rd Pending</th>
                                  <th>AMC 4th Pending</th>
                                  <th>AMC 5th Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($districts as $district) 
                                <tr>
                                  <th><a href="#" class="text-dark">{{$number}}</a></th>
                                  <td><a href="{{asset('/district-ssl-data/district/'. $district->district)}}" class="text-dark">{{$district->district}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/district/'. $district->district)}}" class="text-dark">{{$district->site_count}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/not-supplied/'. $district->district)}}" class="text-dark">{{$district->supply_not_done}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/installation-not-done/'. $district->district)}}" class="text-dark">{{$district->installation_not_done}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/installation-inspection-not-done/'. $district->district)}}" class="text-dark">{{$district->installation_not_inspect}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/payment-not-40/'. $district->district)}}" class="text-dark">{{$district->pay_not_40}}</a></td>
                                   <td><a href="{{asset('/district-ssl-data/payment-not-5/'. $district->district)}}" class="text-dark">{{$district->pay_not_5}}</a></td>
                                   <td><a href="{{asset('/district-ssl-data/payment-not-25/'. $district->district)}}" class="text-dark">{{$district->pay_not_25}}</a></td>
                                   <td><a href="{{asset('/district-ssl-data/amc-not-1st-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_1st_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-not-2nd-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_2nd_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-not-3rd-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_3rd_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-not-4th-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_4th_6}}</a></td>
                                  <td><a href="{{asset('/district-ssl-data/amc-not-5th-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_5th_6}}</a></td>
                                </tr>
                                <?php $number++; ?>
                                @endforeach
                              </tbody>
                                 <tfoot>
                                    <tr>
                                  <th></th>
                                  <th>Total</th>
                                  <th>{{$query->site_count}}</th>
                                  <th>{{$query->supply_not_done}}</th>
                                  <th>{{$query->installation_not_done}}</th>
                                  <th>{{$query->installation_not_inspect}}</th>
                                  <th>{{$query->pay_not_40}}</th>
                                  <th>{{$query->pay_not_5}}</th>
                                  <th>{{$query->pay_not_25}}</th>
                                  <th>{{$query->amc_not_1st_6}}</th>
                                  <th>{{$query->amc_not_2nd_6}}</th>
                                  <th>{{$query->amc_not_3rd_6}}</th>
                                  <th>{{$query->amc_not_4th_6}}</th>
                                  <th>{{$query->amc_not_5th_6}}</th>
                                </tr>
                              </tfoot>
                             </table>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </section>
          
                  <section class="col-12 ">
              <div class="col-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home-vendor" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Vendor Wise Progess</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile-vendor" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Vendor Wise Pendences</a>
                    </li>
                </ul>
                <div class="card-body p-0">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-four-home-vendor" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card mb-0">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Vendor</th>
                                  <th>Total Target</th>
                                  <th>Total supply</th>
                                  <th>Total Installed</th>
                                  <th>Inspection Done</th>
                                   <th>40% Payment Recieved</th>
                                   <th>5% Payment Recieved</th>
                                  <th>25% Payment Recieved</th>
                                   <th>AMC 1st Recieved</th>
                                  <th>AMC 2nd Recieved</th>
                                  <th>AMC 3rd Recieved</th>
                                  <th>AMC 4th Recieved</th>
                                  <th>AMC 5th Recieved</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                                @foreach($vendors as $vendor) 
                                <tr>
                                  <th><a href="#" class="text-dark">{{$number}}</a></th>
                                  <td><a href="{{asset('/vendor-ssl-data/vendor/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installed_by}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/vendor/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->site_count}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/supplied/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->supply_done}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/installation-done/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installation_done}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/installation-inspection-done/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installation_inspect}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/payment-40/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_40}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/payment-5/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_5}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/payment-25/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_25}}</a></td>
                                   <td><a href="{{asset('/vendor-ssl-data/amc-1st-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_1st_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-2nd-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_2nd_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-3rd-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_3rd_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-4th-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_4th_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-5th-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_5th_6}}</a></td>
                                </tr>
                                <?php $number++; ?>
                                @endforeach
                              </tbody>
                                    <tfoot>
                                    <tr>
                                  <th></th>
                                  <th>Total</th>
                                  <th>{{$query->site_count}}</th>
                                  <th>{{$query->supply_done}}</th>
                                  <th>{{$query->installation_done}}</th>
                                  <th>{{$query->installation_inspect}}</th>
                                  <th>{{$query->pay_40}}</th>
                                  <th>{{$query->pay_5}}</th>
                                  <th>{{$query->pay_25}}</th>
                                  <th>{{$query->amc_1st_6}}</th>
                                  <th>{{$query->amc_2nd_6}}</th>
                                  <th>{{$query->amc_3rd_6}}</th>
                                  <th>{{$query->amc_4th_6}}</th>
                                  <th>{{$query->amc_5th_6}}</th>
                                </tr>
                              </tfoot>
                             </table>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>

                      <div class="tab-pane fade" id="custom-tabs-four-profile-vendor" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card mb-0">
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto;">
                              <thead>
                                <tr>
                                  <th>Sr. No.</th>
                                  <th>Vendor</th>
                                  <th>Total Target</th>
                                  <th>Total Supply Pending</th>
                                  <th>Total Installation Pending</th>
                                  <th>Inspection Pending</th>
                                  <th>40% Payment Recieved Pending</th>
                                  <th>5% Payment Recieved Pending</th>
                                  <th>25% Payment Recieved Pending</th>
                                     <th>AMC 1st Pending</th>
                                  <th>AMC 2nd Pending</th>
                                  <th>AMC 3rd Pending</th>
                                  <th>AMC 4th Pending</th>
                                  <th>AMC 5th Pending</th>
                                </tr>
                              </thead>
                              <tbody>
                                 <?php $number = 1; ?>
                              @foreach($vendors as $vendor) 
                                <tr>
                                  <th><a href="#" class="text-dark">{{$number}}</a></th>
                                 <td><a href="{{asset('/vendor-ssl-data/vendor/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installed_by}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/vendor/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->site_count}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/not-supplied/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->supply_not_done}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/installation-not-done/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installation_not_done}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/installation-inspection-not-done/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->installation_not_inspect}}</a></td>
                                   <td><a href="{{asset('/vendor-ssl-data/payment-not-40/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_not_40}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/payment-not-5/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_not_5}}</a></td>
                                   <td><a href="{{asset('/vendor-ssl-data/payment-not-25/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->pay_not_25}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-not-1st-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_not_1st_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-not-2nd-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_not_2nd_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-not-3rd-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_not_3rd_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-not-4th-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_not_4th_6}}</a></td>
                                  <td><a href="{{asset('/vendor-ssl-data/amc-not-5th-6/'. $vendor->installed_by)}}" class="text-dark">{{$vendor->amc_not_5th_6}}</a></td>
                                  
                                </tr>
                                <?php $number++; ?>
                                @endforeach
                              </tbody>
                               <tfoot>
                                    <tr>
                                  <th></th>
                                  <th>Total</th>
                                  <th>{{$query->site_count}}</th>
                                  <th>{{$query->supply_not_done}}</th>
                                  <th>{{$query->installation_not_done}}</th>
                                  <th>{{$query->installation_not_inspect}}</th>
                                  <th>{{$query->pay_not_40}}</th>
                                  <th>{{$query->pay_not_5}}</th>
                                  <th>{{$query->pay_not_25}}</th>
                                  <th>{{$query->amc_not_1st_6}}</th>
                                   <th>{{$query->amc_not_2nd_6}}</th>
                                  <th>{{$query->amc_not_3rd_6}}</th>
                                  <th>{{$query->amc_not_4th_6}}</th>
                                  <th>{{$query->amc_not_5th_6}}</th>
                                </tr>
                              </tfoot>
                             </table>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
@include('component.footer')
