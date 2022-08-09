<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="dist/js/bootstrap-datepicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- for chart
    <script src="plugins/fusionchart/fusioncharts.js"></script>
    <script src="plugins/fusionchart/fusioncharts.charts.js"></script>
    <script src="plugins/fusionchart/themes/fusioncharts.theme.zune.js"></script>
    <script src="dist/js/chart.js"></script> -->
<!-- DataTables  & Plugins   -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $.fn.datepicker.defaults.format = "mm/dd/yyyy";
        $('.datepicker-me').datepicker({});
    });
</script> -->
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
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    })
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
<script>
    $(document).ready(function() {
        $.ajax({
            url: "pages/chart_data.php",
            method: "GET",
            success: function(data) {
                console.log(data);
                var label = [];
                var value = [];
                for (var i in data) {
                    label.push(data[i].label);
                    value.push(data[i].value);
                }
                var ctx = document.getElementById('rasio').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: 'Rasio Usia',
                            backgroundColor: [
                                getRandomColorHex(),
                                getRandomColorHex(),
                                getRandomColorHex(),
                                getRandomColorHex(),
                                getRandomColorHex(),
                                getRandomColorHex()
                            ],
                            borderColor: 'rgb(255, 255, 255)',
                            data: value
                        }]
                    },
                    options: {
                        legend: {
                            display: false,
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    fontSize: 16
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    fontSize: 16
                                }
                            }],
                        }

                    }

                });
                /**
                 * function to generate random color in hex form
                 */
                function getRandomColorHex() {
                    var hex = "0123456789ABCDEF",
                        color = "#";
                    for (var i = 1; i <= 6; i++) {
                        color += hex[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

            }
        });
    });
</script>