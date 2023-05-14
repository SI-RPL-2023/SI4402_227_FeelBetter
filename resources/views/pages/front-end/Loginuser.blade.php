@extends('layout.user')
@section('content')
<section class="vh-50" style="background-color: #86A3B8;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/564x/d5/66/54/d56654b03f0afc8f661852e4923f0809.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="align-self-center mb-3">
                    <i class="fa fa-hospital fa-2x me-3" style="color: #4049D7"></i>
                    <span class="h1 fw-bold">Hello Good People!</span>
                  </div>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account.</h5>
                    @if(Session::has('status'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <hr>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="email" id="email" required class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="pass">Password</label>
                    <input type="Password" name="password" id="pass" required class="form-control form-control-lg" /> 
                  </div>
                  <div class="pt-0 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>
                  <h6 class="fw-light mt-3">Anda belum punya akun? <a href="/register">Daftar</a></h6>
                  <h6 class="fw-light mt-3">Masuk sebagai admin? <a href="/LoginAdmin">Login admin</a></h6>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection