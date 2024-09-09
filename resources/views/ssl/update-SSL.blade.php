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
    <form action="{{route('update-ssl')}}" method="Post" enctype='multipart/form-data'>
    @csrf
       <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title"><strong>SSL Form</strong></h3>
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
             
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="hidden" name="id"  class="form-control"  value="{{$ssl->id}}">

                        <input type="text" name="project_name" id="projectName" class="form-control"    value="{{$ssl->project_name}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>LOI No.</label>
                        <input type="text" name="loi_no" id="loiNum" class="form-control"    value="{{$ssl->loi_no}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" name="district" id="district" class="form-control"    value="{{$ssl->district}}">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="billSignDate">Bill Sign Date</label>
                        <input type="date" name="bill_sign_date" id="billSignDate" class="form-control"    value="{{$ssl->bill_sign_date}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="workOrderNo">Work Order No.</label>
                        <input type="text" name="work_order_no" id="workOrderNo" class="form-control"    value="{{$ssl->work_order_no}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="invoiceNo">Invoice No.</label>
                        <input type="text" name="invoice_no" id="invoiceNo" class="form-control"    value="{{$ssl->invoice_no}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="invoiceDate">Invoice Date</label>
                        <input type="date" name="invoice_date" id="invoiceDate" class="form-control"    value="{{$ssl->invoice_date}}">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="invoiceQty">Invoice Qty</label>
                        <input type="number" name="invoice_qty" id="invoiceQty" class="form-control"    value="{{$ssl->invoice_qty}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="totalInstalled">Total Installed</label>
                        <input type="number" name="total_installed" id="totalInstalled" class="form-control"    value="{{$ssl->total_installed}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="jcrSubmitted">JCR Submitted</label>
                        <input type="text" name="jcr_submitted" id="jcrSubmitted" class="form-control"    value="{{$ssl->jcr_submitted}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="underSdmVerification">Under SDM Verification</label>
                        <input type="text" name="under_sdm_verification" id="underSdmVerification" class="form-control"    value="{{$ssl->under_sdm_verification}}">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="sdmSubmissionDate">SDM Submission Date</label>
                        <input type="date" name="sdm_submission_date" id="sdmSubmissionDate" class="form-control"    value="{{$ssl->sdm_submission_date}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="notSubmittedToSdm">Not Submitted To SDM</label>
                        <input type="text" name="not_submitted_to_sdm" id="notSubmittedToSdm" class="form-control"    value="{{$ssl->not_submitted_to_sdm}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="underApproved">Under Approved</label>
                        <input type="text" name="under_approved" id="underApproved" class="form-control"    value="{{$ssl->under_approved}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="approvedDate">Approved Date</label>
                        <input type="date" name="approved_date" id="approvedDate" class="form-control"    value="{{$ssl->approved_date}}">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="paymentStatus">Payment Status</label>
                        <input type="text" name="payment_status" id="paymentStatus" class="form-control"    value="{{$ssl->payment_status}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="payment85">85% Payment</label>
                        <input type="number" name="pay_85" id="payment85" class="form-control"    value="{{$ssl->pay_85}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="schemeName">Scheme Name</label>
                        <input type="text" name="scheme_name" id="schemeName" class="form-control"    value="{{$ssl->scheme_name}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="amcPayment1stYear">1st Year AMC Payment</label>
                        <input type="number" name="first_year_amc_payment" id="amcPayment1stYear" class="form-control"    value="{{$ssl->first_year_amc_payment}}">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <div class="form-group">
                        <label for="amcPayment2ndYear">2nd Year AMC Payment</label>
                        <input type="number" name="second_year_amc_payment" id="amcPayment2ndYear" class="form-control"    value="{{$ssl->second_year_amc_payment}}">
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