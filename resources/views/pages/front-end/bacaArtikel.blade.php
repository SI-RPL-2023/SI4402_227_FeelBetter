@extends('layout.user-profile')
@section('content')
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.user.navbar-profil')
    </div>
    <!-- end  navbar -->

    <!-- top head -->
    <div id="head" class="container mt-3 d-flex justify-content-center align-items-center">
            <div id="main">
              <h5 class="fw-light">
                Profil: <span class="fw-bold" style="letter-spacing: 0.07rem; color: #434242;">{{Auth::user()->name}}</span>
              </h5>
            </div>
                <div class="dropdown me-3">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-book me-2" aria-hidden="true"></i>
                    Artikel mu
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/artikelTertulis">Artikel tertulis</a></li>
                    <li><a class="dropdown-item" href="/tulisArtikel">Tulis artikel</a></li>
                  </ul>
                </div>
              <button class="btn btn-danger btn-log-profile" onclick="event.preventDefault(); location.href='{{ url('logout') }}';">Keluar</button>
        </div>
        </div>
    </div>
    <!-- end top head -->

   <div class="container mt-4">
     <center><img src="{{ asset ('storage/images/'.$bacaArtikel -> foto_artikel) }}" alt="" width="1020px" height="300px"></center>
    <h1 class="fs-3 mt-4 fw-bold">{{$bacaArtikel -> judul_artikel}}</h1>
    <span>by {{Auth::user()->name}} - {{$bacaArtikel -> created_at}}</span>
    <p class="fs-6">{!! $bacaArtikel -> isi_artikel !!}</p>
   </div>

    <!-- end daftar artikel tertulis -->

@endsection