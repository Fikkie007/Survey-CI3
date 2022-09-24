<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ubah Kategori</h1>
                            </div>
                            <form class="user" method="POST" action="" <?= $data['id']; ?>>
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="id" placeholder="ID" name="id" value="<?= $data['id']; ?>">
                                    <?= form_error('id', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kategori" placeholder="Full Name" name="kategori" value="<?= $data['kategori']; ?>">
                                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class=" form-group">
                                    <input type="text" class="form-control form-control-user" id="jumlah_responden" name="jumlah_responden" placeholder="Email Address" value="<?= $data['jumlah_responden']; ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Ubah Kategori
                                </button>
                            </form>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.content-header -->

</div>