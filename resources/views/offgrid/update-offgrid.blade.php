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
      <form action="{{route('update-offgrid')}}" method="POST">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><strong>OFFGRID Form</strong></h3>
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
                  <label for="workOrderNo">Work Order No.</label>
                  <input type="hidden" name="id"  class="form-control"  value="{{$off->id}}">
                  <input type="text" name="work_order_no"  class="form-control"  value="{{$off->work_order_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="workOrderDate">Work Order Date</label>
                  <input type="date" name="work_order_date"  class="form-control"  value="{{$off->work_order_date}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="invoiceNo">Invoice No.</label>
                  <input type="text" name="invoice_no" class="form-control"  value="{{$off->invoice_no}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="invoiceDate">Invoice Date</label>
                  <input type="date" name="invoice_date" class="form-control"  value="{{$off->invoice_date}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiaryName">Beneficiary Name</label>
                  <input type="text" name="beneficiary_name" class="form-control"  value="{{$off->beneficiary_name}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="mobileNo">Mobile No.</label>
                  <input type="tel" name="mobile_no"  class="form-control"  value="{{$off->mobile_no}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="district">District</label>
                  <input type="text" name="district"  class="form-control"  value="{{$off->district}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="plantCapacity">Plant Capacity</label>
                  <input type="number" name="plant_capacity" class="form-control"  value="{{$off->plant_capacity}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialSupply">Material Supply</label>
                  <input type="text" name="material_supply"  class="form-control"  value="{{$off->material_supply}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialSupplyDate">Material Supply Date</label>
                  <input type="date" name="material_supply_date"  class="form-control"  value="{{$off->material_supply_date}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialPayment">Material Payment</label>
                  <input type="text" name="material_payment" class="form-control"  value="{{$off->material_payment}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="contractorName">Contractor Name</label>
                  <input type="text" name="contractor_name"  class="form-control"  value="{{$off->contractor_name}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installation">Installation</label>
                  <input type="text" name="installation" class="form-control"  value="{{$off->installation}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installationDate">Date of Installation</label>
                  <input type="date" name="date_of_installation"  class="form-control"  value="{{$off->date_of_installation}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="plantConnection">Plant Connection</label>
                  <input type="text" name="plant_connection"  class="form-control"  value="{{$off->plant_connection}}">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="satyapan">Satyapan</label>
                  <input type="text" name="satyapan"  class="form-control"  value="{{$off->satyapan}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="pdi">PDI</label>
                  <input type="text" name="pdi"  class="form-control"  value="{{$off->pdi}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="payment">Payment</label>
                  <input type="text" name="payment"  class="form-control"  value="{{$off->payment}}">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" name="amount"  class="form-control"  value="{{$off->amount}}">
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <textarea name="remarks"  class="form-control"> {{$off->remarks}}</textarea>
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