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
      <form action="{{route('save-offgrid')}}" method="POST">
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
                  <input type="text" name="work_order_no" id="workOrderNo" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="workOrderDate">Work Order Date</label>
                  <input type="date" name="work_order_date" id="workOrderDate" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="invoiceNo">Invoice No.</label>
                  <input type="text" name="invoice_no" id="invoiceNo" class="form-control">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="invoiceDate">Invoice Date</label>
                  <input type="date" name="invoice_date" id="invoiceDate" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="beneficiaryName">Beneficiary Name</label>
                  <input type="text" name="beneficiary_name" id="beneficiaryName" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="mobileNo">Mobile No.</label>
                  <input type="tel" name="mobile_no" id="mobileNo" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="district">District</label>
                  <input type="text" name="district" id="district" class="form-control">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="plantCapacity">Plant Capacity</label>
                  <input type="number" name="plant_capacity" id="plantCapacity" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialSupply">Material Supply</label>
                  <input type="text" name="material_supply" id="materialSupply" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialSupplyDate">Material Supply Date</label>
                  <input type="date" name="material_supply_date" id="materialSupplyDate" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="materialPayment">Material Payment</label>
                  <input type="text" name="material_payment" id="materialPayment" class="form-control">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="contractorName">Contractor Name</label>
                  <input type="text" name="contractor_name" id="contractorName" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installation">Installation</label>
                  <input type="text" name="installation" id="installation" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="installationDate">Date of Installation</label>
                  <input type="date" name="date_of_installation" id="installationDate" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="plantConnection">Plant Connection</label>
                  <input type="text" name="plant_connection" id="plantConnection" class="form-control">
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3 mb-3">
                <div class="form-group">
                  <label for="satyapan">Satyapan</label>
                  <input type="text" name="satyapan" id="satyapan" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="pdi">PDI</label>
                  <input type="text" name="pdi" id="pdi" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="payment">Payment</label>
                  <input type="text" name="payment" id="payment" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" name="amount" id="amount" class="form-control">
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <textarea name="remarks" id="remarks" class="form-control"></textarea>
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