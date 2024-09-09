@include('vendor.component.head')
@include('vendor.component.header')

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
                <form method="post" action="{{route('save-vendor-complaint')}}">
                            @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4 my-2 col-sm-12">
                    <label for="ware">Work Order *</label>
                       <select name="workorder" class="form-control" required>
                      <option value="dis">Select...</option>
                      @foreach($workorder as $workorders)
                      <option value="{{$workorders->wo}}">{{$workorders->wo}}</option>
                      @endforeach
                    </select>
                  </div>
                                <div class="form-group col-md-4 my-2 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div> 
                                  <div class="form-group col-md-4 my-2 col-sm-12">
                                    <label>Mobile</label>
                                    <input type="number" class="form-control" name="mobile" required>
                                  
                                </div>
                                <div class="form-group col-md-4 my-2 col-sm-12">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state" required>
                                </div>
                          
                               <div class="form-group col-md-4">
                                <label for="">District</label>
                                <input type="text" class="form-control" name="district" required>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="">Location</label>
                                 <input type="text" class="form-control" name="location" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Site</label>
                                <input type="text" class="form-control" name="site" >
                            </div>
                             <div class="form-group col-md-6">
                                <label for="">Document/Image</label>
                                <input type="file" class="form-control" name="image" >
                            </div>


                            <div class="form-group col-md-12">
                                <label for="">Complaint</label> 
                                 <textarea class="form-control" name="complaint"  rows="4" cols="50"required></textarea>
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

@include('vendor.component.footer')
