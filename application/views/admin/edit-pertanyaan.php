<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Edit Pertanyaan</h1>
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

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('kategori'); ?>
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>
        </div>
        <br>
        <div class="card">
            <div class="card-header" style="background-color: #65C8F2;">
                Kategori Kuisioner
            </div>
            <div class="card-body" style="background-color: #D9D9D9;">
                <table class="table" id="kategori">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jumlah Responden</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data_kategori as $dk) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?php echo $dk['kategori']; ?></td>
                                <td><?php echo $dk['jumlah_responden']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/editKategori/'); ?><?= $dk['id']; ?>">
                                        <img src="<?php echo base_url('Assets\Icons\edit.png') ?>" alt="" srcset="">
                                    </a>
                                </td>
                                <td colspan="2">
                                    <a href="<?= base_url('Admin/deleteKategori/'); ?><?= $dk['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Kategori ?')">
                                        <!-- Delete Functions -->
                                        <img src="<?php echo base_url('Assets\Icons\delete.png') ?>" alt="">
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div><br>
    </section>
    <!-- /.content -->
</div>

<!-- Modal Kategori -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/addKategori'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                        <?= form_error('kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="jumlah_responden" name="jumlah_responden" placeholder="Jumlah Responden">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin Ingin Menyimpan Kategori Baru ?')">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>