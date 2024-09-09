@include('kusum.component.header')
@include('kusum.component.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item ">Add Product Request</li>
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
        <form action="{{route('save-request')}}" method="POST">
                    @csrf
            <div class="card-body">
              <p class="text-muted small">* marked filled must be filled.</p>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="reqDate">Product Required Date *</label>
                    <input type="date" name="required_date" id="reqDate" class="form-control" required>
                  </div>

                  <div class="col-md-6 form-group">
                    <label for="ware">Warehouse Name *</label>
                    <select name="warehouse" id="ware" class="form-control" required>
                      <option value="dis">Select...</option>
                      @foreach($warehouse as $warehouses)
                      <option value="{{$warehouses->warehouse}}">{{$warehouses->warehouse}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-12 form-group">
                    <label for="remarks">Remarks</label>
                    <textarea name="remarks" id="remarks" cols="30" class="form-control" rows="5"></textarea>
                  </div>
                  
                  <div class="col-12 form-group">
                    <table class="table table-bordered table-hoverable d-block d-md-table" style="overflow-x:auto">
                      <thead>
                        <tr>
                          <th style="width:50%;">Product Name</th>
                          <th style="width:20%;">Quantity</th>
                          <th style="width:20%;">Unit</th>
                          <th text-align: center;"><i class="fa fa-trash-alt"></i></th>
                        </tr>
                      </thead>
                      <tbody id="prodTable">
                        <tr>
                          <td style="width:50%;">
                            <select name="products[]" id="prodName" class="form-control">
                              <option value="dis">Select...</option>
                              @foreach($product as $products)
                              <option value="{{$products->id}}">{{$products->name}} | {{$products->capacity}}</option>
                              @endforeach
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

function deleteRow(field){
  let row = field.parentElement.parentElement;
  row.remove();
} 

function addFields(){
  let table = document.getElementById('prodTable');
  let newRow = document.createElement('tr');
  newRow.innerHTML = `
  <td style="width:50%;">
    <select name="products[]" id="prodName" class="form-control">
      <option value="dis">Select...</option>
      @foreach($product as $products)
                            <option value="{{$products->id}}">{{$products->name}} | {{$products->capacity}}</option>
                            @endforeach
    </select>
  </td>
  <td style="width:20%;"><input type="number" name="quantitiess[]" id="prodQuant" class="form-control"></td>
  <td style="width:20%;"><input type="text" name="units[]" id="unit" class="form-control"></td>
  <td align="center"><button class="btn btn-danger" type="button" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
  `;
  table.appendChild(newRow);
} 
</script>
@include('kusum.component.footer')


