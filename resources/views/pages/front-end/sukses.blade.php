@extends('layout.user')
  @section('content')
   

<!-- navbar -->
  <div class="container mt-4">
    @include('parts.user.navbar')
  </div>
<!-- end  navbar -->

    <!-- notif sukses -->
    <div class="container mt-5">
        <center>
            <img src="{{url('asset/front-end/img/sukses_checkout.png')}}" alt="" class="mt-3">
            <h1 class="fw-normal mt-3" style="font-size: 24px">
                Janji temu berhasil dibuat
            </h1>
            <p class="fw-light mt-2" style="width:400px;">
               Mohon menunggu konfirmasi dari pihak dokter terapis selama 1x24 jam hari kerja. <br> Tetap semangat dan selalu bersikaplah positif<span>&#x1F600;</span>.
            </p>
           <button class="btn btn-primary" onclick="event.preventDefault(); location.href='{{ url('/') }}';">Kembali ke home</button>
        </center>
    </div>
    <!-- end notif sukses -->
@endsection
