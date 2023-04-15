@extends('layout.user-profile')
    @section('content')
    <!-- navbar -->
    <div class="container mt-4">
    @include('parts.user.navbar-profil')
    </div>
    <!-- end  navbar -->

    <div id="head" class="container mt-4">
            <div id="main">
              <div>
                <a> Profil :</a>
                <button id="profile" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                    <li><a class="dropdown-item" href="#">Action 2</a></li>
                    <li><a class="dropdown-item" href="#">Action 3</a></li>
                  </ul>
              </div>
            </div>
                <div class="dropdown me-3">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-cog me-2" aria-hidden="true"></i>
                    Pengaturan
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              <button class="btn btn-danger btn-log-profile" onclick="event.preventDefault(); location.href='{{ url('logout') }}';">Keluar</button>
        </div>
        </div>
    </div>
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
    <section class="card-profil container mt-4">
      <div class="card" style="width: 355px;">
            <div class="card-top text-center pt-3 pb-3 rounded-top" style="background: rgba(64, 73, 215, 0.7);">
            @if(Auth::user()->role->name == 'Terapis')
              <img src="{{url('asset/front-end/img/doctor.png')}}" class="card-img-top img-thumbnail rounded-circle m-auto " alt="profile image" style="width: 100px; height:100px;">
            @else
              <img src="{{url('asset/front-end/img/profile.png')}}" class="card-img-top img-thumbnail rounded-circle m-auto " alt="profile image" style="width: 100px; height:100px;">
            @endif
              <h1 class="fs-4 text-white fw-bold mt-3 text-center">{{Auth::user()->name}}</h1>
              <span class="text-center text-white fw-light">{{Auth::user()->role->name}}, {{Auth::user()->email}}</span>
              <div class="d-flex justify-content-center">
                <button class="btn btn-primary d-block mt-2 me-2" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Verifikasi profile</button>
                <button class="btn btn-outline-light d-block mt-2" data-bs-toggle="modal" data-bs-target="#modalSettingProfile">Pengaturan</button>
              </div>
            </div>    
            <div class="card-body">
              @if(!empty($infoProfile->tanggal_lahir))
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-calendar fa-lg text-secondary me-2" aria-hidden="true"></i>
                  <span class="fs-6 fw-regular text-secondary">Usia</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">{{ $umur }} tahun</h6>
              </div>
              @endif
              @if(!empty($infoProfile->berat_badan))
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa-solid fa-weight-scale text-secondary me-2"></i>
                  <span class="fs-6 fw-regular text-secondary me-5">Berat Badan</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">{{ $infoProfile->berat_badan }}</h6>
              </div>
              @endif
              @if(!empty($infoProfile->tinggi_badan))
               <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa-solid fa-arrow-up-wide-short text-secondary me-2"></i>
                  <span class="fs-6 fw-regular text-secondary me-5">Tinggi Badan</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">{{ $infoProfile->tinggi_badan }}</h6>
              </div>
              @endif
            </div>
          </div>
    </section>
    <!-- modal verifikasi profile -->
    @include('parts.user.modalVerifikasiProfile')
    <!-- end modal verifikasi profile -->

    <!-- modal pengaturan profile -->
    @include('parts.user.modalPengaturanProfile')
    <!-- end modal pengaturan profile -->
    

    @endsection