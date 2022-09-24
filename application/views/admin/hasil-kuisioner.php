<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Hasil Kuisioner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--Pertanyaan -->
    <section class="content">
        <div class="container-fluid">

        </div>
        <br>
        <?php foreach ($hasil as $h) : ?>
            <div class="card">
                <div class="card-header" style="background-color: #65C8F2;">
                    Hasil Kuisioner <?php echo $h['kategori'] ?>
                </div>
                <div class="card-body" style="background-color: #D9D9D9;">
                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Jawaban 1</th>
                                <th scope="col">Jawaban 2</th>
                                <th scope="col">Jawaban 3</th>
                                <th scope="col">Jawaban 4</th>
                                <th scope="col">Jawaban 5</th>
                                <th scope="col">Jawaban 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Jumlah Jawaban</th>
                            </tr>
                            <tr>
                                <th>Presentase</th>
                            </tr>
                        </tbody>
                    </table> -->

                    <?php
                    echo $h['pertanyaan'];
                    ?>
                </div>
            </div><br><br>
        <?php endforeach; ?>
    </section>
    <!-- /.content -->
</div>