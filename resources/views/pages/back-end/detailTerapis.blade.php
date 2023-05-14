@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- page heading -->
      <h1 class="h3 mb-3 text-gray-800">Detail terapis {{$detailTerapis -> nama_lengkap}}</h1>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="/admin/listTerapis">
                    <button type="button" class="btn btn-primary">
                    Kembali
                    </button>
                  </a>
                </h6>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>STR</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Berat - tinggi badan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>STR</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Berat - tinggi badan</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      <tr>
                        <td>{{$detailTerapis -> nama_lengkap}}</td>
                        <td>{{$detailTerapis -> email}}</td>
                        <td>{{$detailTerapis -> nomor_telpon}}</td>
                        <td>{{$detailTerapis -> nomor_str}}</td>
                        <td>{{$detailTerapis -> tanggal_lahir}}</td>
                        <td>{{$detailTerapis -> jenis_kelamin}}</td>
                        <td>{{$detailTerapis -> berat_badan}} KG - {{$detailTerapis -> tinggi_badan}} CM</td>
                        <td>
                            <a href="/admin/validasiTerapis/{{$detailTerapis -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                        </td>  
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
