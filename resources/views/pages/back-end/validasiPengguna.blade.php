@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
          <div class="container-fluid">
           <!-- page heading -->
           <h1 class="h3 mb-3 text-gray-800">Foto KTP {{$validasiPengguna -> nama_lengkap}}</h1>
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
                      <img src="{{ asset ('storage/images/'.$validasiPengguna -> foto_ktp) }}" alt="KTP {{$validasiPengguna -> nama_lengkap}}" class="img-fluid">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi NIK {{$validasiPengguna -> nama_lengkap}}</label>
                        <input
                        type="text"
                        class="form-control"
                        placeholder="masukan Keterangan"
                        name="NIK"
                        value="{{$validasiPengguna -> NIK}}"
                        required
                      />
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