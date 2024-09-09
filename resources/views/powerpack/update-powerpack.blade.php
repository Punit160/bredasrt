@include('component.head')
@include('component.upksb-header')
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
      <form action="{{route('update-power')}}" method="POST" enctype="multipart/form-data">
        @csrf <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong>Power Pack Form</strong></h3>
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
              <div class="col-12">
                <h6 class="font-weight-bold">Beneficiary Details</h6>
                <hr>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="form-group">
                  <label for="serial_num">Serial No.</label>
                  <input type="hidden" name="id" class="form-control" value="{{$power->id}}">

                  <input type="number" name="serial_num" id="serial_num" class="form-control" value="{{$power->serial_num}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="empanelled_agency">Empanelled Agency</label>
                  <input type="text" name="empanelled_agency" id="empanelled_agency" class="form-control" value="{{$power->empanelled_agency}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiary_name">Beneficiary Name</label>
                  <input type="text" name="beneficiary_name" id="beneficiary_name" class="form-control" value="{{$power->beneficiary_name}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiary_contact">Beneficiary Contact</label>
                  <input type="tel" name="beneficiary_contact" id="beneficiary_contact" class="form-control" value="{{$power->beneficiary_contact}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiary_gender">Beneficiary Gender</label>
                  <input type="text" name="beneficiary_gender" id="beneficiary_gender" class="form-control" value="{{$power->beneficiary_gender}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="latitude">Latitude</label>
                  <input type="text" name="latitude" id="latitude" class="form-control" value="{{$power->latitude}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="longitude">Longitude</label>
                  <input type="text" name="longitude" id="longitude" class="form-control" value="{{$power->longitude}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="district">District</label>
                  <input type="text" name="district" id="district" class="form-control" value="{{$power->district}}">
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="beneficiary_address">Beneficiary Address</label>
                  <textarea name="beneficiary_address" id="beneficiary_address" class="form-control" value="{{$power->beneficiary_address}}">{{$power->beneficiary_address}}</textarea>
                </div>
              </div>

              <div class="col-12 mt-4">
                <h6 class="font-weight-bold">Material Details</h6>
                <hr>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="contractor_name">Contractor Name</label>
                  <input type="text" name="contractor_name" id="contractor_name" class="form-control" value="{{$power->contractor_name}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="material_dispatch">Material Dispatch</label>
                  <input type="text" name="material_dispatch" id="material_dispatch" class="form-control" value="{{$power->material_dispatch}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="material_dispatch_date">Material Dispatch Date</label>
                  <input type="date" name="material_dispatch_date" id="material_dispatch_date" class="form-control" value="{{$power->material_dispatch_date}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installation_status">Installation Status</label>
                  <input type="text" name="installation_status" id="installation_status" class="form-control" value="{{$power->installation_status}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="installation_date">Date of Installation</label>
                  <input type="date" name="installation_date" id="installation_date" class="form-control" value="{{$power->installation_date}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="inspection_status">Site Inspection Status</label>
                  <input type="text" name="inspection_status" id="inspection_status" class="form-control" value="{{$power->inspection_status}}">
                </div>
              </div>
              <div class="col-12 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="inspection_status_date">Date of Site Inspection</label>
                  <input type="date" name="inspection_status_date" id="inspection_status_date" class="form-control" value="{{$power->inspection_status_date}}">
                </div>
              </div>

              <div class="col-12 mt-4">
                <h6 class="font-weight-bold">Payment Details</h6>
                <hr>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="payment_85">Payment 85%</label>
                  <select name="payment_85" id="payment_85" class="form-control">
                    <option value="YES" {{ $power->payment_85 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->payment_85 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="payment_date">Payment Date</label>
                  <input type="date" name="payment_date" id="payment_date" class="form-control" value="{{ $power->payment_date }}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="amc1">AMC 1</label>
                  <select name="amc1" id="amc1" class="form-control">
                    <option value="YES" {{ $power->amc1 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->amc1 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="amc2">AMC 2</label>
                  <select name="amc2" id="amc2" class="form-control">
                    <option value="YES" {{ $power->amc2 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->amc2 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="amc3">AMC 3</label>
                  <select name="amc3" id="amc3" class="form-control">
                    <option value="YES" {{ $power->amc3 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->amc3 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="amc4">AMC 4</label>
                  <select name="amc4" id="amc4" class="form-control">
                    <option value="YES" {{ $power->amc4 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->amc4 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="amc5">AMC 5</label>
                  <select name="amc5" id="amc5" class="form-control">
                    <option value="YES" {{ $power->amc5 == 'YES' ? 'selected' : '' }}>YES</option>
                    <option value="NO" {{ $power->amc5 != 'YES' ? 'selected' : '' }}>NO</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">AMC 1 Document</label>
                  <input type="file" name="amc_1_doc" id="amc_1_doc" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">AMC 2 Document</label>
                  <input type="file" name="amc_2_doc" id="amc_2_doc" class="form-control">
                </div>
              </div>  <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">AMC 3 Document</label>
                  <input type="file" name="amc_3_doc" id="amc_3_doc" class="form-control">
                </div>
              </div>  <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">AMC 4 Document</label>
                  <input type="file" name="amc_4_doc" id="amc_4_doc" class="form-control">
                </div>
              </div>  <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="">AMC 5 Document</label>
                  <input type="file" name="amc_5_doc" id="amc_5_doc" class="form-control">
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <textarea name="remarks" id="remarks" class="form-control"> {{$power->remarks}}</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>

    </div>
  </section>
</div>


</div>
<!-- ./wrapper -->
@include('component.footer')