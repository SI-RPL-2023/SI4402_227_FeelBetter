@extends('layout.user-profile')
  <link rel="stylesheet" href="{{url('asset/front-end/css/booking.css')}}" />
    @section('content')
    <!-- navbar -->
    <div class="container mt-4 d-print-none">
    @include('parts.user.navbar-profil')
    </div>
    <!-- end  navbar -->
    <section class="booking-summary container mt-4">
        <h2>Booking Summary #{{$book -> id}}</h2>
        <div class="summary-info">
          <div class="info-item">
            <h3>date</h3>
            <p>{{$book -> jam_konsultasi}} - {{$book -> tanggal_konsultasi}}</p>
          </div>
          <div class="info-item">
            <h3>Terapis</h3>
            <p>Dr. {{$book -> nama_dokter}}</p>
          </div>
          <div class="info-item">
            <h3>Detail</h3>
            <p>Consultation Mental Health</p>
          </div>
          <div class="info-item">
            <h3>Konsultasi bersifat</h3>
            <p>{{$book -> konsultasi_bersifat}}</p>
          </div>
        </div>
        <div class="summary-total">
          <h3>Total price</h3>
          <p>Rp. {{number_format($book -> biaya_konsultasi,0)}}</p>
        </div>
      </section>

      <div class="mt-4 mb-4 d-print-none text-center">
            <a href="/"><button type="button" class="btn btn-outline-primary me-3"><i class="fa fa-home me-2" aria-hidden="true"></i>Kembali ke home</button></a>
            <a href="" id="printPDF" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-print me-2" aria-hidden="true"></i>Cetak pdf</button></a>
      </div>

        <script>
          document.getElementById("printPDF").addEventListener("click", function(event){
          event.preventDefault()
          window.print();
          });  
        </script>

   @endsection