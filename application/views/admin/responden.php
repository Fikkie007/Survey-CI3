<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Responden</h1>
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
            <div class="card">
                <div class="card-header" style="background-color: #65C8F2;">
                    Responden
                </div>
                <div class="card-body" style="background-color: #D9D9D9;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No. Handphone</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Saluran</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($responden as $key => $value) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?>. </th>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['phone_number']; ?></td>
                                    <td>
                                        <?php echo $value['address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['channel_number']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['date']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

</div>