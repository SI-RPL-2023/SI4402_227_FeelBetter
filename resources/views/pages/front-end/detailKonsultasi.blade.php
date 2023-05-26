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
                            <img src="{{url('asset/front-end/img/profile.png')}}" class="rounded-circle" height="150px" width="150px"/>
                        </div>
                        <h3 class="mt-3 text-white">{{Auth::user()->name}}</h3>
                        <p class="mt-2 text-white">{{Auth::user()->email}} | ID pengguna: {{Auth::user()->id}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title fw-bold text-capitalize">Konsultasi - <span class="fw-light">{{$detailKonsultasi -> tanggal_konsultasi}} : {{$detailKonsultasi -> jam_konsultasi}} </span></h4>
                            <hr>
                        </div>
                        <div class="ms-auto"></div>
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi bersama</label>
                        <input type="text" disabled class="form-control border-none" id="staticEmail" value="Dr. {{$detailKonsultasi -> nama_dokter}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi dilakukan secara</label>
                        <input type="text" disabled class="form-control" id="staticEmail" value="{{$detailKonsultasi -> konsultasi_bersifat}}">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Keluhan kamu</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$detailKonsultasi -> keluhan}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Konfirmasi waktu oleh terapis</label>
                        <input type="text" disabled class="form-control" id="staticEmail" value="{{$detailKonsultasi -> confirmation}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputNamaMobil" class="form-label fw-bold">Tempat untuk konsultasi</label>
                        <input type="text" disabled class="form-control" id="staticEmail" value="{{$detailKonsultasi -> link_meet}}">
                    </div>
                    <hr>
                    <button class="btn btn-primary w-100" onclick="event.preventDefault(); location.href='{{ url('pembayaran/' . $detailKonsultasi->id) }}';">Selesaikan pembayaran</button>
                    @if($detailKonsultasi -> confirmation == "Mohon mengganti tanggal konsultasi")
                        <button type="submit" class="btn btn-outline-primary w-100">Ubah tanggal - jam konsultasi</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection