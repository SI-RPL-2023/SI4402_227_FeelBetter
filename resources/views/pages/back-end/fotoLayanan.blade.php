@extends('layout.admin')

@section('content') 
<!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">foto layanan {{$fotoLayanan -> name}}</h1>
           
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <a href="/admin/daftarLayanan">
                    <button type="button" class="btn btn-primary">
                    Kembali
                    </button>
                  </a>
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-4">
                    <img src="{{ asset ('storage/images/'.$fotoLayanan -> gambar) }}" alt="foto layanan feelbetter">
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- end of begin content -->
@endsection