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
                    Yohanes Nico Kristiawan
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
              <button class="btn btn-danger btn-log-profile">Keluar</button>
        </div>
        </div>
    </div>

    <section class="card-profil container mt-4">
      <div class="card" style="width: 355px;">
            <div class="card-top text-center pt-3 pb-3 rounded-top" style="background: rgba(64, 73, 215, 0.7);">
              <img src="{{url('asset/front-end/img/foto profil.jpeg')}}" class="card-img-top img-thumbnail rounded-circle m-auto " alt="profile image" style="width: 100px; height:100px;">
              <h1 class="fs-4 text-white fw-bold mt-3 text-center">Yohanes Nico Kristiawan</h1>
              <span class="text-center text-white fw-light">Pasien, yohanesnico50@gmail.com</span>
              <div class="d-flex justify-content-center">
                <button class="btn btn-primary d-block mt-2 me-2" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Verifikasi profile</button>
                <button class="btn btn-outline-light d-block mt-2" data-bs-toggle="modal" data-bs-target="#modalSettingProfile">Pengaturan</button>
              </div>
            </div>    
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa fa-calendar fa-lg text-secondary me-2" aria-hidden="true"></i>
                  <span class="fs-6 fw-regular text-secondary">Usia</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">44 tahun</h6>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa-solid fa-weight-scale text-secondary me-2"></i>
                  <span class="fs-6 fw-regular text-secondary me-5">Berat Badan</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">86 Kg</h6>
              </div>
               <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                  <i class="fa-solid fa-arrow-up-wide-short text-secondary me-2"></i>
                  <span class="fs-6 fw-regular text-secondary me-5">Tinggi Badan</span>
                </div>
                <h6 class="m-0 text-dark fw-bold">181 CM</h6>
              </div>
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