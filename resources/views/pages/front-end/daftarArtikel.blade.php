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

    <!-- daftar artikel tertulis -->
    <div class="container mt-3">
        <div class="row">
            @foreach($listArticles as $la)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset ('storage/images/'.$la -> foto_artikel) }}" class="card-img-top" alt="{{ $la->title }}" width="200px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $la->judul_artikel }}</h5>
                            <p class="card-text"><?php echo substr($la->isi_artikel,0,50)?>...</p>
                            <a href="{{ url('artikel/'.$la->id) }}" class="btn btn-primary">Baca lengkap</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- end daftar artikel tertulis -->

@endsection