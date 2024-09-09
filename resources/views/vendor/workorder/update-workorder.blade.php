@include('vendor.component.head')
@include('vendor.component.header')

<div class="content-wrapper" style="min-height: fit-content !important;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Work Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">WO</li>
                        <li class="breadcrumb-item active">Update Work Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
        @if(session()->has('status'))
            <div class="alert my-3 p-3 alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if ($errors->any())
            <ul class="m-3 alert alert-danger">
                @foreach ($errors->all() as $error)
                <li class="text-white">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
          <form action="{{route('update-workorder')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-default">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="workorder1">Work Order</label>
                    <input type="hidden" class="form-control" value="{{$wo->id}}" id="workorder" id placeholder="Work Order" name="wid">

                    <input type="text" class="form-control" value="{{$wo->work_order}}" id="workorder1" placeholder="Work Order" name="workorder">
                  </div>
                  <div class="form-group">
                    <label for="workorderno1">Work Order Number</label>
                    <input type="text" class="form-control" value="{{$wo->wo_number}}" id="workorderno1" placeholder="Work Order Number" name="wo_number">
                  </div>
                  <div class="form-group">
                    <label for="file">File input</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="file" onchange="document.getElementById('file-label').innerHTML = this.files[0].name">
                      <label class="custom-file-label" id="file-label" for="file" name="file_input">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <select class="form-control select2 " style="width: 100%;" name="state">
                      <option disabled>Choose State...</option>
                      <option value="Uttar Pradesh" {{ $wo->state == 'Uttar pradesh' ? 'selected' : '' }}>Uttar pradesh</option>
                      <option value="Bihar" {{ $wo->state == 'Bihar' ? 'selected' : '' }}>Bihar</option>
                      <option value="Punjab" {{ $wo->state == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                      <option value="Haryana" {{ $wo->state == 'Haryana' ? 'selected' : '' }}>Haryana</option>
                      <option value="karnataka" {{ $wo->state == 'karnataka' ? 'selected' : '' }}>Karnataka</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="projecthead1">Project Head</label>
                    <input type="text" class="form-control" value="{{$wo->project_head}}" id="projecthead1" placeholder="Project Head" name="project_head">
                  </div>
                  <div class="form-group">
                    <label for="workQuantity"> Order Quantity</label>
                    <input type="number" class="form-control" value="{{$wo->order_qty}}" id="workQuantity" placeholder="Work Order Quantity" name="order_qty">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$wo->email}}" required>
                            </div>
                            <div class="col-md-6 form-group">
                            <label>Phone/Mobile<span class="text-danger">*</span></label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{$wo->phone}}" required>
                        </div>
              </div>
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-info">Submit</button>
              <button type="reset" class="btn btn-default float-right">Cancel</button>

            </div>
            </div>
            </form>
            </div>
    </section>
</div>

@include('vendor.component.footer')