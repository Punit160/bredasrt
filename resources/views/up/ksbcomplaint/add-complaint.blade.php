@include('component.head')
@include('component.upksb-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Complaint Request</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Complaint Request</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header bg-dark">
                    <h3 class="card-title text-white">Add Complaints</h3>

                    <div class="card-tools text-white">
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button> -->
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
                </div>
                @if(session()->has('status'))
                <div class="alert my-3 p-3 alert-success">
                    {{session('status')}}
                </div>
                @endif

                @if ($errors->any())
     @foreach ($errors->all() as $error)
           <div class="alert alert-danger" role="alert">
                 {{ $error }}
           </div>
    @endforeach
@endif
                   <form method="post" action="{{route('save-kusumb-complaint')}}">
                            @csrf

                    <!-- /.card-header -->
                    <div class="card-body">
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
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
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

