@include('vendor.component.head')
@include('vendor.component.header')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>PAYMENT</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">PAYMENT</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  
  <section class="content">
    <div class="container-fluid">
      <form action="{{route('update-payment')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Vendor Payment</h3>
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
              <div class="col-md-6">
                <div class="form-group">
                  <label>WORK ORDER</label>
                  <input type="hidden" name="id" value="{{$payment->id}}">
                  <select class="form-control select2" style="width: 100%;" placeholder="Search Work Orders" name="work_order">
                    <option>Select Work Order</option>
                    @foreach($wo as $wos)
                    <option value="{{$wos->wo_id}}" {{ $wos->wo_id == $payment->work_order ? 'selected' : '' }}>{{$wos->work_order}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Project Head</label>
                  <select class="form-control select2" style="width: 100%;" name="project_head">
                    <option>Select Project Head</option>
                    @foreach($ph as $phs)
                    <option value="{{ $phs->project_head }}" {{ $phs->project_head == $payment->project_head ? 'selected' : '' }}>
                      {{ $phs->project_head }}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Date</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">

                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="payment_date" value="{{  $payment->payment_date}}" />
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Payment Mode</label>
                  <select class="form-control " style="width: 100%;" name="payment_mode">
                    <option>Choose Option</option>
                    <option value="CreditCard" {{ $payment->payment_mode == "CreditCard" ? 'selected' : '' }}>Credit Card</option>
                    <option value="BankTransfer" {{ $payment->payment_mode == "BankTransfer" ? 'selected' : '' }}>Bank Transfer</option>
                    <option value="Cheque" {{ $payment->payment_mode == "Cheque" ? 'selected' : '' }}>Cheque</option>
                    <option value="OnlinePayment" {{ $payment->payment_mode == "OnlinePayment" ? 'selected' : '' }}>Online Payment</option>

                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="Amount12">Amount</label>
                  <input type="number" class="form-control" id="Amount12" placeholder="Amount" name="amount" value="{{$payment->amount}}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="file">File input</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" onchange="document.getElementById('file-label').innerHTML = this.files[0].name" name="file">
                    <label class="custom-file-label" id="file-label" for="file">Choose file</label>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="amountText">Amount in Text</label>
                  <input type="text" class="form-control" id="amount_text" placeholder="Amount in Text" name="amount_text" value="{{$payment->amount_text}}">
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

<!-- Main Footer -->
@include('vendor.component.footer')