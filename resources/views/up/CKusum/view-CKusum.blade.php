@include('component.table-head')
@include('component.upksb-header')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>KUSUM C</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">KUSUM C</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">KUSUM C Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped d-block" style="overflow-x: auto; text-wrap: nowrap;">
                    <thead>
                      <tr>
                        <th style="text-wrap: nowrap;">Sr No.</th>
                        <th style="text-wrap: nowrap;">Lot No.</th>
                        <th style="text-wrap: nowrap;">Customer No.</th>
                        <th style="text-wrap: nowrap;">Farmer Name</th>
                        <th style="text-wrap: nowrap;">Father Name</th>
                        <th style="text-wrap: nowrap;">Contact No.</th>
                        <th style="text-wrap: nowrap;">Adhar No.</th>
                        <th style="text-wrap: nowrap;">Village</th>
                        <th style="text-wrap: nowrap;">Post</th>
                        <th style="text-wrap: nowrap;">Tehsil</th>
                        <th style="text-wrap: nowrap;">District</th>
                        <th style="text-wrap: nowrap;">PIN</th>
                        <th style="text-wrap: nowrap;">INVOICE No.</th>
                        <th style="text-wrap: nowrap;">DATE</th>
                        <th style="text-wrap: nowrap;">Pump Capacity</th>
                        <th style="text-wrap: nowrap;">Contractor Name</th>
                        <th style="text-wrap: nowrap;">KLK Firm</th>
                        <th style="text-wrap: nowrap;">Contact No.</th>
                        <th style="text-wrap: nowrap;">Email ID</th>
                        <th style="text-wrap: nowrap;">Survey Done</th>
                        <th style="text-wrap: nowrap;">Latitude</th>
                        <th style="text-wrap: nowrap;">Longitude</th>
                        <th style="text-wrap: nowrap;">Survey received</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">INVERTER</th>
                        <th style="text-wrap: nowrap;">STRUCTURE</th>
                        <th style="text-wrap: nowrap;">MODULES</th>
                        <th style="text-wrap: nowrap;">BOS</th>
                        <th style="text-wrap: nowrap;">DATE</th>
                        <th style="text-wrap: nowrap;">Foundation</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Structure</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Module Mounting</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inverter Installation</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">HOC</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Photo</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inspection</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Net Metering</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">50% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">35% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">15% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Payment Status</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inverter No</th>
                        <th style="text-wrap: nowrap;">RMS ID</th>
                        <th style="text-wrap: nowrap;">IMEI No.</th>
                        <th style="text-wrap: nowrap;">Module SR No.</th>
                        <th style="text-wrap: nowrap;">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $number = 1; ?>
                      @foreach($Ckusums as $Ckusum )
                      <tr>
                        <th>{{$number}}</th>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->lot_no }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_customer_no }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_farmer_name }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_father_name }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_contact }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_aadhar }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_village }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_post }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_tehsil }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_district }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_pin }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_invoice_no }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->f_invoice_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->pump_capacity }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->c_contractor_name }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->KLK_Firm }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->c_contact_no }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->c_email }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->sd_survey_done }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->sd_latitude }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->sd_longitude }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->sd_survey_received }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->sd_survey_received_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->mt_inverter }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->mt_structure }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->mt_modules }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->mt_bos }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->mt_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_foundation }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_foundation_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_structure }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_structure_data }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_module_mounting }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_module_mounting_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_inverter_installation }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->ins_inverter_installation_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->doc_hoc }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->doc_hoc_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->doc_hoc_photo }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->doc_hoc_photo_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->file_submission }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->file_submission_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->net_metering }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->net_metering_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_50 }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_50_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_35 }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_35_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_15 }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->payment_15_date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->c_payment_status }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->c_payment__date }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->Inverter_no }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->rmsid }}</td>
                        <td style="text-wrap: nowrap;">{{ $Ckusum->imei }}</td>
                        <td>
                      <ul>
                        @if ($Ckusum->CKusumModulee)
                        @foreach ($Ckusum->CKusumModulee as $module)
                        <li>{{ $module->sr_no }}</li>
                        @endforeach
                        @endif
                      </ul>
                    </td>

                        <td style="white-space: nowrap;">
                          <div class="btn-group">
                            <button type="button" class="btn btn-info">Action</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                              <a class="dropdown-item" href="{{asset('edit-kusum-C/'. $Ckusum->id)}}">Edit</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="
                              #">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php $number++; ?>
                      @endforeach

                    </tbody>
                    <tfoot>
                      <tr>
                        <th style="text-wrap: nowrap;">Sr No.</th>
                        <th style="text-wrap: nowrap;">Lot No.</th>
                        <th style="text-wrap: nowrap;">Customer No.</th>
                        <th style="text-wrap: nowrap;">Farmer Name</th>
                        <th style="text-wrap: nowrap;">Father Name</th>
                        <th style="text-wrap: nowrap;">Contact No.</th>
                        <th style="text-wrap: nowrap;">Adhar No.</th>
                        <th style="text-wrap: nowrap;">Village</th>
                        <th style="text-wrap: nowrap;">Post</th>
                        <th style="text-wrap: nowrap;">Tehsil</th>
                        <th style="text-wrap: nowrap;">District</th>
                        <th style="text-wrap: nowrap;">PIN</th>
                        <th style="text-wrap: nowrap;">INVOICE No.</th>
                        <th style="text-wrap: nowrap;">DATE</th>
                        <th style="text-wrap: nowrap;">Pump Capacity</th>
                        <th style="text-wrap: nowrap;">Contractor Name</th>
                        <th style="text-wrap: nowrap;">KLK Firm</th>
                        <th style="text-wrap: nowrap;">Contact No.</th>
                        <th style="text-wrap: nowrap;">Email ID</th>
                        <th style="text-wrap: nowrap;">Survey Done</th>
                        <th style="text-wrap: nowrap;">Latitude</th>
                        <th style="text-wrap: nowrap;">Longitude</th>
                        <th style="text-wrap: nowrap;">Survey received</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">INVERTER</th>
                        <th style="text-wrap: nowrap;">STRUCTURE</th>
                        <th style="text-wrap: nowrap;">MODULES</th>
                        <th style="text-wrap: nowrap;">BOS</th>
                        <th style="text-wrap: nowrap;">DATE</th>
                        <th style="text-wrap: nowrap;">Foundation</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Structure</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Module Mounting</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inverter Installation</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">HOC</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Photo</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inspection</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Net Metering</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">50% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">35% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">15% Payment</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Payment Status</th>
                        <th style="text-wrap: nowrap;">Date</th>
                        <th style="text-wrap: nowrap;">Inverter No</th>
                        <th style="text-wrap: nowrap;">RMS ID</th>
                        <th style="text-wrap: nowrap;">IMEI ID</th>
                        <th style="text-wrap: nowrap;">IMEI ID</th>
                        <th style="text-wrap: nowrap;">Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>