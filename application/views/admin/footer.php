<footer class="text-center text-lg-start bg-light text-muted">
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
<script src="<?= base_url("sweetalert2.all.min.js"); ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#admin').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('#pertanyaan').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('#kategori').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('#responden').DataTable();
    });
</script>
</body>

</html>