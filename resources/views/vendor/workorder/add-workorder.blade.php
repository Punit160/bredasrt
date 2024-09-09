@include('vendor.component.head')
@include('vendor.component.header')

<div class="content-wrapper" style="min-height: fit-content !important;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Work Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">WO</li>
                        <li class="breadcrumb-item active">Add Work Order</li>
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
            
            <form action="{{route('save-workorder')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card card-default">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="workorder1">Work Order<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="workorder1" placeholder="Work Order" name="workorder">
                    </div>
                    <div class="form-group">
                      <label for="workorderno1">Work Order Number<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="workorderno1" placeholder="Work Order Number" name="wo_number">
                    </div>
                    <div class="form-group">
                      <label for="file">File input</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file_input">
                        <label class="custom-file-label" id="file-label" for="file" name="file_input">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>State <span class="text-danger">*</span></label>
                      <select class="form-control select2 " style="width: 100%;" name="state">
                        <option selected="selected select2" disabled>Choose State...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                  <option value="Assam">Assam</option>
                                  <option value="Bihar">Bihar</option>
                                  <option value="Chhattisgarh">Chhattisgarh</option>
                                  <option value="Goa">Goa</option>
                                  <option value="Gujarat">Gujarat</option>
                                  <option value="Haryana">Haryana</option>
                                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                                  <option value="Jharkhand">Jharkhand</option>
                                  <option value="Karnataka">Karnataka</option>
                                  <option value="Kerala">Kerala</option>
                                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                                  <option value="Maharashtra">Maharashtra</option>
                                  <option value="Manipur">Manipur</option>
                                  <option value="Meghalaya">Meghalaya</option>
                                  <option value="Mizoram">Mizoram</option>
                                  <option value="Nagaland">Nagaland</option>
                                  <option value="Odisha">Odisha</option>
                                  <option value="Punjab">Punjab</option>
                                  <option value="Rajasthan">Rajasthan</option>
                                  <option value="Sikkim">Sikkim</option>
                                  <option value="Tamil Nadu">Tamil Nadu</option>
                                  <option value="Telangana">Telangana</option>
                                  <option value="Tripura">Tripura</option>
                                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                                  <option value="Uttarakhand">Uttarakhand</option>
                                  <option value="West Bengal">West Bengal</option>
                                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                  <option value="Chandigarh">Chandigarh</option>
                                  <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                  <option value="Lakshadweep">Lakshadweep</option>
                                  <option value="Delhi">Delhi</option>
                                  <option value="Puducherry">Puducherry</option>
                                  <option value="Ladakh">Ladakh</option>
                                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                </select>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="projecthead1">Project Head <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="projecthead1" placeholder="Project Head" name="project_head">
                    </div>
                    <div class="form-group">
                      <label for="workQuantity">Order Quantity <span class="text-danger">*</span></label>
                      <input type="number" class="form-control" id="workQuantity" placeholder="Work Order Quantity" name="order_qty">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-md-6 form-group">
                            <label>Phone/Mobile<span class="text-danger">*</span></label>
                            <input type="number" name="contact" id="email" class="form-control" required>
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