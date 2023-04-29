@extends('layout.booking')
  @section('content')
<!-- navbar -->
  <div class="container mt-4">
    @include('parts.user.navbar')
  </div>
<!-- end  navbar -->
    <div class="header container mt-4" >
        <h2>Temukan Dokter Pilihanmu</h2>
    </div>

<section class="doctors container mt-4">
  <div class="container">
    <div class="row">
      @foreach($daftarDokter as $dd)
      <div class="col-4">
        <div class="doctor-card">
        <img src="{{url('asset/front-end/img/doctor1.jpg')}}" alt="Doctor 1">
          <h3>Dr. {{$dd -> nama_lengkap}}</h3>
          <p>Specialty: Psikolog Militer</p>
          <p>Rp 200.000</p>
        <button class="dropdown-item text-center btn-appointment" type="button"><a href="/appointment/{{$dd -> id}}" class="text-decoration-none text-white">Book Appointment</a></button>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</section>
@endsection