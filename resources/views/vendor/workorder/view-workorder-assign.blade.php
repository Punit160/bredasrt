@include('vendor.component.table-head')
@include('vendor.component.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Work Orders Assign</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Work Orders Assign</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 my-2">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Work Orders Assign</h3>
                </div>
                <div class="card shadow-none">
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped d-block d-md-table" style="overflow-x: scroll;">
                      <thead>
                        <tr>
                        <th>Sr. No.</th>
                          <td>Assign Id</td>
                          <th>Work Order</th>
                          <th>Vendor</th>
                          <th>State</th>
                          <th>District - Block</th>
                          <th>Start/End Date</th>
                          <th>quantity</th>
                          <th>Remarks</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $number = 1; ?>
                      @foreach($woassign as $woassigns)
                        <tr>
                        <td>{{$number}}</td>
                          <td>{{$woassigns->wassign_id}}</td>
                          <td>{{$woassigns->wo}}</td>
                          <?php $vendor = DB::table('vendors')->select('name')->where('id', $woassigns->vendor_id)->first(); ?>
                          <td>{{$vendor->name}}</td>
                          <td>{{$woassigns->state}}</td>
                          <td>{{$woassigns->district}} - {{$woassigns->block}}</td>
                          <td>{{$woassigns->s_date}} / {{$woassigns->d_date}} </td>
                          <td>{{$woassigns->quantity}}</td>
                          <td>{{$woassigns->remarks}}</td>
                        </tr>
                        <?php $number++; ?>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Sr. No.</th>
                          <td>Assign Id</td>
                          <th>Work Order</th>
                          <th>Vendor</th>
                          <th>State</th>
                          <th>District - Block</th>
                          <th>Start/End Date</th>
                          <th>quantity</th>
                          <th>Remarks</th>
                        </tr>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    @include('component.table-footer')