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
            <div class="card">
                <div class="card-header" style="background-color: #65C8F2;">
                    Hasil Jawaban

                </div>
                <div class="card-body" style="background-color: #D9D9D9;">


                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($button as $h2) : ?>
                                <li><a class="dropdown-item" href="<?php echo base_url('HasilKuisioner/kategori/') ?><?php echo $h2['kategori'] ?>"><?php echo $h2['kategori'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div> -->
                    <!-- <a href="" class="btn btn-info">asdasd</a> -->

                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-2">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort Kategori
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <?php foreach ($button as $h2) : ?>
                                            <li><a class="dropdown-item" href="<?php echo base_url('HasilKuisioner/kategori/') ?><?php echo $h2['kategori'] ?>"><?php echo $h2['kategori'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <a href="<?php echo base_url('HasilKuisioner/export') ?>">
                                    <button class="btn btn-success" type="button" aria-expanded="false">
                                        Export Data
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <br>
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hasil as $h) : ?>
                                <tr>
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $h['name'] ?></td>
                                    <td><?php echo $h['pertanyaan'] ?></td>
                                    <td><?php echo $h['kategori'] ?></td>
                                    <td><?php echo $h['answer'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </section>
    <!-- /.content -->
</div>