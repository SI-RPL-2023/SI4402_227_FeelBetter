@extends('layout.transaksiTerapis')
  @section('content')


<!-- navbar -->
  <div class="container mt-4">
    @include('parts.user.navbar')
  </div>
<!-- end  navbar -->

 <div class="container mt-5">
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
                    <div class="d-flex">
                        <div>
                            <h4 class="card-title fw-bold text-capitalize mt-4 mb-4">Konfirmasi waktu</h4>
                        </div>
                        <div class="ms-auto"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <form method="POST" action="" class="form-input" >
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <select id="verification" class="form-select" name="confirmation">
                            <option disabled selected value="">pilih status konfirmasi</option>
                            <option value="mohon menunggu persetujuan dokter terapis" @if($konfirmasiKonsultasi -> confirmation == "mohon menunggu persetujuan dokter terapis") selected @endif>mohon menunggu persetujuan dokter terapis</option>
                            <option value="Mohon mengganti tanggal konsultasi" @if($konfirmasiKonsultasi -> confirmation == "Mohon mengganti tanggal konsultasi") selected @endif>Mohon mengganti tanggal konsultasi</option>
                            <option value="Disetujui" @if($konfirmasiKonsultasi -> confirmation == "Disetujui") selected @endif>Disetujui</option>
                        </select>
                    </div>
                      <button type="submit" class="btn btn-primary">Konfirmasi</button>
                  </form>           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection