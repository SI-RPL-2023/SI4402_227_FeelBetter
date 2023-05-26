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
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="d-md-flex">
                            <div>
                                <h4 class="card-title fw-bold text-capitalize">Konsultasi - <span class="fw-light">{{$pembayaran -> tanggal_konsultasi}} : {{$pembayaran -> jam_konsultasi}} </span></h4>
                                <hr>
                            </div>
                            <div class="ms-auto"></div>
                        </div>
                        <div class="mb-4">
                            <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi dilakukan bersama</label>
                            <input type="text" disabled class="form-control border-none" id="staticEmail" value="Dr. {{$pembayaran -> nama_dokter}}">
                        </div>
                        <div class="mb-4">
                            <label for="inputNamaMobil" class="form-label fw-bold">Konsultasi dilakukan secara</label>
                            <input type="text" disabled class="form-control" id="staticEmail" value="{{$pembayaran -> konsultasi_bersifat}}">
                        </div>
                        <div class="mb-4">
                            <label for="inputNamaMobil" class="form-label fw-bold">upload bukti pembayaran</label>
                            <input type="file" class="form-control" id="staticEmail" name="bukti_pembayaran">
                        </div>
                        <hr>
                        <div class="mb-4">
                            <label for="inputNamaMobil" class="form-label fw-bold">Biaya konsultasi</label>
                            <input type="text" readonly class="form-control-plaintext fw-bold text-danger" id="staticEmail" value="Rp. {{number_format($pembayaran -> biaya_konsultasi,0)}}">
                        </div>
                        <div class="mb-4">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Silahkan melakukan pembayaran ke
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Dana -> 0878777776778</li>
                                                <li>Gopay -> 0878777776778</li>
                                                <li>OVO -> 0878777776778</li>
                                                <li>Mandiri -> 32732832783723</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary w-100">Upload bukti pembayaran</button>
                        @if($pembayaran -> confirmation == "Mohon mengganti tanggal konsultasi")
                            <button type="submit" class="btn btn-outline-primary w-100">Ubah tanggal - jam konsultasi</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection