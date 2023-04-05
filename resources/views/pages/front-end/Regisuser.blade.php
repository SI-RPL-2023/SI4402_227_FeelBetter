@extends('layout.user')
@section('content')
<section class="vh-50" style="background-color: #86A3B8;">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; height: 855px">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/564x/66/25/af/6625af0aa34962bf9b1f0828842ec7e8.jpg"
              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="#" method="post" enctype="multipart/form-data">
                  <div class="align-self-center mb-3">
                    <i class="fa fa-hospital fa-2x me-3" style="color: #4049D7"></i>
                    <span class="h1 fw-bold">Let's Join!</span>
                  </div>
                    <h5 class="fw-normal mb-3" style="letter-spacing: 1px;">Sign Up Now.</h5>
                    <hr>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="nama">Full Name</label>
                    <input  type="text" name="nama" id="nama" class="form-control form-control-lg" placeholder="masukan nama lengkap..." require>
                  </div>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="masukan alamat email..." required class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="pass">Password</label>
                    <input type="Password" name="pass" id="pass" placeholder="masukan password..." required class="form-control form-control-lg" /> 
                  </div>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="repass">Confirm Password</label>
                    <input type="Password" name="repass" id="repass" class="form-control form-control-lg" required placeholder="masukan konfirmasi password..." /> 
                  </div>
                  <div class="form-outline mb-2">
                    <label class="form-label" for="nohp">Phone Number</label>
                    <input type="text" name="nohp" id="nohp" required class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline">
                    <label class="form-label mb-3" for="nohp">Daftar sebagai</label><br>
                    <div class="form-check form-check-inline mb-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Pekerja/Mahasiswa</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Terapis</label>
                    </div>
                  </div>
                  <div class="pt-0 mt-3 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Sign Up</button>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an acount? <a href="/login">Sign in</a></p>
                  </div>
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