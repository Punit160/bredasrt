@include('component.head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.upksb-header')
@else
@include('component.jammu-header')
@endif
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
                <form method="post" action="{{route('save-complaint')}}">
                            @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                                <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div> 
                                  <div class="form-group col-md-6 my-2 col-sm-12">
                                    <label>Mobile</label>
                                    <input type="number" class="form-control" name="mobile" required>
                                </div>
                            @if($state == 'bihar')
                            <div class="form-group col-md-4">
                                <label for="exampleInputUsername1">District</label>
                                <select name="district"  class="form-control" required>
                                <option value="dis">Select...</option>
                                <option value="East Champaran">East Champaran</option>
                                <option value="Muzaffarpur">Muzaffarpur</option>
                                <option value="Sheohar">Sheohar</option>
                                <option value="Sitamarhi">Sitamarhi</option>
                                <option value="VAISHALI">VAISHALI</option>
                                <option value="West Champaran">West Champaran</option>
                                 </select>
                            </div>
                            @else 
                               <div class="form-group col-md-4">
                                <label for="exampleInputUsername1">District</label>
                                <input type="text" class="form-control" name="district" required>
                            </div>
                            
                            @endif
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Location</label>
                                 <input type="text" class="form-control" name="block" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Site</label>
                                <input type="text" class="form-control" name="village" required>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Complaint</label> 
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

@include('component.footer')
