@include('vendor.component.head')
@include('vendor.component.header')

<div class="content-wrapper" style="min-height: fit-content !important;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vendor</li>
                        <li class="breadcrumb-item active">Update Vendor</li>
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
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $vendor->id }}">
                <div class="card card-default">
                    <div class="card-body">
                        <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label>Type of Entity<span class="text-danger">*</span></label>
                                <select name="firmIndi" id="firmIndi" class="form-control" required>
                                    <option value="0" disabled>Select...</option>
                                    <option value="Individual/ Sole Proprietorship" {{ $vendor->firm == "Individual/ Sole Proprietorship" ? 'selected' : '' }} >Individual/ Sole Proprietorship</option>
                                    <option value="Partnership" {{ $vendor->firm == "Partnership" ? 'selected' : '' }} >Partnership</option>
                                    <option value="Limited Liability Partnership (LLP)" {{ $vendor->firm == 'Limited Liability Partnership (LLP)' ? 'selected' : '' }} >Limited Liability Partnership (LLP)</option>
                                    <option value="Private Limited Company" {{ $vendor->firm == 'Private Limited Company' ? 'selected' : '' }} >Private Limited Company</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <label>Name of Company/Firm<span class="text-danger">*</span></label>
                                <input type="text" name="company" id="company" class="form-control" value="{{ $vendor->company }}" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Contact Person Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="contact_person" class="form-control" value="{{ $vendor->name }}" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $vendor->email }}" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Phone/Mobile<span class="text-danger">*</span></label>
                                <input type="number" name="contact" id="contact" class="form-control" value="{{ $vendor->contact }}" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Register to Become<span class="text-danger">*</span></label>
                                <select name="registerFor" id="registerFor" class="form-control" required>
                                    <option value="0" disabled>Select...</option>
                                    <option value="Supplier" {{ $vendor->register_for == 'Supplier' ? 'selected' : '' }}>Supplier</option>
                                    <option value="Distributor" {{ $vendor->register_for == 'Distributor' ? 'selected' : '' }}>Distributor</option>
                                    <option value="Installer" {{ $vendor->register_for == 'Installer' ? 'selected' : '' }}>Installer</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <label>State<span class="text-danger">*</span></label>
                                <select name="state" id="state" class="form-control" required>
                                    <option value="0" disabled>Select...</option>
                                    <option value="Andhra Pradesh" {{ $vendor->state == 'Andhra Pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh" {{ $vendor->state == 'Arunachal Pradesh' ? 'selected' : '' }}>Arunachal Pradesh</option>
                                    <option value="Assam" {{ $vendor->state == 'Assam' ? 'selected' : '' }}>Assam</option>
                                    <option value="Bihar" {{ $vendor->state == 'Bihar' ? 'selected' : '' }}>Bihar</option>
                                    <option {{ $vendor->state == 'Chhattisgarh' ? 'selected' : '' }} value="Chhattisgarh">Chhattisgarh</option>
<option {{ $vendor->state == 'Goa' ? 'selected' : '' }} value="Goa">Goa</option>
<option {{ $vendor->state == 'Gujarat' ? 'selected' : '' }} value="Gujarat">Gujarat</option>
<option {{ $vendor->state == 'Haryana' ? 'selected' : '' }} value="Haryana">Haryana</option>
<option {{ $vendor->state == 'Himachal Pradesh' ? 'selected' : '' }} value="Himachal Pradesh">Himachal Pradesh</option>
<option {{ $vendor->state == 'Jharkhand' ? 'selected' : '' }} value="Jharkhand">Jharkhand</option>
<option {{ $vendor->state == 'Karnataka' ? 'selected' : '' }} value="Karnataka">Karnataka</option>
<option {{ $vendor->state == 'Kerala' ? 'selected' : '' }} value="Kerala">Kerala</option>
<option {{ $vendor->state == 'Madhya Pradesh' ? 'selected' : '' }} value="Madhya Pradesh">Madhya Pradesh</option>
<option {{ $vendor->state == 'Maharashtra' ? 'selected' : '' }} value="Maharashtra">Maharashtra</option>
<option {{ $vendor->state == 'Manipur' ? 'selected' : '' }} value="Manipur">Manipur</option>
<option {{ $vendor->state == 'Meghalaya' ? 'selected' : '' }} value="Meghalaya">Meghalaya</option>
<option {{ $vendor->state == 'Mizoram' ? 'selected' : '' }} value="Mizoram">Mizoram</option>
<option {{ $vendor->state == 'Nagaland' ? 'selected' : '' }} value="Nagaland">Nagaland</option>
<option {{ $vendor->state == 'Odisha' ? 'selected' : '' }} value="Odisha">Odisha</option>
<option {{ $vendor->state == 'Punjab' ? 'selected' : '' }} value="Punjab">Punjab</option>
<option {{ $vendor->state == 'Rajasthan' ? 'selected' : '' }} value="Rajasthan">Rajasthan</option>
<option {{ $vendor->state == 'Sikkim' ? 'selected' : '' }} value="Sikkim">Sikkim</option>
<option {{ $vendor->state == 'Tamil Nadu' ? 'selected' : '' }} value="Tamil Nadu">Tamil Nadu</option>
<option {{ $vendor->state == 'Telangana' ? 'selected' : '' }} value="Telangana">Telangana</option>
<option {{ $vendor->state == 'Tripura' ? 'selected' : '' }} value="Tripura">Tripura</option>
<option {{ $vendor->state == 'Uttar Pradesh' ? 'selected' : '' }} value="Uttar Pradesh">Uttar Pradesh</option>
<option {{ $vendor->state == 'Uttarakhand' ? 'selected' : '' }} value="Uttarakhand">Uttarakhand</option>
<option {{ $vendor->state == 'West Bengal' ? 'selected' : '' }} value="West Bengal">West Bengal</option>
<option {{ $vendor->state == 'Andaman and Nicobar Islands' ? 'selected' : '' }} value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option {{ $vendor->state == 'Chandigarh' ? 'selected' : '' }} value="Chandigarh">Chandigarh</option>
<option {{ $vendor->state == 'Dadra and Nagar Haveli and Daman and Diu' ? 'selected' : '' }} value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
<option {{ $vendor->state == 'Lakshadweep' ? 'selected' : '' }} value="Lakshadweep">Lakshadweep</option>
<option {{ $vendor->state == 'Delhi' ? 'selected' : '' }} value="Delhi">Delhi</option>
<option {{ $vendor->state == 'Puducherry' ? 'selected' : '' }} value="Puducherry">Puducherry</option>
<option {{ $vendor->state == 'Ladakh' ? 'selected' : '' }} value="Ladakh">Ladakh</option>
<option {{ $vendor->state == 'Jammu and Kashmir' ? 'selected' : '' }} value="Jammu and Kashmir">Jammu and Kashmir</option>

                                    <!-- Add the remaining states in similar fashion -->
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>GST Number *</label>
                                <input type="text" name="gst" class="form-control" value="{{ $vendor->gst }}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option disabled>Choose...</option>
                                    <option value="1" {{ $vendor->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $vendor->status == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Account Number</label>
                                <input type="text" class="form-control" name="account_no" value="{{ $vendor->account_no }}" placeholder="Account Number" required />
                            </div>

                            <div class="col-md-6 form-group">
                                <label>IFSC code</label>
                                <input type="text" class="form-control" name="ifsc" value="{{ $vendor->ifsc }}" placeholder="IFSC Code" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="bank" value="{{ $vendor->bank }}" placeholder="Bank Name" required />
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Scope of Work<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="sow" required>{{ $vendor->sow }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@include('vendor.component.footer')

