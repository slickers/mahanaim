    <!-- jQuery -->
    <script src="apps/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="apps/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="apps/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="apps/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="apps/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="apps/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="apps/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="apps/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="apps/plugins/moment/moment.min.js"></script>
    <script src="apps/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="apps/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="apps/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="apps/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="apps/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="apps/dist/js/adminlte.js"></script>
    <!-- for chart -->
    <script src="apps/dist/js/public_chart.js"></script>
    <script src="apps/plugins/fusionchart/fusioncharts.js"></script>
    <script src="apps/plugins/fusionchart/fusioncharts.charts.js"></script>
    <script src="apps/plugins/fusionchart/themes/fusioncharts.theme.zune.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="apps/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="apps/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="apps/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="apps/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="apps/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="apps/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="apps/plugins/jszip/jszip.min.js"></script>
    <script src="apps/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="apps/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="apps/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="apps/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="apps/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
    <script>
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
            var min = parseInt($('#min').val(), 10);
            var max = parseInt($('#max').val(), 10);
            var age = parseFloat(data[4]) || 0; // use data for the age column

            if (
                (isNaN(min) && isNaN(max)) ||
                (isNaN(min) && age <= max) ||
                (min <= age && isNaN(max)) ||
                (min <= age && age <= max)
            ) {
                return true;
            }
            return false;
        });

        $(document).ready(function() {
            var table = $('#example1').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').keyup(function() {
                table.draw();
            });
        });
    </script>