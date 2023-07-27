<?php
include("connection.php");
?>
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>BLOOD BANK</title>
<!-- Bootstrap Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link href="blood.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="navbar navbar-expand-md nav-content">
    <div class="container-fluid">
      <a href="#" class="nav-item navbar-brand">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse push-right" id="navbarSupportedContent">
        <a href="aboutblood.php" class="nav-item">About Blood</a>
       <a href="howtodonate.php" class="nav-item">How To Donate</a>
        <a href="userlogin.php" class="nav-item">Login</a>
        <a href="index.php" class="nav-item">AdminLogin</a>
      </div>
    </div>
  </div>
  <div class="row container-fluid main-content">
    <div class="text-content col-lg-6 col-md-6">
   <h1 align ="center">Blood Bank</h1>
      <h6 class="brand-description">One website to Save Lifes</h6>
        </div>
      </div>
     
   

  <div class="dashboard container-fluid">
    
    <div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://img.freepik.com/free-vector/cartoon-blood-donation-background_52683-70799.jpg?w=2000" width="100%" height="100%"alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRqOZcza8Ptk-SrFvZ5xu4VDPZqNdCw5oRSA&usqp=CAU" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbyYKPVWIkoWtaQ3wNNguzHYndboBgCVzUvA&usqp=CAU" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="‪https://image.shutterstock.com/image-photo/close-scientist-hand-holding-red-260nw-1189719976.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon prev" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon next" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  
  <script src="script.js"></script>
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
</body>

</html>