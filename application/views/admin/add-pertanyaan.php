<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="m-0">Tambah Pertanyaan</h1>
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
            <form id="form" method="POST" action="<?= base_url('admin/addPertanyaan'); ?>">
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
                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" form="form"></textarea>
                    <?= form_error('pertanyaan', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
            <!-- <form class="user" method="POST" action="<?= base_url('admin/addPertanyaan'); ?>">
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" id="id_kategori" name="id_kategori" value="<?= set_value('id_kategori'); ?>">
                    <?= form_error('id_kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="pertanyaan" name="pertanyaan" placeholder="pertanyaan">
                        <?= form_error('pertanyaan', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form> -->
        </div>

    </section>
    <!-- /.content -->
</div>