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
                            <h4 class="card-title fw-bold text-capitalize">Riwayat konsultasi</h4>
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
                                @foreach($riwayatkonsultasi as $rk)
                                    <td>{{$rk -> nama_pasien}}</td>
                                    <td>{{$rk -> tanggal_konsultasi}}</td>
                                    <td>{{$rk -> jam_konsultasi }}</td>
                                    <td>
                                        <a href="/detailKonsultasi/{{$rk -> id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
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