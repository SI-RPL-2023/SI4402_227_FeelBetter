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
                        <th>Nama admin</th>
                        <th>Email admin</th>
                        <th>telpon admin</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama admin</th>
                        <th>Email admin</th>
                        <th>telpon admin</th>
                      </tr>
                    </tfoot>
                    <tbody>
                       @foreach($listAdmin as $la)
                      <tr>
                        <td>{{$la -> name}}</td>
                        <td>{{$la -> email}}</td>
                        <td>{{$la -> phone_number}}</td> 
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
  <!-- end of begin content -->
@endsection