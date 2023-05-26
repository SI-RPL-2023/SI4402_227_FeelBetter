@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
          <div class="container-fluid">
           <!-- page heading -->
           <h1 class="h3 mb-3 text-gray-800">Detail pembayaran {{$validasiPembayaran -> appointment -> nama_pasien}}</h1>
            <!-- insert form -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <a href="/admin/listUser">
                    <button type="button" class="btn btn-primary">
                    Kembali
                    </button>
                  </a>
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @method('put')
                    @csrf
                    <div class="mb-3">
                      <img src="{{ asset ('storage/images/'.$validasiPembayaran -> bukti_pembayaran) }}" alt="bukti pembayaran {{$validasiPembayaran -> appointment -> nama_pasien}}" height="505">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Validasi pembayaran</label>
                        <select class="custom-select" name="validasi_pembayaran">
                            <option disabled selected>pilih status konfirmasi</option>
                            <option value="Pending" @if($validasiPembayaran -> validasi_pembayaran == "Pending") selected @endif>Pending</option>
                            <option value="Ditolak" @if($validasiPembayaran -> validasi_pembayaran == "Ditolak") selected @endif>Ditolak</option>
                            <option value="Approved" @if($validasiPembayaran -> validasi_pembayaran == "Approved") selected @endif>Approved</option>
                      </select>
                    </div>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>               
                </div>
              </div>
            </div>
          </div>
<!-- end of begin page content -->
@endsection