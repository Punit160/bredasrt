@include('component.head')
@include('component.header')
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
      <form action="{{route('update-bssl')}}" method="Post" enctype='multipart/form-data'>
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong> Update Bihar SSL Form</strong></h3>
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
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="unique_id">Unique No</label>
                  <input type="hidden" name="id" class="form-control" value="{{$ssl->id}}">

                  <input type="text" name="unique_id" id="unique_id" class="form-control" value="{{$ssl->unique_id}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="unique_id">Work Order No</label>
                  <input type="text" name="wo_no" id="wo_no" class="form-control" value="{{$ssl->wo_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="district">Phase</label>
                  <input type="text" name="phase" id="phase" class="form-control" value="{{$ssl->phase}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="district">District</label>

                  <input type="text" name="district" id="district" class="form-control" value="{{$ssl->district}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="block">Block</label>
                  <input type="text" name="block" id="block" class="form-control" value="{{$ssl->block}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="panchyat">Panchyat</label>
                  <input type="text" name="panchyat" id="panchyat" class="form-control" value="{{$ssl->panchyat}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="wardNo">Ward No.</label>
                  <input type="text" name="ward_no" id="wardNo" class="form-control" value="{{$ssl->ward_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="poleNo">Pole No.</label>
                  <input type="text" name="pole_no" id="poleNo" class="form-control" value="{{$ssl->pole_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiaryName">Beneficiary Name</label>
                  <input type="text" name="beneficiary_name" id="beneficiaryName" class="form-control" value="{{$ssl->beneficiary_name}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="contactNo">Contact No.</label>
                  <input type="text" min="1" name="contact_no" id="contactNo" class="form-control" value="{{$ssl->contact_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="text" name="latitude" id="latitude" class="form-control" value="{{$ssl->latitude}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="longitude">Longitude</label>
                  <input type="text" name="longitude" id="longitude" class="form-control" value="{{$ssl->longitude}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="luminaryNo">Luminary No.</label>
                  <input type="text" name="luminary_no" id="luminaryNo" class="form-control" value="{{$ssl->luminary_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="simNo">SIM No.</label>
                  <input type="text" name="sim_no" id="simNo" class="form-control" value="{{$ssl->sim_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="batterySerialNo">Battery Serial No.</label>
                  <input type="text" name="battery_serial_no" id="batterySerialNo" class="form-control" value="{{$ssl->battery_serial_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="moduleNo">Module No.</label>
                  <input type="text" name="module_no" id="moduleNo" class="form-control" value="{{$ssl->module_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Supply</label>
                  <select name="supply" id="" class="form-control">
                  <option value="YES" {{ $ssl->supply == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->supply != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>  <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Material Inspection</label>
                  <select name="material_inspection" id="" class="form-control">
                  <option value="YES" {{ $ssl->material_inspection == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->material_inspection != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Installation</label>
                  <select name="installation" id="" class="form-control">
                  <option value="YES" {{ $ssl->installation == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->installation != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="dateOfInstallation">Date of Installation</label>
                  <input type="text" name="date_of_installation" id="dateOfInstallation" class="form-control" value="{{$ssl->date_of_installation}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installedBy">Installed By</label>
                  <input type="text" name="installed_by" id="installedBy" class="form-control" value="{{$ssl->installed_by}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="inspectedByBreda">Inspected By BREDA</label>
                  <select name="inspected_by_breda" id="inspectedByBreda" class="form-control">
                  <option value="YES" {{ $ssl->inspected_by_breda == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->inspected_by_breda != 'YES' ? 'selected' : '' }}>NO</option>

                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="inspectionDate">Inspection Date</label>
                  <input type="text" name="inspection_date" id="inspectionDate" class="form-control" value="{{$ssl->inspection_date}}">
                </div>
              </div>
             <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="bill_raised_40">Bill Raised 40%</label>
                  <select name="bill_raised_40" id="bill_raised_40" class="form-control">
                    <option value="YES" {{ $ssl->bill_raised_40 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->bill_raised_40 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Payment 40%</label>
                  <select name="payment_40" id="" class="form-control">
                  <option value="YES" {{ $ssl->payment_40 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->payment_40 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Bill Raised 5%</label>
                  <select name="bill_raised_5" id="" class="form-control">
                  <option value="YES" {{ $ssl->bill_raised_5 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->bill_raised_5 != 'YES' ? 'selected' : '' }}>NO</option>

                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Payment 5%</label>
                  <select name="payment_5" id="" class="form-control">
                  <option value="YES" {{ $ssl->payment_5 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->payment_5 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Bill Raised 25%</label>
                  <select name="bill_raised_25" id="" class="form-control">
                  <option value="YES" {{ $ssl->bill_raised_25 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->bill_raised_25 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Payment 25%</label>
                  <select name="payment_25" id="" class="form-control">
                  <option value="YES" {{ $ssl->payment_25 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->payment_25 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>

              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Amc 1st 6</label>
                  <select name="amc_1st_6" id="" class="form-control">
                  <option value="YES" {{ $ssl->amc_1st_6 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->amc_1st_6 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Amc 2nd 6</label>
                  <select name="amc_2nd_6" id="" class="form-control">
                  <option value="YES" {{ $ssl->amc_2nd_6 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->amc_2nd_6 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Amc 3rd 6</label>
                  <select name="amc_3rd_6" id="" class="form-control">
                  <option value="YES" {{ $ssl->amc_3rd_6 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->amc_3rd_6 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Amc 4th 6 </label>
                  <select name="amc_4th_6" id="" class="form-control">
                  <option value="YES" {{ $ssl->amc_4th_6 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->amc_4th_6 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Amc 5th 6</label>
                  <select name="amc_5th_6" id="" class="form-control">
                  <option value="YES" {{ $ssl->amc_5th_6 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->amc_5th_6 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">Rms in Portal</label>
                  <select name="rms_in_portal" id="" class="form-control">
                  <option value="YES" {{ $ssl->rms_in_portal == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $ssl->rms_in_portal != 'YES' ? 'selected' : '' }}>NO</option>

                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" name="status" id="status" class="form-control" value="{{$ssl->status}}">
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-12  mb-3">
                <div class="form-group">
                  <label for="image">Upload Image</label>
                  <input type="file" name="image" id="image" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary px-3">Submit</button>
            <button class="btn btn-default px-3 float-right">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

@include('component.footer')