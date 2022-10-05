<!DOCTYPE html>
<html lang="en">
<style>
    .text {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 69px;

        color: #000000;
    }

    .text2 {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 400;
        line-height: 46px;

        color: #000000;
    }

    .text3 {
        font-family: 'Inter';
        font-style: italic;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
        /* identical to box height */


        color: #000000;
    }

    .text4 {
        font-family: 'Inter';
        font-style: italic;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
        /* identical to box height */


        color: #000000;
    }

    .ql-editor {
        box-sizing: border-box;
        line-height: 1.42;
        height: 100%;
        outline: none;
        overflow-y: auto;
        padding: 12px 15px;
        tab-size: 4;
        -moz-tab-size: 4;
        text-align: left;
        white-space: pre-wrap;
        word-wrap: break-word;
        min-height: inherit;
    }
</style>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURVEY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="Assets/web.png" />
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <nav class="navbar navbar-light justify-content-between" style="background-color:#EDF3F3">
        <a href="https://perumdatugutirta.co.id/">
            <img src='Assets/Logo.png' />
        </a>
        </button>
        <a href="<?= base_url('/'); ?>">
            <button type="button" class="btn btn-primary" style="background-color:#4FADD6">Beranda</button>
        </a>
    </nav>

</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <br>

    <div class="container-fluid">
        <div class="card" style="background:linear-gradient(135deg, #ABDCFF 0%, #0396FF 100%);
            border-radius: 48px 48px 300px 48px;">
            <div class="d-flex justify-content-end">
                <img src="Assets/cp.png" alt="" style="max-width: 10%; float: right;">
            </div>

            <div class="card-body" style="position: relative;">
                <!-- <div class="container" style="position: absolute;">
                    <img src="Assets/sally.png" style="max-width: 30%; height: auto; position:absolute;" /> -->
                <div class="text">
                    <h5 class="card-title">PANDUAN MENGISI KUESIONER
                        PELANGGAN PERUMDA AIR MINUM TUGU TIRTA</h5>
                </div>
                <div class="text2">
                    <p class="card-text">1. Setelah anda mengisi data diri dengan benar selanjutnya akan diarahkan untuk mengisi kuesioner sebagai Pelanggan Perumda Air Minum Tugu Tirta untuk menilai pelayanan kami.<br>
                        2. Pilih range nilai dari setiap pertanyaan yang telah diberikan<br>
                        3. Isi dengan baik dan jujur sesuai pelayanan kami </p>
                </div>
                <br>
                <p class="card-text">
                    <small class="text-muted">Selamat Mengisi Kuesioner <?= $user['name']; ?>:)</small>
                    <!-- <div class="container-fluid" style="position: absolute;">
                    <div class="float-right">
                        <img src="Assets/question.png" alt="" style="max-width: 40%;" class="img-fluid" />
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    <br>
    <!-- <form method="POST" action="<?= base_url('Pertanyaan'); ?>">
        <div class="container-fluid">
            <?php $i = 1; ?>
            <?php foreach ($pertanyaan as $p) : ?>
                <div class="container">
                    <p><?= $i; ?>. <?php echo $p['pertanyaan'] ?></p>
                    <?= form_error('answer', ' <small class="text-danger pl-3">', '</small>'); ?>
                    <input type="hidden" name="pertanyaan" value="<?= $p['pertanyaan']; ?>"></input>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer [<?= $i; ?>]" id="answer" value="1">
                        Puas
                        </input>
                        <?php echo form_error('answer[]', ' <small class="t ext-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="answer [<?= $i; ?>]" id="answer" value="2">
                        Tidak Puas
                        </input>
                        <?php echo form_error('answer[]', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?= $p['id']; ?>" id=" answer" value="3">
                        <label class="form-check-label" for="exampleRadios1">
                            3
                        </label>
                    </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?= $p['id']; ?>" id=" answer" value="4">
                        <label class="form-check-label" for="exampleRadios1">
                            4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?= $p['id']; ?>" id=" answer" value="5">
                        <label class="form-check-label" for="exampleRadios1">
                            5
                        </label>
                    </div>
                    <br>
                </div>

                <?php $i++; ?>
            <?php endforeach; ?>
            <br>
        </div>


        <br><br>
        <div class="container fluid"><br>
            <div class="text3">
                Kritik & Saran
            </div>
            <br>
            <center>
                <textarea id="wmd-input" name="post-text" class="wmd-input s-input bar0 js-post-body-field processed" data-post-type-id="2" cols="92" rows="15" tabindex="101" data-min-length="" spellcheck="false" placeholder="Contoh : Ketik Disini">
        </textarea>
            </center>
            <br>
        </div><br>
        <center>
            <div class="text4">
                <h4>Pastikan Semua Jawaban Anda Sudah Terisi & Benar Sebelum Menyelesaikan Kuesioner</h4>
            </div>
        </center><br>
        <div class="conainer-fluid">
            <div class="container">
                <button type="submit" class="btn btn-success btn-lg btn-block">Selesai
                </button>
            </div>
        </div>
    </form> -->

    <form action="<?= base_url('pertanyaan'); ?>" method="post">
        <?php $i = 1; ?>
        <?php foreach ($pertanyaan as $p) : ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="container-fluid">
                        <strong><?= $i; ?>. <?= $p['pertanyaan']; ?></strong>
                    </div>
                    <div class="container-fluid">
                        <div class="container">
                            <!-- <input type="hidden" name="pertanyaan<?= $p['id']; ?>"> -->
                            <input type="radio" id="answer[<?= $p['id']; ?>]" name="answer[<?= $p['id']; ?>]" value="1" required><label><?= $p['jawaban1']; ?></label>
                            <br>
                            <input type="radio" id="html2" name="answer[<?= $p['id']; ?>]" value="2" required><label><?= $p['jawaban2']; ?></label>
                            <br>
                            <input type="radio" id="html3" name="answer[<?= $p['id']; ?>]" value="3" required><label><?= $p['jawaban3']; ?></label>
                            <br>
                            <input type="radio" id="html4" name="answer[<?= $p['id']; ?>]" value="4" required><label><?= $p['jawaban4']; ?></label>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
        <br><br>
        <div class="container-fluid">
            <div>
                <input type="hidden" name="content" value="<?= set_value('content') ?>">
                <div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
    <!-- <script src="Assets/js/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        function myFunction() {
            Swal.fire({
                text: 'Apakah Survey Sudah Terisi Semua ?',
                icon: 'warning',
                confirmButtonText: 'Ya',
            }).then(function() {
                window.location = "/overall";
            });

        };
    </script> -->
</body>
<br>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        placeholder: 'Kritik Dan Saran',
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    font: []
                }],
                ["bold", "italic", "underline"],
            ]
        },
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
</script>

</html>