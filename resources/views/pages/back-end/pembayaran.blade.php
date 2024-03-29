@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Pembayaran Diterima
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
                        <th>ID appointment</th>
                        <th>Nama pasien</th>
                        <th>Nama dokter</th>
                        <th>tanggal konsultasi</th>
                        <th>Status validasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID appointment</th>
                        <th>Nama pasien</th>
                        <th>Nama dokter</th>
                        <th>tanggal konsultasi</th>
                        <th>Status validasi</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      @foreach($daftarPembayaran as $dp)
                      <tr>
                        <td>{{$dp -> id_appointment}}</td>
                        <td>{{$dp -> appointment -> nama_pasien}}</td>
                        <td>{{$dp -> appointment -> nama_dokter}}</td>
                        <td>{{$dp -> appointment -> tanggal_konsultasi}}</td>
                        <td>{{$dp -> validasi_pembayaran}}</td>
                        <td>
                            <a href="/admin/detailPembayaran/{{$dp -> id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="/admin/validasiPembayaran/{{$dp -> id}}" class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                        </td>  
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
