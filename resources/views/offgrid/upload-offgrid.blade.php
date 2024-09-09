@include('component.head')
@include('component.upksb-header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="{{route('upload-offgrid')}}" method="Post" enctype='multipart/form-data'>
        @csrf <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong>OFFGRID Import Form</strong></h3>
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
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label for="exampleInputFile">Import File</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="offgrid">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label>Sample File</label>
                  <a href="{{asset('excel/offgrid.xlsx')}}"  class="btn btn-primary w-100" download>Sample File Download &nbsp; <i class="fa-solid fa-download"></i></a>
                </div>
              </div>
            </div>

          </div>
          <div class="card-footer">
            <button class="btn btn-primary px-3 ">Submit</button>
            <button class="btn btn-default px-3 float-right">Cancel</button>
          </div>
        </div>
      </form>

    </div>
  </section>
</div>
@include('component.footer')