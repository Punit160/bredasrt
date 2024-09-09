@include('vendor.component.head')
@include('vendor.component.header')

        <div class="content-wrapper" style="min-height: fit-content !important;">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Assign Vendor Complaint</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Work Order Assign</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>


            <section class="content">
                <div class="container-fluid">
                    <form action="{{route('save-vendor-complaint')}}" method="POST" enctype="multipart/form-data">
                        @csrf <div class="card card-default">
                            <div class="card-body">
                                <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vendor Name *</label>
                                            <select id="vendorName" name="vendor" class="form-control select2" required style="width: 100%;">
                                                @foreach($vendor as $vendors)
                                                <option value="{{$vendor->vendor_id}}">{{$vendor->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Assign Date*</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="assign_date" data-inputmask-alias="datetime" value="{{date('m/d/Y')}}"
                                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                                            </div>
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