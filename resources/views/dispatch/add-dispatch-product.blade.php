@include('component.head')
@if($state == 'bihar')
@include('component.header')
@elseif($state == 'up')
@include('component.upksb-header')
@else
@include('component.jammu-header')
@endif
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Outer Dispatch</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Add Outer Dispatch</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Request Product -->
        <div class="card">
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
          <form action="{{route('outer-dispatch')}}" method="POST">
                    @csrf
            <div class="card-body">
              <p class="text-muted small">* marked filled must be filled.</p>
              <div class="row">
                 <input type="hidden" name="state"  class="form-control" value="{{$state}}" required>
                <div class="col-md-4 form-group">
                  <label for="dispatchDate">Date of Dispatch *</label>
                  <input type="date" name="datedispatch" id="dispatchDate" class="form-control" required>
                </div>
                
                
                <div class="col-md-4 form-group ">
                  <label for="ware">Vendor Name *</label>
                  <select name="vendor" class="form-control" required>
                     <option value="dis">Select...</option>
                      @foreach($vendor as $vendors)
                      <option value="{{$vendors->id}}">{{$vendors->name}} - {{$vendors->vendor_id}}</option>
                      @endforeach
                    </select>
                </div>
                
                <div class="col-md-4 form-group">
                  <label for="truckNum">Truck Number *</label>
                  <input type="text" name="truck" id="truckNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="challanNum">Challan Number *</label>
                  <input type="text" name="challan" id="challanNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="driverNum">Driver Number *</label>
                  <input type="number" pattern="[0-9]{10-13}" name="phone" id="driverNum" class="form-control" required>
                </div>
                

                <div class="col-md-4 form-group ">
                  <label for="siteName">Site Name *</label>
                  <input type="text" name="site_name" id="siteName" class="form-control">
                </div>
                
                <div class="col-md-4 form-group ">
                  <label for="location">Location *</label>
                  <input type="text" name="location" id="location" class="form-control">
                </div>

                <div class="col-md-4 form-group ">
                  <label for="ware">Warehouse Name *</label>
                  <select name="d_warehouse" id="warehouseSelect" class="form-control" required>
                     <option value="dis">Select...</option>
                      @foreach($warehouse as $warehouses)
                      <option value="{{$warehouses->warehouse}}">{{$warehouses->warehouse}}</option>
                      @endforeach
                    </select>
                </div>
                
                  <div class="col-md-12 form-group ">
                  <label for="location">Remarks *</label>
                  <textarea class="form-control" rows="4" cols="50" name="remarks"></textarea>
                </div> 


                <input type="hidden" name="dispatch_status" value="external" class="form-control">
                <input type="hidden" name="dispatch_by" value="admin" class="form-control">
                <div class="col-12 form-group">
                  <table class="table table-bordered table-hoverable d-block d-md-table" style="overflow-x:auto">
                    <thead>
                      <tr>
                        <th style="width:50%;">Product Name</th>
                        <th style="width:20%;">Quantity</th>
                        <th style="width:20%;">Unit</th>
                        <th style="text-align: center;"><i class="fa fa-trash-alt"></i></th>
                      </tr>
                    </thead>
                    <tbody id="prodTable">
                    <tr>
                          <td style="width:50%;">
                            <select name="products[]" id="prodName" class="form-control productSelect pro">
                              <option value="dis">Select...</option>
                            </select>
                          </td>
                          <td style="width:20%;"><input type="number" name="quantitiess[]" id="prodQuant" class="form-control"></td>
                          <td style="width:20%;"><input type="text" name="units[]" id="unit" class="form-control"></td>
                          <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                      <td colspan="3">
                        <button type="button" class="btn btn-secondary rounded-circle" onclick="addFields()"><i class="fa fa-plus"></i></button>
                      </td>
                    </tfoot>
                  </table>
                </div>
                
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Submit</button>
              <button class="btn btn-default float-right">Cancel</button>
            </div>
          </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->

 <script>
  function toggler(input){
    let option = input.value;
    if(option == 'internal'){
      document.getElementById('showInternal').style.display = "block";
      document.getElementById('showInternal').children[1].setAttribute('required', true);
      for(i=0;i<3;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "none";
        document.getElementsByClassName('hiddenDimak')[i].children[1].value = "";
        document.getElementsByClassName('hiddenDimak')[i].children[1].removeAttribute('required');
      }
    }
    else if(option == 'external'){
      for(i=0;i<3;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "block";
        document.getElementsByClassName('hiddenDimak')[i].children[1].setAttribute('required', true);
      }
      document.getElementById('showInternal').style.display = "none";
      document.getElementById('showInternal').children[1].value = "dis";
      document.getElementById('showInternal').children[1].removeAttribute('required');
    }
    else{
      for(i=0;i<3;i++){
        document.getElementsByClassName('hiddenDimak')[i].style.display = "none";
        document.getElementsByClassName('hiddenDimak')[i].children[1].value = "";
        document.getElementsByClassName('hiddenDimak')[i].children[1].removeAttribute('required');
      }
      document.getElementById('showInternal').style.display = "none";
      document.getElementById('showInternal').children[1].value = "dis";
      document.getElementById('showInternal').children[1].removeAttribute('required');
    }
  }
