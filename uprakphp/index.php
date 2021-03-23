<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">CARRO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav-link">
        <div><a class="me-4" href="beli.php">Beli Mobil</a></div>
        <div><a class="me-4" href="jual.php">Jual Mobil</a></div>
        <div><a class="me-4" href="about.php">About</a></div>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://cdn0-production-images-kly.akamaized.net/I_EycfBlEX6lYGSHQKLH_WRz_nI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1260522/original/062534300_1465557340-20160610-penjualan-mobil-AY-3.jpg"
          class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img
          src="https://asset.kompas.com/crops/sVhAhyTwTQBhaW6L0zSkZfm77WY=/200x6:974x522/750x500/data/photo/2018/12/17/1149903433.jpeg"
          class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img
          src="https://s3-ap-southeast-1.amazonaws.com/mobilkamu/artikel/images/mobil-bekas-showroom-vs-perorangan/showroom-mobil-bekas-1-700x350.jpg"
          class="d-block w-100">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="judul">
    <h2 style="text-align: center">Mobil Unggulan</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/alphard.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Toyota Alphard Hybrid </h5>
            <hr>
            <p class="card-text">2020 January<br>1000 KM<br>Keyless<br>Sunroof </p>
            <a href="#" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/lambhorghini.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Lamborghini Aventador</h5>
            <hr>
            <p class="card-text">2012 July<br>17000 KM<br>5.2L / V10 / 552 HP/ AWD<br>Rear View Camera</p>
            <a href="#" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="img/nissan.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Nissan GT-R R35</h5>
            <hr>
            <p class="card-text">Brand New 2019<br>Keyless<br>3.8L Twin Turbo / V6<br>565 HP</p>
            <a href="" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h1 style="text-align: center">Kenapa Harus Di Malih Autocars</h1>


  <div class="satu">
    <h3>Aman</h3>
    <p>Memberikan perlindungan berupa garansi</p>
  </div>

  <div class="dua">
    <h3>Kualitas Kendaraan Yang Bagus</h3>
    <p>Memberikan perlindungan berupa garansi</p>
  </div>
  
  <div class="tiga">
    <h3>Harga Murah</h3>
    <p>Memberikan perlindungan berupa garansi</p>
  </div>

  



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>