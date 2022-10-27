<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $url ?>">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $total_pertanyaan; ?></h3>

                            <p>Pertanyaan Active</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?= base_url('admin/pertanyaan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $total_kategori; ?></h3>

                            <p>Total Kategori</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url('admin/editQuestion'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total; ?></h3>

                            <p>Admin Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= base_url('admin/dataAdmin'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $data_pelanggan; ?></h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"> </i>
                        </div>
                        <a href="<?= base_url('Responden'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div><br>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        <center>
            <div class="container">
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Presentase Jawaban Survey
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </center>

    </section>
    <!-- /.content -->
</div>
<!-- <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily =
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#292b2c";

    // Area Chart Example
    var ctx = document.getElementById("myAreaChart");
    var data = [<?php foreach ($answer as $a) : ?>
            <?php echo json_encode($a['total']) ?>
        <?php endforeach; ?>
    ];
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
                data: data,
            }, ],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: "date",
                    },
                    gridLines: {
                        display: false,
                    },
                    ticks: {
                        maxTicksLimit: 7,
                    },
                }, ],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100,
                        maxTicksLimit: 5,
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
</script> -->