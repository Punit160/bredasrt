@include('vendor.component.head')
@include('vendor.component.header')

<div class="content-wrapper" style="min-height: fit-content !important;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Work Order Assign</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">WO</li>
                        <li class="breadcrumb-item active">Work Order Assign</li>
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
                <form action="{{route('save-workassign')}}" method="POST" enctype="multipart/form-data">
                @csrf                        
                    <div class="card card-default">
                            <div class="card-body">
                                <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
                                <div class="row">
                             
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vendor Name *</label>
                                            <select id="vendorName" name="vendor" class="form-control select2" required style="width: 100%;">
                                            <option selected="selected select2" disabled>Choose Vendor...</option>
                                               @foreach($vendor as $vendors)
                                                <option value="{{$vendors->id}}">{{$vendors->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State*</label>
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
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>District</label>
                                            <input type="text" name="district"  class="form-control"  required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Block</label>
                                            <input type="text" name="block"  class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date*</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="s_date" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Order *</label>
                                            <select class="form-control select2" name="workorder" id="WorkOrder" style="width: 100%;" required>
                                            <option selected="selected select2" disabled>Choose Work Order...</option>
                                                @foreach($wo as $wos)
                                                <option value="{{$wos->work_order}}">{{$wos->work_order}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Order Quantity *</label>
                                            <input type="number" name="order_qty"id="order_qty" class="form-control" placeholder="0" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deadline Date *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="date" class="form-control" name="d_date" data-inputmask-alias="datetime"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea name="remarks" class="form-control" id="remarks"></textarea>
                                        </div>
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