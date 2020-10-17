<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Booking Dokter</title>
  </head>
  <body>
  <!--navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="nabvarNav"></div>
  <a class="navbar-brand" href="#"><img width = "200" height = "50" src="" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> HOME <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="Booking Dokter.php"> PILIH DOKTER </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"> TANYA DOKTER </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"> HUBUNGI KAMI </a>
      </li>
     
      <li class="nav-item">
        <button type="button" class="btn btn-link" style="margin-left: 80px"> LOGIN </button>
      </li>
      
      <li class="nav-item">
        <button type="button" class="btn btn-link"> DAFTAR </button>
      </li>
    </ul>
</div>
</nav>

<p>
<br>
<!-- search-->
<div class="container" style="margin-left: px; margin-right: 100px;">
  <div class="row">
  <div class="col-4"> </div>
      <form class="form-inline">
      <div class="form-group mx-sm-3 mb-2">
        <input  type="text" class="form-control" name="search"  id="search"  placeholder="Cari Dokter Favoritmu">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Cari</button>
      </form> 
  </div>
</div>

<!-- list dokter -->
<p><br><br><br>
<div class="container" style="margin-left: 300px; margin-right: 100px;">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col"><img width = "180" height = "280" src="1.jpg" alt=""></div>
    <div class="col" style="margin-top: 100px;">Dr. Tsamara Arifah<br>Dokter Umum</div>
    <div class="col" style="margin-top: 100px;"><button type="submit" class="btn btn-primary mb-2">Buat Janji</button></div>
  </div>
  <p>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col"><img width = "180" height = "280" src="2.jpg" alt=""></div>
    <div class="col" style="margin-top: 100px;">Dr. Tsamara Arifah<br>Dokter Umum</div>
    <div class="col" style="margin-top: 100px;"><button type="submit" class="btn btn-primary mb-2">Buat Janji</button></div>
  </div>
  <p>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col"><img width = "180" height = "280" src="3.jpg" alt=""></div>
    <div class="col" style="margin-top: 100px;">Dr. Tsamara Arifah<br>Dokter Umum</div>
    <div class="col" style="margin-top: 100px;"><button type="submit" class="btn btn-primary mb-2">Buat Janji</button></div>
  </div>

<!-- page -->
  <p><br><br><br>
  <nav aria-label="Page navigation example" style="margin-right: 200px;">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="Booking Dokter.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Booking Dokter.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Booking Dokter.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>   

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>