@include('component.head')
@include('component.upksb-header')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        <h1 class="m-0">UP OFF Grid Dashboard</h1>
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
                <span class="info-box-text">Total Allocated Target</span>
                <span class="info-box-number">
                <a class="text-dark" style="text-decoration:none !important" href="{{route('view-offgrid')}}">  {{$query->site_count}} </a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Material Supplied / Material Pending</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/supplied')}}"> {{$query->supply_done}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/not-supplied')}}"> {{$query->supply_not_done}} </a></span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wrench"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;">Total Installed / Total Not Installed</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/installation-done')}}"> {{$query->installation_done}} </a> /<a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/installation-not-done')}}"> {{$query->installation_not_done}} </a></span>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wrench"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"> Material Payement Done / Material Payement Pending</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/material-payment-done')}}"> {{$query->material_payment}} </a>/ <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/material-payment-not-done')}}"> {{$query->material_payment_not_done}} </a></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-edit"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>85%</strong> Payment Recieved / <strong>85%</strong> Payment Pending</span>
                <span class="info-box-number"><a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/payment-85')}}"> {{$query->pay_85}} </a> / <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/payment-not-85')}}"> {{$query->pay_not_85}} </a></span>
              </div>
            </div>
          </div>
                   <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>AMC Done : </strong>1st/ 2nd/ 3rd/ 4th/ 5th</span>
                <span class="info-box-number">   <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-1st-6')}}">{{$query->amc1}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-2nd-6')}}">{{$query->amc2}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-3rd-6')}}">{{$query->amc3}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-4th-6')}}">{{$query->amc4}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-5th-6')}}">{{$query->amc5}} </a></span>
              </div>
            </div>
          </div>
          
        <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-wrap: wrap;"><strong>AMC Pending : </strong>1st/ 2nd/ 3rd/ 4th/ 5th</span>
                <span class="info-box-number">   <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-not-1st-6')}}">{{$query->amc_not_1}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-not-2nd-6')}}">{{$query->amc_not_2}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-not-3rd-6')}}">{{$query->amc_not_3}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-not-4th-6')}}">{{$query->amc_not_4}} </a> /  <a class="text-dark" style="text-decoration:none !important" href="{{asset('/main-offgrid-data/amc-not-5th-6')}}">{{$query->amc_not_5}} </a></span>
              </div>
            </div>
          </div>
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
                                   <th>85% Payment Recieved</th>
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
                                  <td><a href="{{asset('/district-offgrid-data/district/'. $district->district)}}" class="text-dark">{{$district->district}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/district/'. $district->district)}}" class="text-dark">{{$district->site_count}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/supplied/'. $district->district)}}" class="text-dark">{{$district->supply_done}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/installation-done/'. $district->district)}}" class="text-dark">{{$district->installation_done}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/payment-85/'. $district->district)}}" class="text-dark">{{$district->pay_85}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-1st-6/'. $district->district)}}" class="text-dark">{{$district->amc1}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-2nd-6/'. $district->district)}}" class="text-dark">{{$district->amc2}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-3rd-6/'. $district->district)}}" class="text-dark">{{$district->amc3}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-4th-6/'. $district->district)}}" class="text-dark">{{$district->amc4}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-5th-6/'. $district->district)}}" class="text-dark">{{$district->amc5}}</a></td>
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
                                  <th>{{$query->pay_85}}</th>
                                  <th>{{$query->amc1}}</th>
                                  <th>{{$query->amc2}}</th>
                                  <th>{{$query->amc3}}</th>
                                  <th>{{$query->amc4}}</th>
                                  <th>{{$query->amc5}}</th>
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
                                  <th>85% Payment Recieved Pending</th>
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
                                  <td><a href="{{asset('/district-offgrid-data/district/'. $district->district)}}" class="text-dark">{{$district->district}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/district/'. $district->district)}}" class="text-dark">{{$district->site_count}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/not-supplied/'. $district->district)}}" class="text-dark">{{$district->supply_not_done}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/installation-not-done/'. $district->district)}}" class="text-dark">{{$district->installation_not_done}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/payment-not-85/'. $district->district)}}" class="text-dark">{{$district->pay_not_85}}</a></td>
                                   <td><a href="{{asset('/district-offgrid-data/amc-not-1st-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_1}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-not-2nd-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_2}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-not-3rd-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_3}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-not-4th-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_4}}</a></td>
                                  <td><a href="{{asset('/district-offgrid-data/amc-not-5th-6/'. $district->district)}}" class="text-dark">{{$district->amc_not_5}}</a></td>
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
                                  <th>{{$query->pay_not_85}}</th>
                                  <th>{{$query->amc_not_1}}</th>
                                  <th>{{$query->amc_not_2}}</th>
                                  <th>{{$query->amc_not_3}}</th>
                                  <th>{{$query->amc_not_4}}</th>
                                  <th>{{$query->amc_not_5}}</th>
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