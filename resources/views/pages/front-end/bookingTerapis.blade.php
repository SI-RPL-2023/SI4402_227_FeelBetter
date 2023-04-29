<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Terapis</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{url('asset/front-end/css/booking.css')}}" />
    <!-- font awesome -->
    <link href="{{url ('asset/back-end/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <!-- navbar -->
    <div class="container mt-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">FeelBetter</a>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div id="profil">Hi, Yohanes Nico Kristiawan!</div>
              </div>
            </div>
          </nav>
    </div>
    <!-- end  navbar -->
    <div class="header container mt-4" >
        <h2>Temukan Dokter Pilihanmu</h2>
    </div>

    <section class="doctors container mt-4">
        <div class="doctor-card">
          <img src="{{url('asset/front-end/img/doctor1.jpg')}}" alt="Doctor 1">
          <h3>Dr. Claudia Stephani S.Psi</h3>
          <p>Specialty: Psikolog Militer</p>
          <p>Rp200.000</p>
          <button>Book Appointment</button>
        </div>
        
        <div class="doctor-card">
          <img src="{{url('asset/front-end/img/doctor2.jpg')}}" alt="Doctor 2">
          <h3>Dr. Ruby Jane S.Psi</h3>
          <p>Specialty: Psikolog klinis</p>
          <p>Rp200.000</p>
          <button>Book Appointment</button>
        </div>
        
        <div class="doctor-card">
          <img src="{{url('asset/front-end/img/doctor3.jpg')}}" alt="Doctor 3">
          <h3>Dr. David Lee S.Psi</h3>
          <p>Specialty: Psikolog Klinis</p>
          <p>Rp200.000</p>
          <button>Book Appointment</button>
        </div>
        
        <div class="doctor-card">
          <img src="{{url('asset/front-end/img/doctor4.jpg')}}" alt="Doctor 4">
          <h3>Dr. Sarah Johnson S.Psi</h3>
          <p>Specialty: Psikolog konseling</p>
          <p>Rp200.000</p>
          <button>Book Appointment</button>
        </div>
        <div class="doctor-card">
            <img src="{{url('asset/front-end/img/doctor1.jpg')}}" alt="Doctor 4">
            <h3>Dr. Lionel Messi S.Psi</h3>
            <p>Specialty: Psikolog konseling</p>
            <p>Rp200.000</p>
            <button>Book Appointment</button>
          </div>
          <div class="doctor-card">
            <img src="{{url('asset/front-end/img/doctor5.jpg')}}" alt="Doctor 4">
            <h3>Dr. Farah Queen</h3>
            <p>Specialty: Psikolog konseling</p>
            <p>Rp200.000</p>
            <button>Book Appointment</button>
          </div>
          <div class="doctor-card">
            <img src="{{url('asset/front-end/img/doctor6.jpg')}}" alt="Doctor 4">
            <h3>Dr. Cupid hernawati</h3>
            <p>Specialty: Psikolog konseling</p>
            <p>Rp200.000</p>
            <button>Book Appointment</button>
          </div>
          <div class="doctor-card">
            <img src="{{url('asset/front-end/img/doctor7.jpg')}}" alt="Doctor 4">
            <h3>Dr. Johnny seanz</h3>
            <p>Specialty: Psikolog konseling</p>
            <p>Rp200.000</p>
            <button>Book Appointment</button>
          </div>
      </section>
</body>
</html>