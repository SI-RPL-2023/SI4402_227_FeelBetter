@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- page heading -->
      <h1 class="h3 mb-3 text-gray-800">Detail pengguna {{$detailPatient -> nama_lengkap}}</h1>
        <!-- Content Row -->
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
                        <th>NIK</th>
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
                        <th>NIK</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Berat - tinggi badan</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      <tr>
                        <td>{{$detailPatient -> nama_lengkap}}</td>
                        <td>{{$detailPatient -> email}}</td>
                        <td>{{$detailPatient -> nomor_telpon}}</td>
                        <td>{{$detailPatient -> NIK}}</td>
                        <td>{{$detailPatient -> tanggal_lahir}}</td>
                        <td>{{$detailPatient -> jenis_kelamin}}</td>
                        <td>{{$detailPatient -> berat_badan}} KG - {{$detailPatient -> tinggi_badan}} CM</td>
                        <td>
                            <a href="/admin/validasiPengguna/{{$detailPatient -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
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
