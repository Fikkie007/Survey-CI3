<footer class="text-center: center; text-lg-start bg-light text-muted">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #EDF3F3;">
             2022 - 2023 Survey Kepuasan Pelanggan
    </div>
    <!-- Copyright -->
</footer>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

</div>

<script src="<?= base_url('Assets/AdminLTE/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('Assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('Assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('Assets/AdminLTE/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('Assets/AdminLTE/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('Assets/AdminLTE/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('Assets/AdminLTE/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('Assets/AdminLTE/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('Assets/AdminLTE/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('Assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('Assets/AdminLTE/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('Assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('Assets/AdminLTE/dist/js/adminlte.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- <script src="Assets/demo/chart-area-demo.js"></script> -->
<script src="Assets/demo/chart-bar-demo.js"></script>
<script>
    $(document).ready(function() {
        $('#admin').DataTable();
    });
    $(document).ready(function() {
        $('#pertanyaan2').DataTable();
    });
    $(document).ready(function() {
        $('#kategori').DataTable();
    });
    $(document).ready(function() {
        $('#responden').DataTable();
    });
    $(document).ready(function() {
        $('#hasil').DataTable();
    });
    $(document).ready(function() {
        $('#myTable').DataTable({
            lengthMenu: [5, 10, 20, 50, 100, 200, 500],
        });
    });
</script>
<script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#292b2c"

    // Area Chart Example

    var answer = <?php echo json_encode($answer) ?>;
    var jumlah = 0
    var presentase = answer.map((value, index) => {
        return jumlah += parseInt(value.total)
    })
    var getData = answer.map((value, index) => {
        return Math.round((value.total / jumlah) * 100);
    })
    console.log(getData)
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Sangat Puas", "Puas", "Biasa", "Tidak Puas"],
            datasets: [{
                label: "Presentase",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: getData,
            }, ],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: "date",
                    },
                    gridLines: {
                        display: true,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                }, ],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100,
                        maxTicksLimit: 10,
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    },
                }, ],
            },
            legend: {
                display: false,
            },
        },
    });
</script>

</body>

</html>