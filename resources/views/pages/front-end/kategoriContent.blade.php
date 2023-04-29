<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Kategori Konten</title>
</head>
<body>
  <div class="container">
    <h3>Popular Content</h3>
  </div>
  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Downloads/ss.png" alt="Podcast" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Judul Podcast</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Musik" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Judul Musik</h3>
        <p>Musik Chill n Kalem</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="Artikel" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Judul Artikel</h3>
        <p>Ingat Mental Health itu Penting</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


  <br> 
  <div class="container">
    <h3>Content</h3>
    <p>The following example shows how to create a basic carousel with indicators and controls.</p>
  </div> 
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Podcast">
          <div class="card-body">
            <h5 class="card-title">Podcast</h5>
            <p class="card-text">Description of Podcast goes here.</p>
            <a href="#" class="btn btn-primary">Check It Out</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Article and News">
          <div class="card-body">
            <h5 class="card-title">Article and News</h5>
            <p class="card-text">Description of Article and News goes here.</p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Video">
          <div class="card-body">
            <h5 class="card-title">Video</h5>
            <p class="card-text">Description of Video goes here.</p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</html>