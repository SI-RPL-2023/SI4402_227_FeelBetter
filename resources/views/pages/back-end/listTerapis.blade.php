@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Terapis aktif
                </h6>
            </div>
            <div class="card-header py-3">
                <a href="/ExportDataTerapis">
                    <button type="button" class="btn btn-success">
                    <i class="fa fa-file-excel pr-2"></i>
                    Export data terapis
                    </button>
                  </a> 
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
                        <th>No STR</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telpon</th>
                        <th>No STR</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      @foreach($listTerapis as $lt)
                      @foreach($daftarTerapis as $dt)
                      <tr>
                        <td>{{$lt -> name}}</td>
                        <td>{{$lt -> email}}</td>
                        <td>{{$lt -> phone_number}}</td>
                        <td>{{$dt -> nomor_str}}</td>
                        <td>
                            <a href="/admin/detailTerapis/{{$dt -> id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="/admin/validasiTerapis/{{$dt -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
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
