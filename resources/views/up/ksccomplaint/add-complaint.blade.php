@include('component.head')
@include('component.upksc-header')
<!-- / Navbar -->
<!-- / Navbar -->



<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Add Complaints</h4> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                        {{session('status')}}
                    </div>
                    @endif

                    <div class="card-body">
                        <h4 style="font-weight: 500; color:#8a8a91;"> Add Complaint Details</h4>

                        <form method="post" action="{{route('save-kusumc-complaint')}}">

                            @csrf

                            <div class="row">
                               <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label>District</label>
                  <select class="form-control select2" name="district" style="width: 100%;">
                    <option value="">Select ...</option>
                    @foreach($district as $districts)
                    <option value="{{$districts->district}}">{{$districts->district}}</option>
                    @endforeach
                  </select>
                 
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label>Block</label>
                  <input type="text" class="form-control" name="block" style="width: 100%;"  >

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label>Village</label>
                  <input type="text" class="form-control" name="village" style="width: 100%;"  >
                 
                </div>
                <!-- /.form-group -->
              </div>
             
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label> Name</label>
                  <input type="text" class="form-control " name="c_name" style="width: 100%;"  >
                 
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label> Email</label>
                  <input type="text" class="form-control " name="email" style="width: 100%;"  >
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label> Mobile</label>
                  <input type="text" class="form-control " name="c_mobile" style="width: 100%;"  >
                 
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-12">
                <div class="form-group">
                  <label>Complaint</label>
                  <textarea name="complaint" id="complaint" rows="6" class="form-control"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
                                 <center><button type="submit" class="btn btn-primary" style="width: 25% !important ;margin-top:10px">Submit</button></center>
                        </form>
                   </div>
            <!-- /.card -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('component.footer')
