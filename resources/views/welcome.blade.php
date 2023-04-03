<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeelBetter</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../asset/front-end/css/style.css" />
</head>
<body>
    <!-- navbar -->
    
   <nav id="navbar"class="navbar fw-bolder navbar-expand-lg navbar-white bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
          FeelBetter
        </a>
        <div class="container-fluid m-auto">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav m-auto">
                <a class="nav-link" href="">Home</a>
                <a class="nav-link" href="#education">Education</a>
                <a class="nav-link" href="#service">Service</a>
                <a class="nav-link" href="#about">about</a>
              </div>
              <span class="navbar-toggler-icon"></span>
                <button type="button" class="btn btn-primary">Daftar</button>
          </nav>
      </div>
      
    
  <!-- header -->
  <header id="education" class="bg-light py-4">
    <div class="container px-4">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h3 class="display-5 fw-bolder text-dark mb-2">Jaga Kesehatan Mental Anda,</h3>
                    <h3 class="display-5 fw-bolder text-dark mb-2">Jaga Kualitas Hidup Anda</h3>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="asset/front-end/img/shutterstock_1775215433resizee.jpg" alt="..." /></div>
        </div>
        <div class="container justify-content-center fw-bolder text-secondary">
            <div class="row">
              <div class="col-sm fw-bolder">
                <div>
                    <h1 style="color: blue;">50+</h1>
                    <p>Expert in Pyschology</p>
                </div>
              </div>
              <div class="col-sm">
                <div>
                    <h1 style="color: blue;">100+</h1>
                    <p>Satisfied Clients</p>
                </div>
              </div>
              <div class="col-sm">
                <div>
                    <h1 style="color: blue;">20+</h1>
                    <p>Awards Received</p>
                </div>
              </div>
              <div class="col-sm">
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a></a>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-- layanan section-->
    <section id="service" class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Apa saja yang kami sediakan untuk anda?</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="asset/front-end/img/konsul.jpg" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Konsultasi</h5></a>
                            <p class="card-text mb-0">memberikan konsultasi yang terbaik kepada anda, untuk menyelesaikan keluhan anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="asset/front-end/img/edukasi.jpg" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Edukasi</h5></a>
                            <p class="card-text mb-0">Memberikan layanan edukasi kepada anda agar dapat melakukan pencegahan sedini mungkin untuk menghindari hal buruk terjadi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="asset/front-end/img/meditasi.jpg" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">meditasi</h5></a>
                            <p class="card-text mb-0">Memberikan Tips - tips seputar meditasi untuk anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>