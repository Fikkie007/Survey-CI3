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

            <br>
            <?php foreach ($hasil as $h) : ?>
                <div class="card">
                    <div class="card-header" style="background-color: #65C8F2;">
                        Hasil Kuisioner <?php echo $h['kategori'] ?>
                    </div>
                    <div class="card-body" style="background-color: #D9D9D9;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col"></th>

                                    <th scope="col">User</th>
                                    <th scope="col">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Pertanyaan</th>
                                    <th><?php echo  $h['pertanyaan'] ?></th>
                                    <td><?php echo $h['name'] ?></td>
                                    <td><?php echo $h['answer'] ?></td>
                                </tr>
                                <tr>
                                    <th>Presentase</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>Jumlah Jawaban</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><br><br>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- /.content -->
</div>