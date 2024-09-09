@include('vendor.component.head')
@include('vendor.component.header')

<div class="content-wrapper" style="min-height: fit-content !important;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Vendor</li>
                        <li class="breadcrumb-item active">Add Vendor</li>
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
            <form action="{{ route('save-vendor') }}" method="POST">
                @csrf
                <div class="card card-default">
                    <div class="card-body">
                        <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label>Type of Entity<span class="text-danger">*</span></label>
                                <select name="firmIndi" id="firmIndi" class="form-control" required>
                                    <option value="0" selected disabled>Select...</option>
                                    <option value="Individual/ Sole Proprietorship">Individual/ Sole Proprietorship</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)</option>
                                    <option value="Private Limited Company">Private Limited Company</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <label>Name of Company/Firm<span class="text-danger">*</span></label>
                                <input type="text" name="company" id="company" class="form-control" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Contact Person Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="contact_person" class="form-control" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-12 col-md-6 form-group">
                            <label>Phone/Mobile<span class="text-danger">*</span></label>
                            <input type="number" name="contact" id="email" class="form-control" required>
                        </div>
                            <div class="col-12 col-md-6 form-group">
                                <label>Register to Become<span class="text-danger">*</span></label>
                                <select name="registerFor" id="registerFor" class="form-control" required>
                                    <option value="0" selected disabled>Select...</option>
                                    <option value="Supplier">Supplier</option>
                                    <option value="Distributor">Distributor</option>
                                    <option value="Installer">Installer</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <label>State<span class="text-danger">*</span></label>
                                <select name="state" id="state" class="form-control" required>
                                <option value="0" selected disabled>Select...</option>
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
                            <div class="col-md-6 form-group">
                                <label>GST Number *</label>
                                <input type="text" name="gst" class="form-control">
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option disabled selected>Choose...</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Account Number</label>
                                <input type="text" class="form-control" name="account_no" placeholder="Account Number" required />
                            </div>

                            <div class="col-md-6 form-group">
                                <label>IFSC code</label>
                                <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Bank Name</label>
                                <input type="text" class="form-control" name="bank" placeholder="Bank Name" required />
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Scope of Work<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="sow" required></textarea>
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
