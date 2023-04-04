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
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{url('asset/front-end/css/style.css')}}" />
</head>
<body>
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.user.navbar')
    </div>
    <!-- end  navbar -->

    <!-- banner hero -->
    <section id="banner" class="mt-5">
      <div class="container">
        <div class="row align-items-center mb-4">
          <div class="col-sm-12 col-md-6">
            <h1 class="main-title fw-bold">
              Jaga Kesehatan Mental Anda, Jaga Kualitas Hidup Anda
            </h1>
          </div>
          <div class="col-sm-12 col-md-6">
            <h2 class="sub-title fw-light">
              Our service provides elite talent solutions to boost brand promotion and engagement, with tailored strategies and top-tier celebrities.
            </h2>
          </div>
        </div>
        <img src="{{url('asset/front-end/img/banner.png')}}" alt="banner" class="w-100">
        <div class="row mt-4 align-content-center align-items-center">
          <div class="col-sm-6 col-md-3">
            <h4 class="fw-bold fs-3 summary d-flex align-items-center">50+<span class="fw-light fs-5 text-black ps-1">Expert in Psychology</span></h4>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4 class="fw-bold fs-3 d-flex align-items-center summary">100+ <span class="fw-light fs-5 text-black ps-1">satisfied clients</span></h4>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4 class="fw-bold fs-3 d-flex align-items-center summary">20+ <span class="fw-light fs-5 text-black ps-1">awards received</span></h4>
          </div>
          <div class="col-sm-3 d-flex justify-content-md-end">
            <button type="button" class="btn btn-primary btn-contact ">Contact Us</button>
          </div>
        </div>
      </div>
    </section>
    <!-- end banner hero -->

    <!-- layanan -->
    <section id="layanan" class="mt-5">
      <div class="container">
        <div class="row align-items-center align-content-center">
          <div class="col-12 col-lg-5 d-flex justify-content-start">
            <h1 class="titleLayanan fw-bold">
            Apa saja yang kami sediakan untuk anda?
            </h1>
          </div>
          <div class="col-0 col-lg-7 d-flex justify-content-end ">
            <button type="button" class="btn btn-primary btn-others d-none d-lg-block">Cek Lainnya</button>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-md-4 cardLayanan text-center">
            <img src="{{url('asset/front-end/img/konsultasi.jpg')}}" alt="konsultasi" class="rounded img-layanan img-fluid">
            <h1 class="mt-2 fw-bold">
              konsultasi
            </h1>
            <p class="fw-light">
              Our service provides elite talent solutions to boost brand promotion and engagement, with tailored strategies and top-tier celebrities.
            </p>
          </div>
          <div class="col-12 col-md-4 cardLayanan text-center">
            <img src="{{url('asset/front-end/img/edukasi.jpg')}}" alt="layanan edukasi" class="rounded img-layanan img-fluid">
            <h1 class="mt-2 fw-bold">
              Layanan edukasi
            </h1>
            <p class="fw-light">
              Our service provides elite talent solutions to boost brand promotion and engagement, with tailored strategies and top-tier celebrities.
            </p>
          </div>
          <div class="col-12 col-md-4 cardLayanan text-center">
            <img src="{{url('asset/front-end/img/meditasi.jpg')}}" alt="meditasi" class="rounded img-layanan img-fluid">
            <h1 class="mt-2 fw-bold">
              meditasi
            </h1>
            <p class="fw-light">
              Our service provides elite talent solutions to boost brand promotion and engagement, with tailored strategies and top-tier celebrities.
            </p>
          </div>
        </div>
        <div class="col-0 col-lg-7 d-flex justify-content-end ">
            <button type="button" class="btn btn-primary btn-others d-block d-lg-none">Cek Lainnya</button>
          </div>
      </div>
    </section>
    <!-- end layanan -->

    <!-- review -->
    <section id="review" class="mt-5">
      <div class="container">
        <div class="col-12 col-lg-5">
          <h1 class="titleReview fw-bold">
            Apa yang mereka katakan tentang kami?
          </h1>
        </div>
        <div class="row align-content-center align-items-center review">
          <div class="col-12 col-md-6 d-flex justify-content-start  order-last order-md-first mt-2 mt-md-0">
            <h1 class="fw-light">
              “Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.”
              <p class="fw-bold mt-3">Yohanes Nico Kristiawan <br>
                <span class="fs-5 fw-light">Mahasiswa Telkom University</span>
              </p>
            </h1>
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-end  text-lg-right text-center mt-2 mt-md-0">
            <img src="{{url('asset/front-end/img/reviewer.jpg')}}" alt="review" class="rounded img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- end review -->

    <!-- contact form -->
    <section id="contactForm" class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 text-center">
            <img src="{{url('asset/front-end/img/kontak.jpg')}}" alt="" class="rounded img-fluid">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="titleKontak fw-bold mt-3">
              Get in touch and let's make great things happen together!
            </h1>
            <p class="fw-light mt-3">Looking for more information or have a question about our product or service? Our team is here to help!</p>
            <form action="/">
              <div class="col mb-3">
                <input type="text" class="form-control" placeholder="Your Name" aria-label="First name">
              </div>
              <div class="row">
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Your Phone" aria-label="First name">
                </div>
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Your Email" aria-label="Last name">
                </div>
              </div>
              <div class="col mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell me about your question"></textarea>
              </div>
              <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-primary btn-contact mb-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact form -->

    <!-- footer -->
    <div class="mt-5">
    @include('parts.user.footer')
    </div>
    <!-- end  footer -->

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>