<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Data Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= $url ?>">Home</a>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <br>
            <!-- Button trigger modal -->
            <a href="addAdmin" type="button" class="btn btn-primary">
                Tambah
            </a>
            <br><br>
            <div class="card">
                <div class="card-header" style="background-color: #65C8F2;">
                    Admin
                </div>
                <div class="card-body" style="background-color: #D9D9D9;">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = $this->uri->segment('3') + 1; ?>
                            <?php foreach ($user_data as $ud) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $ud['name']; ?></td>
                                    <td><?= $ud['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/editAdmin/'); ?><?= $ud['id']; ?>">
                                            <img src="<?php echo base_url('Assets\Icons\edit.png') ?>" alt="" srcset="">
                                        </a>
                                    </td>
                                    <td colspan="2">
                                        <a href="<?= base_url('Admin/deleteAdmin/'); ?><?= $ud['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Admin ?')">
                                            <!-- Delete Functions -->
                                            <img src="<?php echo base_url('Assets\Icons\delete.png') ?>" alt="">
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

</div>