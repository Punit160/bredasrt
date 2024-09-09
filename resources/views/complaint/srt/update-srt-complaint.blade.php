
@include('component.head')
@include('component.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Close Complaint</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Close Complaint</li>
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
                    <h3 class="card-title text-white">Close Complaints</h3>

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
                    <form method="post" action="{{ route('update-srt-complaint') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                        State -  {{ $complaint->state }} </li>

                                        </li>
                                        <li>
                                         District- {{ $complaint->district }} </li>
                                        </li>
                                        <li>
                                        Site Name- {{ $complaint->site_name }} </li>
                                        </li>
                                        <li>
                                        Department Name - {{ $complaint->dept_name }} </li>
                                        </li>
                                        <li>
                                            Created By- {{ $complaint->created_by }} </li>

                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                        Location- {{ $complaint->location}} </li>
                                        </li>
                                         <li>
                                            CA NO- {{ $complaint->ca_no}} </li>
                                        </li>
                                        <li>
                                            Complaint Date- {{ $complaint->start_date}} </li>
                                        </li>
                                    </ul>
                                </div><br><br>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Resolved By</label>
                                    <input type="hidden" name="id" value="{{$complaint->id}}">
                                    <input type="text" class="form-control" name="resolved_by" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control" name="r_email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputUsername1">Mobile</label>
                                    <input type="number" class="form-control" name="r_mobile" required>
                                </div>
                              
                                <div class="form-group col-md-12">
                                    <label for="exampleInputUsername1">File</label>
                                    <input type="file" class="form-control" name="r_file" required>
                                </div>
                                    <div class="form-group col-md-12">
                                <label for="">Remarks</label>
                                <textarea class="form-control" name="remarks" rows="4" cols="50" required></textarea>
                            </div>
                             <div class="form-group col-md-12">
                                <label for="">Send SMS</label><br>
                                <input type="radio" id="s1_yes" name="close_sms" value="Yes">
                                <label for="s1_yes">Yes</label>&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="s1_no" name="close_sms" value="No">
                                <label for="s1_no">No</label><br>
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