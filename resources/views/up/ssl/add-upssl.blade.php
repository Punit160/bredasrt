@include('component.head')
@include('component.upksb-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>UP SSL</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">UP SSL</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
    <form action="{{route('save-upssl')}}" method="Post" enctype='multipart/form-data'>
      @csrf
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">UP SSL</h3>
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
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>S. No.</label>
                <input type="number" name="s_no" id="s_no" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Financial Year</label>
                <input type="number" name="fy" id="fy" class="form-control" placeholder="YYYY">
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control">
              </div>
            </div> 
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>District</label>
                <input type="text" name="district" class="form-control">

              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Village</label>
                <input type="text" name="village" class="form-control">

              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Scheme</label>
                <input type="text" name="scheme" id="scheme" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>UID</label>
                <input type="text" name="uid" id="uid" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Beneficiary Name</label>
                <input type="text" name="beneficiary_name" id="beneficiary_name" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Contact Number</label>
                <input type="number" name="contact" id="contact" class="form-control">
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Installed Date</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="installed_date">
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label>Payment 85%</label>
                <select name="payment_85" id="payment_85" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="amc1">AMC 1st Yr 3%</label>
                <select name="amc1" id="amc1" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="amc2">AMC 2nd Yr 3%</label>
                <select name="amc2" id="amc2" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="amc3">AMC 3rd Yr 3%</label>
                <select name="amc3" id="amc3" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="amc4">AMC 4th Yr 3%</label>
                <select name="amc4" id="amc4" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="amc5">AMC 5th Yr 3%</label>
                <select name="amc5" id="amc5" class="form-control">
                  <option >Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="jcr">Document Submit</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="doc_submit">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <label for="remarks">Remarks</label>
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
    </div>
</form>
  </section>
</div>

@include('component.footer')