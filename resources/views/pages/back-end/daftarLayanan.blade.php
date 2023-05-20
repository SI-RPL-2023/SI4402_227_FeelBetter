@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <a href="/admin/tambahLayanan">
        <button type="button" class="btn btn-primary mb-3">
          Tambahkan Layanan
        </button>
      </a>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Layanan Sudah Tersedia
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
                        <th>Nama Layanan</th>
                        <th>Deskripsi Layanan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama Layanan</th>
                        <th>Deskripsi Layanan</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      @foreach($daftarLayanan as $dl)
                      <tr>
                        <td>{{$dl -> name}}</td>
                        <td><?php echo substr($dl -> deskripsi,0,50)?>...</td>
                        <td>
                           <form action="/admin/deleteLayanan/{{$dl->id}}" method="post">
                            <a href="/admin/fotoLayanan/{{$dl -> id}}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-images"></i></a>
                            <a href="/admin/editLayanan/{{$dl -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                          </form>
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
