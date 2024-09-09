@include('component.table-head')
@include('component.kusum-header')
<!-- / Navbar -->
<!-- Content wrapper -->
<div class="content-wrapper formBack">
  <section class="content-header">
    <div class="container-fluid bg-white rounded p-0 mt-0">
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card" style=" margin-top: -10px;">
            @if(session()->has('status'))
            <div class="alert my-3 p-3 alert-success">
              {{session('status')}}
            </div>
            @endif
            <form class="card-body form-row d-flex flex-md-row flex-column align-items-center  " method="post" action="{{route('import-site-survey')}}" enctype="multipart/form-data">
              @csrf
              <input type="file" class="form-control  col-lg-4 col-12 mr-2 " name="siteexcel">
              <button class="btn btn-dark  mt-2 col-lg-2   mt-lg-0 col-12" style="border-radius: 10px; font-size: 17px;">Update
                sitess
                List</button>
            </form>
          </div>
        </div>
        <div class="col-12 ">
          <div class="card shadow-none">
            <div class="card-header newHead">
              <h3 class="card-title" style="font-weight: bold;">
                Sites Report
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: scroll">
                <thead>
                  <tr>
                    <th>Sr NO</th>
                    <th>Saral ID</th>
                    <th>Application No</th>
                    <th>Empanelled Agency</th>
                    <th>Beneficiary</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Caste</th>
                    <th>Mobile</th>
                    <th>Aadhar Status</th>
                    <th>Location</th>
                    <th>Installation Village</th>
                    <th>Installation District</th>
                    <th> Initial Latitude</th>
                    <th> Initial Longitude</th>
                    <th>Required Pump</th>
                    <th>Pump Sub Type</th>
                    <th>Pump Capacity</th>
                    <th>SPV Module Capacity</th>
                    <th>Pump Make</th>
                    <th>Module Make</th>
                    <th>VFD Make</th>
                    <th>RMS Condition</th>
                    <th>System Installation Date</th>
                    <th>System Inspection Date</th>
                    <th>System Inspection By</th>
                    <th>CFA</th>
                    <th>SFA</th>
                    <th>Beneficiary Share</th>
                    <th>Total Pump Cost</th>
                    <th>Sanction</th>
                    <th>Application Current Status</th>
                    <th>Survey By</th>
                    <th>Father Name</th>
                    <th>Land Coverage</th>
                    <th>Irrigation Mode</th>
                    <th>Water Source</th>
                    <th>Water Depth</th>
                    <th>IMEI</th>
                    <th>Pump No</th>
                    <th>Pump Controller No</th>
                    <th>Solar Panel No</th>
                    <th>Southfacing</th>
                    <th>IS sites Suitable</th>
                    <th>Head Pump</th>
                    <th>Survey Latitude</th>
                    <th>Survey Longitude</th>
                    <th>IS Survey Done</th>
                    <th>Survey Date</th>
                    <th>Is Feasible Application</th>
                    <th>Feasible Date</th>
                    <th>Member ID</th>
                    <th>Family ID</th>
                    <th>Controller Type</th>
                    <th>Old Application Number</th>
                    <th>Boring Dym</th>
                    <th>Action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  @foreach($site as $sites)
                  <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $sites->saral_id }}</td>
                    <td>{{ $sites->application_no }}</td>
                    <td>{{ $sites->empanelled_agency }}</td>
                    <td>{{ $sites->beneficiary }}</td>
                    <td>{{ $sites->gender }}</td>
                    <td>{{ $sites->category }}</td>
                    <td>{{ $sites->caste }}</td>
                    <td>{{ $sites->mobile }}</td>
                    <td>{{ $sites->aadhar_status }}</td>
                    <td>{{ $sites->location }}</td>
                    <td>{{ $sites->installation_village }}</td>
                    <td>{{ $sites->installation_dsitrict }}</td>
                    <td>{{ $sites->latitude }}</td>
                    <td>{{ $sites->longitude }}</td>
                    <td>{{ $sites->required_pump }}</td>
                    <td>{{ $sites->pump_sub_type }}</td>
                    <td>{{ $sites->pump_capacity }}</td>
                    <td>{{ $sites->spv_capacity }}</td>
                    <td>{{ $sites->pump_make }}</td>
                    <td>{{ $sites->module_make }}</td>
                    <td>{{ $sites->vfd_make }}</td>
                    <td>{{ $sites->rms_condtn }}</td>
                    <td>{{ $sites->sys_install_date }}</td>
                    <td>{{ $sites->sys_inspect_date }}</td>
                    <td>{{ $sites->sys_inspectby }}</td>
                    <td>{{ $sites->cfa }}</td>
                    <td>{{ $sites->sfa }}</td>
                    <td>{{ $sites->beneficiary_share }}</td>
                    <td>{{ $sites->total_pump_cost }}</td>
                    <td>{{ $sites->sanction }}</td>
                    <td>{{ $sites->app_current_status }}</td>
                    <td>{{ $sites->survey_by }}</td>
                    <td>{{ $sites->father_name }}</td>
                    <td>{{ $sites->land_coverage }}</td>
                    <td>{{ $sites->irrigationmode }}</td>
                    <td>{{ $sites->water_source }}</td>
                    <td>{{ $sites->water_depth }}</td>
                    <td>{{ $sites->imei }}</td>
                    <td>{{ $sites->pump_no }}</td>
                    <td>{{ $sites->pump_controller_no }}</td>
                    <td>{{ $sites->solar_panel_no }}</td>
                    <td>{{ $sites->southfacing }}</td>
                    <td>{{ $sites->site_suitable }}</td>
                    <td>{{ $sites->head_pump }}</td>
                    <td>{{ $sites->survey_latitude }}</td>
                    <td>{{ $sites->survey_longitude }}</td>
                    <td>{{ $sites->survey_done }}</td>
                    <td>{{ $sites->survey_date }}</td>
                    <td>{{ $sites->is_feasible_app }}</td>
                    <td>{{ $sites->feasible_date }}</td>
                    <td>{{ $sites->member_id }}</td>
                    <td>{{ $sites->family_id }}</td>
                    <td>{{ $sites->controller_type }}</td>
                    <td>{{ $sites->old_app }}</td>
                    <td>{{ $sites->boring_dym }}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a class="dropdown-item" href="#" onclick="openMode1()"><span><i class="fa fa-eye"></i></span>&emsp;View</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('edit', ['id' => $sites->id]) }}"><i class="fa fa-pen-to-square"></i>&emsp;Edit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item"  href="{{ route('delete', ['id' => $sites->id]) }}"><span><i class="fa fa-trash"></i></span>&emsp;Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- / Content -->
<!-- Footer -->
@include("component.table-footer");