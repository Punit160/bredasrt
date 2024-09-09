@include('component.head')
@include('component.complaint-header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Complaints Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Complaints Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h4 class="font-weight-bold">SSL</h4>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Kashmir</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-chart-gantt" style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Jammu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Himanchal Pradesh</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-chart-area" style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Haryana</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-secondary" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Uttar Pradesh</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-chart-line" style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success">
              <div class="inner">
                 <a href="{{route('view-ssl-complaint')}}">
                <h3 class="text-light" >{{$bihar_ssl_com_close}}<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / {{$bihar_ssl_com_open}}<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3></a>
                <p>Bihar</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-chart-column" style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
              </div>
              <a href="{{route('add-ssl-complaint')}}" class="small-box-footer text-dark">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-primary" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Karnataka</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-invoice" style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h4 class="font-weight-bold">SWP</h4>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
              <div class="inner">
                 <a href="{{route('view-kashmir-swp-complaint')}}">
                <h3 class="text-light" >{{$kashmir_swp_com_close}}<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / {{$kashmir_swp_com_open}}<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3> </a>
                <p>Kashmir</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('kashmir-swp-complaint')}}" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <a href="{{route('view-jammu-swp-complaint')}}"><h3 class="text-light" >{{$jammu_swp_com_close}}<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / {{$jammu_swp_com_open}}<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3> </a>
                <p  class="text-light" >Jammu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('jammu-swp-complaint')}}" class="small-box-footer" style="color:white !important">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Himanchal Pradesh</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Haryana</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger">
              <div class="inner">
                 <a href="{{route('view-up-swp-complaint')}}">
                <h3 class="text-light" >{{$up_swp_com_open}}<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / {{$up_swp_com_close}}<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3> </a>
                <p>Uttar Pradesh</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('up-swp-complaint')}}" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Bihar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer text-dark">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-primary" style="filter: grayscale(1)"">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Karnataka</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <h4 class="font-weight-bold">SRT</h4>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Kashmir</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Jammu</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Himanchal Pradesh</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Haryana</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-secondary" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Uttar Pradesh</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success" >
              <div class="inner">
              <a href="{{route('view-srt-complaint')}}">
                <h3 class="text-light" >
                {{$bihar_srt_com_open}}<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / {{$bihar_srt_com_close}}<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3></a>
                <p>Bihar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('add-srt-complaint')}}" class="small-box-footer text-dark">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="small-box bg-primary" style="filter: grayscale(1)">
              <div class="inner">
                <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup> / 0<sup style="font-size: 10px; vertical-align: super !important;">Pending</sup></h3>
                <p>Karnataka</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Add Complaint <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
@include('component.footer')
