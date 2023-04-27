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
    
    <div class="container">
    @if(Session::has('status'))
        @if(Session::get('status') == 'success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(Session::get('status') == 'failed')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endif
    </div>

    <div class="container mt-4 mb-5">
      <form class="p-4 border rounded bg-light" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <h3 class="fw-bold" style="letter-spacing: 0.07rem;">Artikel mu</h3>
        <hr>
        <div class="mb-3">
          <label for="title" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="title" name="judul_artikel" placeholder="Masukkan judul artikel" required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Foto Artikel</label>
          <input type="file" class="form-control" id="image" name="foto_artikel">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Isi Artikel</label>
          <textarea class="form-control" id="myTextarea" name="isi_artikel" rows="5" placeholder="Masukkan isi artikel" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="submitBtn">Terbitkan</button>
      </form>
    </div>

@endsection