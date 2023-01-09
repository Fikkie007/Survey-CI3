<!DOCTYPE html>
<html lang="en">
<style>
    .container {
        background: linear-gradient(180deg, #768480 0%, rgba(118, 132, 128, 0) 143.63%);
        border-radius: 30px;
    }

    .map-container {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .perumda {
        font-family: 'Jost';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 69px;
        color: #fff;

    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: transparent;
        background-clip: border-box;
        border: 1pxsolidrgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    .line {
        background: #FFF9F9;
    }

    .a {
        color: none;
        text-decoration: none;
        background-color: transparent;
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
<br>

<body>
    <div class="container-fluid" style="background-color: #D0E8FA;"><br><br><br>
        <center>
            <h2>Terimakasih Telah Berpartisipasi Dalam Mengisi <br> Jawaban Survey Anda</h2>
        </center><br><br><br>
    </div>
</body>
<br><br><br>
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: #EDF3F3;">
        2022 - 2023 Survey Kepuasan Pelanggan
    </div>
    <!-- Copyright -->
</footer>