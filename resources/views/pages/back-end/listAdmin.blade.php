@extends('layout.admin')

@section('content') 
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <a href="/admin/tambahAdmin">
      <button type="button" class="btn btn-primary mb-3">
        Tambah Admin
      </button>
    </a>
    <!-- DataTales Example -->
      <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Admin FeelBetter
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
                        <th>Username admin</th>
                        <th>password admin</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Username admin</th>
                        <th>password admin</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        <!-- foreach($listPackage as $lp) -->
                      <tr>
                        <td>raplay</td>
                        <td>raplay</td>
                        <td>
                            <a href="/"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                            <a href="/" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                        </td>  
                      </tr>
                       <!-- endforeach -->
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
  <!-- end of begin content -->
@endsection