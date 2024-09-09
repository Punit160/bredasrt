@include('component.head')
@include('component.header')
<style>
    img{
        height:150px
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">View SRT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View SRT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Third row -->
        <div class="row">
          
          
      

          <!-- modal col -->
          <section class="col-12 ">
            <!-- Custom tabs (Charts with tabs)-->
              <!-- View Tables -->
              <div class="col-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                    <div class="card-body p-0">
                      <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                          <div class="card mb-0">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-box mr-1"></i>&emsp;  {{$srt->location}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                              <table id="example1" class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                  <td><strong>DISCOM -</strong> {{$srt->discom}}</td>
                                  <td><strong>District -</strong>{{$srt->district}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Department -</strong>  {{$srt->dept_name}}</td>
                                  <td><strong>Name of the Site -</strong>{{$srt->site_name}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Location -</strong> {{$srt->location}}</td>
                                  <td><strong>Firm Name -</strong> {{$srt->firm_name}}</td>
                                </tr>
                                <tr>
                                  <td><strong>CA no. -</strong>{{$srt->ca_no}}</td>
                                  <td><strong>Sanction load in kwp -</strong>  {{$srt->sanction_load}}</td>
                                </tr>
                                <tr>
                                  <td><strong>PLANT SPP Capacity -</strong>{{$srt->plant_sc}}</td>
                                  <td><strong>Work Order No. -</strong> {{$srt->wo_no}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Phase -</strong>{{$srt->phase}}</td>
                                  <td><strong>Vendor -</strong> {{$srt->vendor}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Date -</strong>{{$srt->date}}</td>
                                  <td><strong>Material Inspection Date -</strong> {{$srt->material_i_date}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Material Bill Invoice -</strong>{{$srt->mb_invoice}}</td>
                                  <td><strong>Material Payment -</strong> {{$srt->material_payment}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Installation Status -</strong> {{$srt->installation_status}}</td>
                                  <td><strong>Installation Remarks -</strong> {{$srt->inst_remarks}}</td>
                                </tr>
                                <tr>
                                  <td><strong>I & C Bill Submitted -</strong>{{$srt->ic_bill_submit}}</td>
                                  <td><strong>Bill Invoice No -</strong>{{$srt->bill_i_no}}</td>
                                </tr>
                                <tr>
                                  <td><strong>I & C Payment -</strong>{{$srt->ic_payment}}</td>
                                  <td><strong>Date -</strong> {{$srt->ic_date}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Net Meter Submission Date -</strong> {{$srt->net_meter_submit_date}}</td>
                                  <td><strong>Metering Status -</strong>  {{$srt->metering_status}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Smart Meter -</strong>{{$srt->smart_meter}}</td>
                                  <td><strong>Convert to Net Meter -</strong>{{$srt->convert_nm}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Net Meter Required -</strong>{{$srt->nm_required}}</td>
                                  <td><strong>Firm Name -</strong> {{$srt->firm_name}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Net Meter Installed -</strong>  {{$srt->nm_install}}</td>
                                  <td><strong>Testing Slip (Y/N) - {{$srt->test_slip}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Fixing Slip (Y/N) -</strong>{{$srt->fix_slip}}</td>
                                  <td><strong>Meter Installation Date -</strong>{{$srt->ts_image}}</td>
                                </tr>
                                <tr>
                                  <td><strong>RMS URL -</strong> {{$srt->rms_url}}</td>
                                  <td><strong>RMS Status -</strong>{{$srt->rms_status}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Geo tag Photo (Y/N) -</strong>{{$srt->geo_image_status}}</td>
                                  <td><strong>ABC Format -</strong> {{$srt->abc_format}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Commision Report -</strong>{{$srt->comm_report}}</td>
                                  <td><strong>IV Curv -</strong>{{$srt->iv_curv}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Inspection Photo -</strong> {{$srt->inspect_image}}</td>
                                  <td><strong>Insurance -</strong>{{$srt->insurance}}</td>
                                </tr>
                                <tr>
                                  <td><strong>WMS -</strong>{{$srt->wms}}</td>
                                  <td><strong>WMS Login Detail -</strong>{{$srt->wms_login}}</td>
                                </tr>
                                <tr>
                                  <td><strong>Final Inspection Dt. -</strong> {{$srt->final_i_dt}}</td>
                                  <td><strong>Agency Remarks -</strong> {{$srt->agency_remarks}}</td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- /. View Tables -->
            <!-- /.card -->
          </section>
          <!-- /.modal col -->
        </div>
        <!-- /.row (Third row) -->
        <!-- Main row -->
        <div class="row">
          <!-- col 1 -->
          
          <section class="col-md-6 col-lg-3">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i> Testing Slip(photo)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                    <div class="tab-content p-0">
                    @if ( $srt->fs_image)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->ts_image) }}">
										<img src="{{ asset('upload_images/' . $srt->ts_image) }}" alt="Testing Slip(photo)" >
									</a>
									@else
									<p>No image available</p>
									@endif
                    </div>
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          
          <!-- /.col 1 -->
          <!-- col 2 -->
          <section class="col-md-6 col-lg-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i> Fixing Slip(photo)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                    <div class="tab-content p-0">
                    @if ( $srt->fs_image)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->fs_image) }}">
										<img src="{{ asset('upload_images/' . $srt->fs_image) }}" alt="Fixing Slip(photo)">
									</a>
									@else
									<p>No image available</p>
									@endif
                    </div>
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.col 2 -->
           <!-- col 3 -->
           <section class="col-md-6 col-lg-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i> Geo tag Photo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                  @if ( $srt->geo_image1)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->geo_image1) }}">
										<img src="{{ asset('upload_images/' . $srt->geo_image1) }}" alt="Geo tag Photo">
									</a>
									@else
									<p>No image available</p>
									@endif
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.col 3 -->
           <!-- col 4 -->
         <!--  <section class="col-md-6 col-lg-3 ">-->

            <!-- Map card -->
         <!--   <div class="card ">-->
         <!--     <div class="card-header">-->
         <!--       <h3 class="card-title">-->
         <!--         <i class="fas fa-image mr-1"></i> Geo tag Photo</h3>-->
         <!--     </div>-->
              <!-- /.card-header -->
         <!--     <div class="card-body">-->
         <!--       <div class="tab-content p-0">-->
                  <!-- Morris chart - Sales -->
         <!--         <div class="chart tab-pane active" >-->
         <!--         @if ( $srt->geo_image2)-->
									
									<!--<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->geo_image2) }}">-->
									<!--	<img src="{{ asset('upload_images/' . $srt->geo_image2) }}" alt="Geo tag Photo">-->
									<!--</a>-->
									<!--@else-->
									<!--<p>No image available</p>-->
									<!--@endif-->
         <!--          </div>-->
         <!--       </div>-->
         <!--     </div>-->
              <!-- /.card-body -->
         <!--   </div>-->
            <!-- /.card -->
         <!-- </section>-->
          <!-- /.col 4 -->

           <!-- col 5 -->
         <!--  <section class="col-md-6 col-lg-3 ">-->

            <!-- Map card -->
         <!--   <div class="card ">-->
         <!--     <div class="card-header">-->
         <!--       <h3 class="card-title">-->
         <!--         <i class="fas fa-image mr-1"></i> Geo tag Photo</h3>-->
         <!--     </div>-->
              <!-- /.card-header -->
         <!--     <div class="card-body">-->
         <!--       <div class="tab-content p-0">-->
                  <!-- Morris chart - Sales -->
         <!--         <div class="chart tab-pane active" >-->
         <!--         @if ( $srt->geo_image3)-->
									
									<!--<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->geo_image3) }}">-->
									<!--	<img src="{{ asset('upload_images/' . $srt->geo_image3) }}" alt="Geo tag Photo">-->
									<!--</a>-->
									<!--@else-->
									<!--<p>No image available</p>-->
									<!--@endif-->
									
         <!--          </div>-->
         <!--       </div>-->
         <!--     </div>-->
              <!-- /.card-body -->
         <!--   </div>-->
            <!-- /.card -->
         <!-- </section>-->
          <!-- /.col 5 -->
           <!-- col 6 -->
         <!--  <section class="col-md-6 col-lg-3 ">-->

            <!-- Map card -->
         <!--   <div class="card ">-->
         <!--     <div class="card-header">-->
         <!--       <h3 class="card-title">-->
         <!--         <i class="fas fa-image mr-1"></i> Geo tag Photo</h3>-->
         <!--     </div>-->
              <!-- /.card-header -->
         <!--     <div class="card-body">-->
         <!--       <div class="tab-content p-0">-->
                  <!-- Morris chart - Sales -->
         <!--         <div class="chart tab-pane active" >-->
         <!--         @if ( $srt->geo_image4)-->
									
									<!--<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->geo_image4) }}">-->
									<!--	<img src="{{ asset('upload_images/' . $srt->geo_image4) }}" alt="Geo tag Photo">-->
									<!--</a>-->
									<!--@else-->
									<!--<p>No image available</p>-->
									<!--@endif-->
         <!--          </div>-->
         <!--       </div>-->
         <!--     </div>-->
              <!-- /.card-body -->
         <!--   </div>-->
            <!-- /.card -->
         <!-- </section>-->
          <!-- /.col 6 -->
           <!-- col 7 -->
           <section class="col-md-6 col-lg-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i> ABC Photo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                  @if ( $srt->abc_photo)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->abc_photo) }}">
										<img src="{{ asset('upload_images/' . $srt->abc_photo) }}" alt="ABC Photo">
									</a>
									@else
									<p>No image available</p>
									@endif
									
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.col 7 -->
           <!-- col 8 -->
         <!--  <section class="col-md-6 col-lg-3 ">-->

            <!-- Map card -->
         <!--   <div class="card ">-->
         <!--     <div class="card-header">-->
         <!--       <h3 class="card-title">-->
         <!--         <i class="fas fa-image mr-1"></i> IV Curv Document</h3>-->
         <!--     </div>-->
              <!-- /.card-header -->
         <!--     <div class="card-body">-->
         <!--       <div class="tab-content p-0">-->
                  <!-- Morris chart - Sales -->
         <!--         <div class="chart tab-pane active" >-->
         <!--         @if ( $srt->iv_curv_doc)-->
									
									<!--<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->iv_curv_doc) }}">-->
									<!--	<img src="{{ asset('upload_images/' . $srt->iv_curv_doc) }}" alt="IV Curv Document">-->
									<!--</a>-->
									<!--@else-->
									<!--<p>No image available</p>-->
									<!--@endif-->
									
         <!--          </div>-->
         <!--       </div>-->
         <!--     </div>-->
              <!-- /.card-body -->
         <!--   </div>-->
            <!-- /.card -->
         <!-- </section>-->
          <!-- /.col 8 -->

           <!-- col 9 -->
           <section class="col-md-6 col-lg-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i>Commision Report document</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                  @if ( $srt->iv_curv_doc)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->iv_curv_doc) }}">
										<img src="{{ asset('upload_images/' . $srt->iv_curv_doc) }}" alt="IV Curv Document">
									</a>
									@else
									<p>No image available</p>
									@endif
									
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.col 9 -->
           <!-- col 10 -->
           <section class="col-md-6 col-lg-3 ">

            <!-- Map card -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image mr-1"></i> Insurance Copy</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" >
                  @if ( $srt->insurance_copy)
									
									<a class="thumbnail lightbox_trigger" href="{{ asset('upload_images/' . $srt->insurance_copy) }}">
										<img src="{{ asset('upload_images/' . $srt->insurance_copy) }}" alt="Insurance Copy">
									</a>
									@else
									<p>No image available</p>
									@endif
									
                   </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.col 10 -->
        </div>
        <!-- /.row (main row) -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@include('component.footer')