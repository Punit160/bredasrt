@include('kusum.component.table-header')
@include('kusum.component.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Add Inhouse Dispatch</li>
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

<div class="card-header newHead">
                            <h3 class="card-title text-bold">Add Inhouse Dispatch </h3>
                        </div>
          <form action="{{route('save-dispatch-product')}}" method="POST">
                    @csrf
            <div class="card-body">
              <p class="text-muted small">* marked filled must be filled.</p>
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="dispatchDate">Date of Dispatch *</label>
                  <input type="date" name="datedispatch" id="dispatchDate" class="form-control" required>
                </div>
                
                <div class="col-md-6 form-group">
                  <label for="truckNum">Truck Number *</label>
                  <input type="text" name="truck" id="truckNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="challanNum">Challan Number *</label>
                  <input type="text" name="challan" id="challanNum" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="driverNum">Driver Number *</label>
                  <input type="phone" pattern="[0-9]{10-13}" name="phone" id="driverNum" class="form-control" required>
                </div>
                      

                <div class="col-12 form-group">
                  <label for="ware">Warehouse Name *</label>
                  <select name="warehouse" id="warehouseSelect" class="form-control" required>
                      <option value="dis">Select...</option>
                      @foreach($warehouse as $warehouses)
                      <option value="{{$warehouses->warehouse}}">{{$warehouses->warehouse}}</option>
                      @endforeach
                    </select>
                </div>
                <input type="hidden" name="dispatch_status" value="internal" class="form-control">
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
                            <select name="products[]" id="prodName.0" class="form-control productSelect">
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
             <div class="card-footer" style="background-color: green;  ">
                                <button type="submit" class="btn btn-info  btnSubt  text-bold mr-3">Submit</button>
                                <button type="reset" class="btn btn-info btnCanc  text-bold">
                                    Cancel</button>
                            </div>
          </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
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

@include('kusum.component.footer')


