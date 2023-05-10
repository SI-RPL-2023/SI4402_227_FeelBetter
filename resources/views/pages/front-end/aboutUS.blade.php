@extends('layout.user')
  @section('content')

    <!-- navbar -->
      <div class="container mt-4">
        @include('parts.user.navbar')
      </div>
    <!-- end  navbar -->

    <div class="container text-center mt-4">
      <h3 class="fst-italic fw-bold" style="color:#4049d7;">FeelBetter</h3>
      <p class="fw-light">Transform Your Mind, Empower Your Life with FeelBetter</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/BiDjRrpGF38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mt-3"></iframe>
    </div>

    <!-- tentang kami -->
    <section id="tentangKami">
      <div class="container-fluid mt-3 p-3">
        <div class="row justify-content-center tentangKami">
          <center><h1 class="title-tentangKami pt-4">Tentang kami</h1></center>
          <div class="col-6 col-md-5">
            <p class="desc-tentangKami mt-3 pb-4 me-5">
              Selamat datang di FeelBetter - sebuah situs yang didedikasikan untuk membantu Anda mencapai kesehatan dan kebahagiaan yang lebih baik. Kami berkomitmen untuk menyediakan sumber daya yang membantu Anda dalam perjalanan kesehatan Anda, dari nutrisi dan kebugaran hingga kesehatan mental dan emosional. <br> <br> Di FeelBetter, kami memahami betapa sulitnya menjaga kesehatan, terutama di dunia yang semakin sibuk dan stres. Oleh karena itu, kami berusaha untuk membuat pengalaman kesehatan Anda menjadi lebih mudah dan lebih efektif. Kami percaya bahwa kesehatan adalah hak asasi manusia, dan setiap orang berhak untuk merasa sehat, bahagia, dan bugar.
            </p>
          </div>
          <div class="col-6 col-md-5 pb-4">
            <p class="desc-tentangKami mt-3 ms-4">
              Kami berkomitmen untuk menyediakan konten yang akurat dan terpercaya untuk membantu Anda mencapai kesehatan optimal Anda. Kami bekerja sama dengan para ahli kesehatan, termasuk nutrisionis, pelatih kebugaran, psikolog, dan dokter, untuk memastikan bahwa informasi yang kami berikan benar-benar bermanfaat bagi Anda. <br> <br> Kami berharap Anda menemukan informasi dan sumber daya di FeelBetter yang bermanfaat bagi Anda. Terima kasih telah memilih kami sebagai mitra Anda dalam perjalanan kesehatan Anda.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end tentang kami -->

    <section id="lokasiKami">
      <div class="container mt-5 lokasiKami">
        <center>
          <h1 class="title-lokasiKami mb-3">Lokasi kami</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1154436948864!2d110.40447907449733!3d-6.995683068513708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b41e6247fb5%3A0xf54ce90d9a1706f9!2sJl.%20Gunung%20Sawo%20No.17%2C%20RT.002%2C%20Petompon%2C%20Kec.%20Gajahmungkur%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050231!5e0!3m2!1sid!2sid!4v1683739918358!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
      </div>
    </section>

    <!-- footer -->
      <div class="mt-5">
        @include('parts.user.footer')
      </div>
    <!-- end  footer -->
    
  @endsection