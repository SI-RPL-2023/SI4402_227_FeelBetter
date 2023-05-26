@extends('layout.user')
  @section('content')

<!-- navbar -->
  <div class="container mt-4">
    @include('parts.user.navbar')
  </div>
<!-- end  navbar -->

  <div class="container mt-3">
    <h3 class="mb-4">Jenis konsultasi yang kami berikan</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($daftarLayanan as $dl)
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset ('storage/images/'.$dl -> gambar) }}" class="card-img-top" alt="Podcast">
          <div class="card-body">
            <h5 class="card-title">{{$dl -> name}}</h5>
            <p class="card-text">{{$dl -> deskripsi}}</p>
            <a href="#" class="btn btn-primary">Lihat selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
<!-- footer -->
<div class="mt-5">
    @include('parts.user.footer')
</div>
<!-- end  footer -->
@endsection