</script>

<!-- <script>
const warehouseSelect=document.getElementById("warehouseSelect")
let value;

warehouseSelect.addEventListener('change',(e)=>{
const selectedVal=e.target.value;
value=selectedVal;
})

let count = 1;
function deleteRow(field){
  let row = field.parentElement.parentElement;
  row.remove();
} 

function addFields(){
  let table = document.getElementById('prodTable');
  let newRow = document.createElement('tr');
  newRow.innerHTML = `
  <td style="width:50%;">
  <select name="products[]" id="prodName.${count}" class="form-control productSelect">
  <option value="dis">Select...</option>s
  </select>
  </td>
  <td style="width:20%;"><input type="number" name="quantitiess[]" id="prodQuant" class="form-control"></td>
  <td style="width:20%;"><input type="text" name="units[]" id="unit" class="form-control"></td>
  <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
  `;
  table.appendChild(newRow);
  count++;
} 
</script>

<script>
    $(document).ready(function () {
        $('#warehouseSelect').change(function () {
            var warehouseId = $(this).val();

            // Make AJAX request
            $.ajax({
                url: '/get-products/' + warehouseId,
                type: 'GET',
                success: function (data) {
                    // Clear and populate product dropdown
                    $('.productSelect').empty();
                    $.each(data, function (key, value) {
                        $('.productSelect').append('<option value="' + value.id + '">' + value.name + ' - ' + value.capacity + ' | Qty: ' + value.quantity + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script> -->



<script>
    const warehouseSelect = document.getElementById("warehouseSelect");
    let value;

    warehouseSelect.addEventListener('change', (e) => {
        const selectedVal = e.target.value;
        value = selectedVal;
    });

    let count = 1;

    function deleteRow(field) {
        let row = field.parentElement.parentElement;
        row.remove();
    }

    function addFields() {
        let table = document.getElementById('prodTable');
        let newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td style="width:50%;">
                <select name="products[]" id="prodName.${count}" class="form-control productSelect">
                    <option value="dis">Select...</option>
                </select>
            </td>
            <td style="width:20%;"><input type="number" name="quantitiess[]" id="prodQuant" class="form-control"></td>
            <td style="width:20%;"><input type="text" name="units[]" id="unit" class="form-control"></td>
            <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
        `;
        table.appendChild(newRow);
        $.ajax({
            url: '/get-products/' + value,
            type: 'GET',
            success: function (data) {
                const productSelect = newRow.querySelector('.productSelect');
                productSelect.innerHTML = '<option value="dis">Select...</option>';
                
                data.forEach(function (product) {
                    productSelect.innerHTML += `<option value="${product.id}">${product.name} - ${product.capacity} | Qty: ${product.quantity}</option>`;
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function () {
            }
        });

        count++;
    }
</script>

@include('component.footer')


