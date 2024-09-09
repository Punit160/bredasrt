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
      <form action="{{ route('update-ongrid') }}" method="POST">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong>ON GRID FORM</strong></h3>
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
              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>WORK ORDER NO.</label>
                  <input type="hidden" name="id" value="{{$on->id}}">
                  <input type="text" name="work_order_no" id="workOrderNum" class="form-control"  value="{{$on->work_order_no}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>WORK ORDER DATE.</label>
                  <input type="date" name="work_order_date" id="workOrderDate" class="form-control"  value="{{$on->work_order_date}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>BENEFICIARY NAME</label>
                  <input type="text" name="beneficiary_name" id="beneficiaryName" class="form-control"  value="{{$on->beneficiary_name}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>CONTACT NO.</label>
                  <input type="tel" name="contact_number" id="contactNum" class="form-control"  value="{{$on->contact_number}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>DISTRICT</label>
                  <input type="text" name="district" id="district" class="form-control"  value="{{$on->district}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>PIN</label>
                  <input type="number" name="pin" id="pin" class="form-control"  value="{{$on->pin}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>INVOICE NO.</label>
                  <input type="number" name="invoice_no" id="invoiceNum" class="form-control"  value="{{$on->invoice_no}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>INVOICE DATE</label>
                  <input type="date" name="invoice_date" id="invoiceDate" class="form-control"  value="{{$on->invoice_date}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>MATERIAL SUPPLY</label>
                  <input type="text" name="material_supply" id="materialSuply" class="form-control"  value="{{$on->material_supply}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>MATERIAL SUPPLY DATE</label>
                  <input type="date" name="material_supply_date" id="materialSuppDate" class="form-control"  value="{{$on->material_supply_date}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>MATERIAL PAYMENT</label>
                  <input type="text" name="material_payment" id="materialPay" class="form-control"  value="{{$on->material_payment}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>PLANT CAPACITY</label>
                  <input type="number" name="plant_capacity" id="plantCapacity" class="form-control"  value="{{$on->plant_capacity}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>CONTRACTOR NAME</label>
                  <input type="text" name="contractor_name" id="contractorName" class="form-control"  value="{{$on->contractor_name}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>FIRM</label>
                  <input type="text" name="firm" id="firm" class="form-control"  value="{{$on->firm}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>CONTRACTOR NUMBER</label>
                  <input type="number" name="contractor_number" id="contractorNum" class="form-control"  value="{{$on->contractor_number}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="form-group">
                  <label>METER STATUS</label>
                  <input type="text" name="meter_status" id="meterStatus" class="form-control"  value="{{$on->meter_status}}">
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>85% PAYMENT</label>
                  <input type="text" name="payment_85" id="pay85" class="form-control"  value="{{$on->payment_85}}">
                </div>
              </div>

              <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="form-group">
                  <label>PAYMENT DATE</label>
                  <input type="date" name="payment_date" id="payDate" class="form-control"  value="{{$on->payment_date}}">
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label>REMARKS</label>
                  <textarea name="remarks" id="remarks" class="form-control"  > {{$on->remarks}}</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary px-3" type="submit">Submit</button>
            <button class="btn btn-default px-3 float-right">Cancel</button>
          </div>
        </div>
      </form>


    </div>
  </section>
</div>
@include('component.footer')