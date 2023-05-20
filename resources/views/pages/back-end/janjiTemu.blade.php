@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Janji Temu Layanan Konsultasi
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
                        <th>Nama Pasien</th>
                        <th>Nama Terapis</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Jam Konsultasi</th>
                        <th>Biaya Konsultasi</th>
                        <th>Status Konsultasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama Pasien</th>
                        <th>Nama Terapis</th>
                        <th>Tanggal Konsultasi</th>
                        <th>Jam Konsultasi</th>
                        <th>Biaya Konsultasi</th>
                        <th>Status Konsultasi</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      @foreach($janjiTemu as $jt)
                      <tr>
                        <td>{{$jt -> nama_pasien}}</td>
                        <td>Dr. {{$jt -> nama_dokter}}</td>
                        <td>{{$jt -> tanggal_konsultasi}}</td>
                        <td>{{$jt -> jam_konsultasi}}</td>
                        <td>Rp. {{number_format($jt -> biaya_konsultasi,0)}}</td>
                        <td>{{$jt -> confirmation}}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-circle btn-sm"><i class="fas fa-images"></i></a>
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
