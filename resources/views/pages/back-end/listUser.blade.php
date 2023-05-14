@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar pengguna aktif
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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>NIK</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      @foreach($listUser as $lu)
                      @foreach($listPatient as $lp)
                      <tr>
                        <td>{{$lu -> name}}</td>
                        <td>{{$lu -> email}}</td>
                        <td>{{$lu -> phone_number}}</td>
                        <td>{{$lp -> NIK}}</td>
                        <td>
                            <a href="/admin/detailPengguna/{{$lp -> id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="/admin/validasiPengguna/{{$lp -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                        </td>  
                      </tr>
                    @endforeach
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
