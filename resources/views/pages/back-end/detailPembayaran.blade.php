@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Detail Pembayaran Yang Diterima
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
                        <th>Konsultasi bersifat</th>
                        <th>Biaya konsultasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID appointment</th>
                        <th>Nama pasien</th>
                        <th>Nama dokter</th>
                        <th>tanggal konsultasi</th>
                        <th>Konsultasi bersifat</th>
                        <th>Biaya konsultasi</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      <tr>
                        <td>{{$detailPembayaran -> id_appointment}}</td>
                        <td>{{$detailPembayaran -> appointment -> nama_pasien}}</td>
                        <td>{{$detailPembayaran -> appointment -> nama_dokter}}</td>
                        <td>{{$detailPembayaran -> appointment -> tanggal_konsultasi}}</td>
                        <td>{{$detailPembayaran -> appointment -> konsultasi_bersifat}}</td>
                        <td>Rp. {{number_format($detailPembayaran -> appointment -> biaya_konsultasi,0)}}</td>
                        <td>
                            <a href="/admin/validasiPembayaran/{{$detailPembayaran -> id}}" class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
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
