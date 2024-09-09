@include('vendor.component.head')
@include('vendor.component.header')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"
      style="height: max-content !important; max-height: max-content !important; min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px)) !important;">
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
            <div class="col-lg-6 col-12">
              <div class="row">
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="icon">
                      <i class="ion ion-bag" style="color: #2b4d74 !important;"></i>
                    </div>
                    <div class="inner">
                      <h3 style="color : black">{{$vendor_state}}</h3>
                      <p>Total States</p>
                    </div>
                    <a href="{{route('view-vendor')}}" class="small-box-footer"
                      style="background-color: #2b4d74 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3 style="color : black">
                        {{$vendor}}
                      </h3>
                      <p>Total Vendor</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars" style="color: #023E88 !important;"></i>
                    </div>
                    <a href="{{route('view-vendor')}}" class="small-box-footer"
                      style="background-color: #023E88 !important; color: white !important; ">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3 style="color : black">{{$workorder}}</h3>
                      <p>Total Work Order</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph" style="color: #000080 !important;"></i>
                    </div>

                    <a href="{{route('view-workorder')}}" class="small-box-footer"
                      style="background-color:#000080 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3 style="color : black">{{$vcomplaint}}</h3>
                      <p>Total Complaints</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add" style="color: #1E90FF  !important;"></i>
                    </div>
                    <a href="{{route('view-vendor-complaint')}}" class="small-box-footer"
                      style="background-color: #1E90FF !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3 style="color : black">{{$payment_request}}</h3>
                      <p>Total Payment Request</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph" style="color: #013A63 !important;"></i>
                    </div>

                    <a href="{{route('view-payment')}}" class="small-box-footer "
                      style="background-color: #013A63 !important; color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-6">
                  <!-- small box -->
                  <div class="small-box">
                    <div class="inner">
                      <h3 style="color : black">{{$vrm}}</h3>
                      <p>Repair & Maintenance</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph" style="color: #0019fd !important;"></i>
                    </div>

                    <a href="{{route('view-request')}}" class="small-box-footer "  
                      style="background-color: #0019fd !important;color: white !important;">More info <i
                        class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 col-12">
              <div class="card p-2" id="pie">
                <h5 class="pl-3 pt-2">Vendor State Wise</h5>
                <div id="chart2"></div>
               
<script>
    var seriesData = [
        @foreach($vstate as $v)
            {{ $v->vendor }},
        @endforeach
    ];

    var labelsData = [
        @foreach($vstate as $v)
            '{{ $v->state }}',
        @endforeach
    ];

    var options = {
        series: seriesData,
        chart: {
            toolbar: {
                show: true,
                tools: {
                    download: true,
                },
            },
            width: '100%',
            height: '450px',
            type: 'donut',
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
                const count = opts.w.globals.series[opts.seriesIndex];
                const percentage = val.toFixed(2) + '%';
                return count + ' (' + percentage + ')';
            }
        },
        fill: {
            type: 'solid',
        },
        legend: {
            position: 'bottom'
        },
        labels: labelsData, // Use dynamic labels based on state
        colors: ['#000080', '#032174', '#1E90FF', '#023E88', '#013A63'], // or dynamically generated colors
        responsive: [{
            breakpoint: 450,
            options: {
                chart: {
                    width: '80%'
                },
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
</script>



              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-6">
              <div class="card p-2" id="bar">
                <h5 class="pl-3 pt-2">Work Order</h5>
                <div id="chart"></div>
              </div>
            </div>

            <div class="col-lg-6 col-6">
              <div class="card " style='height: 500px'>
                <div class=" card-header " style="background-color: #002951; color: white;">
                  <h5>Daily Report</h5>
                </div>
                <div class=" card-body dataTab" style=" overflow-y: auto">
                  <table class=" table table-bordered table-hover">
                    <thead class="" style="background-color: #4098f1; color: white;">
                      <tr>
                        <td>State</td>
                        <td>Vendor</td>
                        <td>Date</td>
                        <td>Quantity</td>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($vp as $vps)
                      <tr>
                        <td>{{$vps->state}}</td>
                        <td>{{$vps->created_by}}</td>
                        <td>{{$vps->r_date}}</td>
                        <td>{{$vps->quantity}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot style="background-color: #4098f1; color: white;">
                      <tr>
                        <td>State</td>
                        <td>Vendor</td>
                        <td>Date</td>
                        <td>Quantity</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-12">

            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @include('vendor.component.footer')