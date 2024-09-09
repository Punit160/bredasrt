<footer class="main-footer">
            <strong>Copyright &copy; 2024-2025
                <a href="https://adminlte.io">ETS NETWORKS</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('kusum/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{asset('kusum/kusum/my-popup.js')}}></script>
    <!-- jQuery -->
    <script src="{{asset('kusum/kusum/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('kusum/kusum/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
<script src="{{asset('kusum/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('kusum/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('kusum/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('kusum/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('kusum/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('kusum/kusum/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('kusum/kusum/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->

 
    
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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