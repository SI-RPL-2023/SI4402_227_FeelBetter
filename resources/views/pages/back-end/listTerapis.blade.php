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
                        <th>Password</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      <!-- foreach($listTransaction as $lt) -->
                      <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                           <form action="#" method="post">
                            <a href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-success btn-circle btn-sm"><i class="fas fa-images"></i></a>
                            <a href="#"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                            <!-- csrf
                            method('delete') -->
                            <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                          </form>
                        </td>  
                      </tr>
                    <!-- endforeach -->
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
