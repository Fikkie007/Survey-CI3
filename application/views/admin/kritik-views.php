<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Kritik dan Saran</h1>
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
    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #65C8F2;">
                Hasil Jawaban Kritik dan Saran
            </div>
            <div class="card-body" style="background-color: #D9D9D9;">
                <a target="_blank" href="<?php echo base_url('Kritik/export') ?>">
                    <button class="btn btn-success" type="button" aria-expanded="false">
                        Export Data
                    </button>
                </a><br><br>
                <table class="table" id="myTable">
<<<<<<< HEAD
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Krtik dan Saran</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($query as $j) : ?>
                            <tr>
=======
                    <?php $i = 1; ?>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Krtik dan Saran</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($query as $j) : ?>
                            <tr>
>>>>>>> 1f43c5bfc710f7bef7a8073c3224f267c1b4f991
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $j['name'] ?></td>
                                <td><?php echo $j['kritik'] ?></td>
                                <td><?php
                                    $date = strtotime($j['date']);
                                    echo date('d-m-Y', $date)
                                    ?>
                                </td>
                            </tr>
<<<<<<< HEAD
                        <?php endforeach; ?>
                    </tbody>
                </table>
=======
                            <?php endforeach; ?>
                        </tbody> 
                </table>
            
>>>>>>> 1f43c5bfc710f7bef7a8073c3224f267c1b4f991
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>