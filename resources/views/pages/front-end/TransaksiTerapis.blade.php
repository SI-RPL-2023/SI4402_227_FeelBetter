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
                            <h4 class="card-title fw-bold text-capitalize">Daftar Pasien Menunggu konfirmasi waktu konsultasi</h4>
                        </div>
                        <div class="ms-auto"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Tanggal konsultasi</th>
                                    <th class="border-top-0">Jam konsultasi</th>
                                    <th class="border-top-0">opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($pendingConfirmation as $pc)
                                    <td>{{$pc -> nama_pasien}}</td>
                                    <td>{{$pc -> tanggal_konsultasi}}</td>
                                    <td>{{$pc -> jam_konsultasi }}</td>
                                    <td>
                                        <a href="/konfirmasiKonsultasi/{{$pc -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                                        <a href="/" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection