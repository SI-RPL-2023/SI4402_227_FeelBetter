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

     <!-- Program -->
     <section id="program">
            <div class="kolom">
                <h1>Apa yang mereka katakan tentang kita?</h1>
                <h2>"</h2>
                <p>“Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.”</p>

                <h3>Yohanes Nico Kristiawan</h3>
                <p>Mahasiswa Telkom University</p>
            </div>
            <img src="https://img.freepik.com/free-vector/stretching-exercises-concept-illustration_114360-8922.jpg?size=626&ext=jpg&ga=GA1.2.1330137437.1667370673&semt=sph" alt="">
        </section>

        <!-- Form -->
        <section id="Formpesan">
            <form action="Form Registrasi Mobil">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h2>Get in touch and let's make great things happen together!
                </div>
                <div class="row">
                    <form action="" class="row justify-content-center">
                        <div class="col-md-8 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Looking for more information or have a question about our product or service? Our team is here to help!</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="Fullname"
                            placeholder="Your Name"
                        />
                    </div>

                    <div class="col-md-8 mb-3">
                        <input
                            type="email"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="Your Email"
                        />
                    </div>

                    <div class="col-md-8 mb-3">
                        <input
                            type="number"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="Your Phone"
                        />
                    </div>
                    <div class="col-md-8 mb-3">
                        <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            rows="3"
                            placeholder="Tell me about your question"
                        ></textarea>
                    </div>
                    <div class="col-md-8 mb-3">
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
            </div>
            </form>
        </section>

        <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>FeelBetter
            </h6>
            <p>Jaga Kesehatan Mental Anda</p>
            <p>Jaga Kualitas Hidup Anda</p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Home
            </h6>
            <p>
              <a href="#!" class="text-reset">Banner</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Service</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Testimonial</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Education
            </h6>
            <p>
              <a href="#!" class="text-reset">Articles</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Music</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Videos</a>
            </p>
            <p>
              <a href="#!" class="text-reset">News</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      Company 2023 All Right Reserved
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>