@extends('layout.transaksiTerapis')
  @section('content')


<!-- navbar -->
  <div class="container mt-4">
    @include('parts.user.navbar')
  </div>
<!-- end  navbar -->

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="card summary">
                <div class="card-body">
                    <div class="card-body little-profile text-center">
                        <div class="round m-auto">
                            <img src="https://i.pinimg.com/564x/24/d1/93/24d19367bf659c3a183a27e4a31de19e.jpg" class="rounded-circle" height="150px" width="150px"/>
                        </div>
                        <h3 class="mt-3 text-white">Dr. {{Auth::user()->name}}</h3>
                        <p class="mt-2 text-white">{{Auth::user()->email}} | ID terapis: {{Auth::user()->id}}</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title fw-bold text-capitalize">Konsultasi - <span class="fw-light">{{$detailJanjiTemu -> tanggal_konsultasi}} : {{$detailJanjiTemu -> jam_konsultasi}} </span></h4>
                            <hr>
                        </div>
                        <div class="ms-auto"></div>
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi bersama</label>
                        <input type="text" disabled class="form-control border-none" id="staticEmail" value=" {{$detailJanjiTemu -> nama_pasien}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi dilakukan secara</label>
                        <input type="text" disabled class="form-control" id="staticEmail" value="{{$detailJanjiTemu -> konsultasi_bersifat}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Keluhan pasien</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$detailJanjiTemu -> keluhan}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Tempat untuk konsultasi</label>
                        <input type="text" disabled class="form-control" id="staticEmail" value="{{$detailJanjiTemu -> link_meet}}">
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection