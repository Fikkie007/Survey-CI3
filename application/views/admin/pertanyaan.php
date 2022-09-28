<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Edit Kuisioner</h1>
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
            <!-- Button trigger modal -->
            <a href="<?= base_url('admin/addPertanyaan'); ?>" type="button" class="btn btn-primary">
                Tambah
            </a>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort Kategori
                </button>
                <ul class="dropdown-menu">
                    <?php foreach ($kategori as $q) : ?>
                        <li><a class="dropdown-item" href="<?php echo base_url('Admin/sortKategori/') ?><?php echo $q['id'] ?>" value><?php echo $q['kategori'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header" style="background-color: #65C8F2;">
                Pertanyaan
            </div>
            <div class="card-body" style="background-color: #D9D9D9;">
                <table class="table" id="pertanyaan">
                    <thead>
                        <tr>
                            <th scope="col">Kategori</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($query as $q) :  ?>
                            <tr>
                                <td scope="col"><?php echo $q['kategori'] ?></td>
                                <td scope="col"><?php echo $q['pertanyaan'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/editPertanyaan/'); ?><?= $q['id']; ?>">
                                        <img src="<?php echo base_url('Assets\Icons\edit.png') ?>" alt="" srcset="">
                                    </a>
                                </td>
                                <td colspan="2">
                                    <a href="<?= base_url('admin/deletePertanyaan/'); ?><?= $q['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Pertanyaan ?')">
                                        <!-- Delete Functions -->
                                        <img src="<?php echo base_url('Assets\Icons\delete.png') ?>" alt="">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>