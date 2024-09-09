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
                    <h1>Approve Complaint</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Approve Complaint</li>
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
                    <h3 class="card-title text-white">Approve Complaint</h3>

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
                 <form method="post" action="{{ route('approve-closing') }}" enctype="multipart/form-data">
                            @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                                 <input type="hidden" name="id" value="{{$complaint->id}}">

                                <div class="form-group col-md-12 my-2 col-sm-12">
                                    @php
                          $filePath = asset('uploads/image/' .$complaint->image);
                          $fileInfo = pathinfo($filePath);
                          $extension = strtolower($fileInfo['extension'] ?? '');
                          @endphp

                          @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                          <a href="{{ $filePath }}" target="_blank" alt=" file">
                            <img src="{{ $filePath }}" width="300px" alt=" Image" class="hidden-image" >
                          </a>
                          @endif
                                </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputUsername1">Approval</label>
                                 <select name="approve"  class="form-control select2">
                                        <option value="Approved">Approve</option>
                                        <option value="Rejected">Reject</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Remarks</label>
                                  <textarea class="form-control" name="remarks" required></textarea>
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
