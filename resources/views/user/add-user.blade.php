@include('component.head')
@include('component.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                    <h3 class="card-title text-white">Add User</h3>

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
                <form action="{{route('save-user')}}" method="POST">
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputUsername1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Password</label>
                                <input class="form-control" placeholder="Enter Your Password" type="password" name="password">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Confirm Password</label> 
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" >
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">User Image</label> 
                                <input class="form-control"  type="file" name="userimage">
                            </div>
                            
                             <div class="form-group col-md-6">
                                <label for="input-3">State</label>
                                <select class="form-control"  name="state">
                                <option value = "jammu">Jammu</option>
                                <option value = "kashmir">Kashmir</option>
                                <option value = "up">UP</option>
                                <option value = "himachal">Himachal</option>
                                <option value = "haryana">Haryana</option>
                                <option value = "bihar">Bihar</option>
                                <option value = "karnataka">Karnatka</option>
                            </select>
                            </div>
                
                            <div class="form-group col-md-6">
                                <label for="input-3">Role</label>
                                <select class="form-control"  name="role">
                                <option value = "0">Super Admin</option>
                                <option value = "1">State Head</option>
                                <option value = "2">Employee</option>
                                <option value = "3">Viewer</option>
                                <option value = "4">Vendor</option>
                                </select>
                            </div>
                            
                              <div class="form-group col-md-6">
                                <label for="input-3">Status</label>
                                <select class="form-control"  name="status">
                                <option value = "0">Active</option>
                                <option value = "1">Inactive</option>
                                </select>
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