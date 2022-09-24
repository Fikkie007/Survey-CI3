<!DOCTYPE html>
<html lang="en">
<style>
    .kuisioner {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 69px;
        text-align: center;

        color: #000000;
    }

    .isi {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 46px;

        color: #000000;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SURVEY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="Assets/web.png" />
    <link rel="stylesheet" type="css" href="Assets/css/survey.css">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>


    <nav class="navbar navbar-light justify-content-between" style="background-color:#EDF3F3">
        <a href="https://perumdatugutirta.co.id/">
            <img src="Assets/Logo.png" />
        </a>
        </button>
        <div class="button">
            <a href="https://perumdatugutirta.co.id/">
                <a href="home">
                    <button type="button" class="btn btn-success">Kembali</button>
                </a>
                <a href="<?= base_url('/'); ?>">
                    <button type="button" class="btn btn-primary" style="background-color:#4FADD6">Beranda</button>
                </a>
            </a>
        </div>
    </nav>

</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <br>
    <div class="container-fluid" style="background: linear-gradient(355.04deg, #ABDCFF -102.6%, #0396FF 100%);
    border-radius: 20px;">
        <div class="kuisioner">
            <div class="font-weight-bold">
                <h3 class="text-center">KUESIONER PELANGGAN PERUMDA <br> MINUM KOTA MALANG</h3>
            </div>
        </div>
        <!-- <div class="title">
                <h2 class="font-weight-bold"> KUESIONER PELANGGAN PERUMDA AIR MINUM KOTA MALANG </h2>
            </div> -->
        <br>
        <div class="text-center">
            <div class="isi">
                Isi data diri anda pastikan yang anda isi benar
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <h3>Data Pelanggan</h3>
        <hr style="border-top: 1px solid;">
        <form class="user" method="POST" action="<?= base_url('Survey'); ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama Lengkap: </label>
                    <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Contoh: Ladusing" value="<?= set_value('name'); ?>">
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Contoh : LadusingUhuy@gmail.com" value="<?= set_value('email'); ?>">
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telepon">No. Telepon: </label>
                    <input type="text" name="phone_number" class="form-control form-control-user" id="phone_number" placeholder="Contoh : 08574839904" value="<?= set_value('phone_number'); ?>">
                    <?= form_error('phone_number', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="saluran">No. Saluran</label>
                    <input type="number" name="channel_number" class="form-control form-control-user" id="channel_number" placeholder="Contoh : 148393" value="<?= set_value('channel_number'); ?>">
                    <?= form_error('channel_number', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat">Alamat: </label>
                    <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Contoh : Jl.  Danau Sentani" value="<?= set_value('address'); ?>">
                    <?= form_error('address', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block">Submit</button>
        </form>

    </div>
    <br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #EDF3F3;">
        2022 - 2023 Survey Kepuasan Pelanggan
    </div>
    <!-- Copyright -->
</footer>

</html>