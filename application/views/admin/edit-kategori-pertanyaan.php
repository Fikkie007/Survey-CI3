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

    <!--Pertanyaan -->
    <section class="content">
        <div class="container-fluid">
            <form id="form" method="POST" action="" <?= $data['id']; ?>>
                <div class="form-group">
                    <label for="form-control">Kategori</label>
                    <select class="form-control" id="id_kategori" name="id_kategori">
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('id_kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="form-control">Pertanyaan</label>
                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" form="form"><?= $data['pertanyaan']; ?></textarea>
                    <?= form_error('pertanyaan', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>