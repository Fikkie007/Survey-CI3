<!doctype html>
<html lang="en">
  <head>
    <style>
        *{
    margin: 0;
    padding: 0;
}

/* navbar */
#nav{
    position: sticky;
    top: 0;
    z-index: 1001;
}

.navbar{
    background-image: linear-gradient(to right, #d1e3ec, #2f90f1);

}

.navbar-brand span{
    font-weight: bolder;
    color: #fff;
}

.navbar-nav li{
    padding: 0 10px;
}

.navbar-nav li a{
    color: #fff !important;
    font-weight: bold;
    text-transform: uppercase;
}

/* navbar */
#banner{
    position: relative;
    background-image: linear-gradient(to right, #1ea6ec, #2c92fb);
    color: #fff;
    padding-top: 5%;
}

.ban-img{
    position: relative;
    z-index: 1000;
}

.wave{
    position: absolute;
    bottom: -10%;
    left: 0;
}

/* features */
#features{
    padding: 80px 0;
}

.features{
    padding: 20px;
}

.features img{
    width: 80px;
    height: 80px;
    margin-top: 10px;
}

.features h4{
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
    <link rel="website icon" type="png"
            href="Assets\img\Logo_PerumdaTuguTirta-removebg-preview.png">
            
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
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
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
                    <div class="col-md-6">
                        <h4>Survey Kepuasan Pelanggan Perumda Air Minum Kota Malang</h4>
                        <p>Kepuasan pelanggan adalah kebanggan kami sebagai penyedia layanan perumda air minum. Dengan semangat baru kami berupaya terus meningkatkan kualitas dari pelayanan terbaik untuk masyarakat.</p>
                        <p>Mari Berpartisipasi Untuk Mengisi Kuesioner</p>
                        <p>Periode Th. 2022 - 2023</p>

                          <a href="Pertanyaan.html"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                          Klik Disini </button></a>
                    </div>

                    <div class="col-md-6">
                        <img src="Assets\img\tim.png" class="ban-img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <svg class="wave"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L120,213.3C240,235,480,277,720,261.3C960,245,1200,171,1320,133.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
      </section>

      <!-- Features -->
      <section id="features">
        <div class="container">
          <h2 class="text-center">Kamu Nanya? Kamu Bertanya Tanya??</h2>
          <div class="row text-center">
            <div class="col-md-4 features">
              <img src="Assets\img\work.png" class="img-fluid" alt="">
              <h4>Marketing Online</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae atque quibusdam vero maiores, laborum facere. Deleniti perspiciatis explicabo rerum fugit, voluptatum, animi quia deserunt modi est impedit dicta. Eligendi.</p>
            </div>

              <div class="col-md-4 features">
                <img src="Assets\img\package.png" class="img-fluid" alt="">
                <h4>Hasil Coba</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae atque quibusdam vero maiores, laborum facere. Deleniti perspiciatis explicabo rerum fugit, voluptatum, animi quia deserunt modi est impedit dicta. Eligendi.</p>

            </div>

            <div class="col-md-4 features">
              <img src="Assets\img\search.png" class="img-fluid" alt="">
              <h4>Search</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae atque quibusdam vero maiores, laborum facere. Deleniti perspiciatis explicabo rerum fugit, voluptatum, animi quia deserunt modi est impedit dicta. Eligendi.</p>


              </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="cotainer">
          <h2 class="text-center">Hubungi Saya ya ges ya!</h2>
          <div class="row">
            <div class="col-md-6">
              <img src="Assets\img\contact.png" alt="" class="img fluid">
            </div>

          </div>
        </div>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>