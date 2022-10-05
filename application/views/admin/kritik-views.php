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
                <table class="table" id="myTable">
                    <?php $i = 1; ?>
                    <?php foreach ($jawaban as $j) : ?>
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $j['kritik'] ?></td>
                            </tr>
                        </tbody>
                </table>
                <?php $i++;  ?>
            <?php endforeach; ?>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>