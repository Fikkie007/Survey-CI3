<!doctype html>
<html lang="en">

<head>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    /* navbar */
    #nav {
      position: sticky;
      top: 0;
      z-index: 1001;
    }

    .navbar {
      background-image: linear-gradient(to right, #d1e3ec, #2f90f1);

    }

    .navbar-brand span {
      font-weight: bolder;
      color: #fff;
    }

    .navbar-nav li {
      padding: 0 10px;
    }

    .navbar-nav li a {
      color: #fff !important;
      font-weight: bold;
      text-transform: uppercase;
    }

    /* navbar */
    #banner {
      position: relative;
      background-image: linear-gradient(to right, #1ea6ec, #2c92fb);
      color: #fff;
      padding-top: 5%;
    }

    .ban-img {
      position: relative;
      z-index: 900;
    }

    .wave {
      position: relative;
      bottom: -10%;
      left: 0;
    }

    /* features */
    #features {
      padding: 80px 0;
    }

    .features {
      padding: 20px;
    }

    .features img {
      width: 80px;
      height: 80px;
      margin-top: 10px;
    }

    .features h4 {
      padding: 5px;
      margin-top: 25px;
      text-transform: uppercase;
    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Tugu Tirta Survey</title>
  <link rel="website icon" type="png" href="Assets\img\Logo_PerumdaTuguTirta-removebg-preview.png">

</head>

<body>
  <!-- Navbar -->
  <section id="nav">
    <nav class="navbar navbar-expand-lg navbar-">
      <div class="container">
        <img src="Assets\img\logo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="https://perumdatugutirta.co.id/">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!-- Banner -->
  <section id="banner">
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h4>Survey Kepuasan Pelanggan Perumda Air Minum Kota Malang</h4>
            <p>Kepuasan pelanggan adalah kebanggan kami sebagai penyedia layanan perumda air minum. Dengan semangat baru kami berupaya terus meningkatkan kualitas dari pelayanan terbaik untuk masyarakat.</p>
            <p>Mari Berpartisipasi Untuk Mengisi Kuesioner</p>
            <p>Periode Th. 2022 - 2023</p>
            <a href=<?= base_url('survey'); ?> class="btn btn-primary">Klik Disini</a>
          </div>

          <div class="col">
            <img src="Assets\img\tim.png" class="ban-img img-fluid" style="max-width: 80%;" alt="">
          </div>
        </div>
      </div>
  </section>

  <!-- Features -->
  <section id="features">
    <div class="row">
      <div class="col-mb-4">
        <div class="card">
          <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63219.60122417454!2d112.60092676504753!3d-7.975674279400731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628f7c187730b%3A0xb9b85e5b6f5d00fe!2sPerumda%20Air%20Minum%20Tugu%20Tirta%20Kota%20Malang!5e0!3m2!1sen!2sid!4v1673275965325!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h4>PERUMDA TUGU TIRTA KOTA MALANG</h4>
            <address>
              <strong>Kantor Pusat:</strong>
              <br>
              Jl. Terusan Danau Sentani Kota Malang No. 100
              <br>
              Kota Malang - Jawa Timur, Indonesia
            </address>
            <abbr title="Phone Number">
              <strong>Phone: </strong>
            </abbr>
            0341-715-103
            <br>
            <abbr title="Fax">
              <strong>Fax: </strong>
            </abbr>
            0341-715-107
            <br>
            <abbr title="Email Address">
              <strong>Email: </strong>
            </abbr>
            humas@perumdatugutirta.co.id
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="page-footer font-small blue pt-4">
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© Copyright 2022 - <script>
        document.write(/\d{4}/.exec(Date())[0])
      </script>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>