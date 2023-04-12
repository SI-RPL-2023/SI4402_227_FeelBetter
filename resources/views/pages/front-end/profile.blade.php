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
            <div id="button-container">
                <button id="settings-button" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Pengaturan
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                  </ul>
              <button id="logout-button" class="btn btn-secondary">Keluar</button>
            </div> 
        </div>
        </div>
    </div>

    <section class="card-profil; container mt-4">
      <div class="card" style="width: 18rem;">
          <div class="container mt-4">
            <img class="card-img-top" src="{{url('asset/front-end/img/foto profil.jpeg')}}" alt="Card image cap">
            <h5 style="padding: 10px; text-align: center;" class="card-title">Yohanes Nico Kristiawan</h5>
            <p style="text-align: center;" class="card-text">Pasien, yohanesnico50@gmail.com</p>
            <div style="padding: 10px; float: left;"class="column">
              <a href="#" class="btn btn-left btn-primary">Verifikasi Profil</a>
            </div>
          </div>
            <div class="card-body">
              <div style="padding: 10px; float: left;"class="column">
                <p>Usia</p>
                <p>Berat badan</p>
                <p>Tinggi Badan</p>
              </div>
              <div style="padding: 10px; float: right;" class="column">
                <p>44 tahun</p>
                <p>86 kg</p>
                <p>185 cm</p>
              </div>
            </div>
      </div>
    </section>

    @endsection