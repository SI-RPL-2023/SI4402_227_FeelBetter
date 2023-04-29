<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
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
    <section class="doctor-profile container mt-4">
        <div class="profile-card container">
          <img src="{{url('asset/front-end/img/doctor1.jpg')}}" alt="Doctor 1">
          <h2>Dr. {{$dokterTerpilih -> nama_lengkap}}</h2>
          <p>Psikolog Militer</p>
          <p>Experience: 10 years</p>
          <p>Dr. {{$dokterTerpilih -> nama_lengkap}} adalah seorang psikolog militer yang ahli dalam kesehatan mental dan kejiwaan prajurit militer dan keluarga mereka. Dia membantu mengatasi masalah kejiwaan seperti trauma, depresi, stres, dan kekerasan melalui terapi kelompok dan konseling individu. Dr. {{$dokterTerpilih -> nama_lengkap}} diakui sebagai ahli psikologi militer yang komitmen memberikan layanan kesehatan mental yang berkualitas tinggi.</p>
        </div>
        
        <div class="appointment-form">
          <h3 class="fw-bold fs-2">Book an Appointment</h3>
          <h4 class="fw-light">Rs FeelBetter Jakarta</h4>
          <p class="fw-light">kota jakarta, jakarta Selatan</p>
          <hr>
          <form action="/appointment" method="post" enctype="multipart/form-data">
            @csrf
            <label for="date">Biaya Konsultasi</label>
            <input type="text" readonly class="form-control-plaintext fw-bold text-danger border-light" value="Rp. {{number_format(230000,0)}}">
            <input type="text" name="biaya_konsultasi" value="230000" class="d-none">
            <input type="text" name="nama_dokter" value="{{$dokterTerpilih -> nama_lengkap}}" class="d-none">

            <label for="date">Ajukan tanggal berkonsultasi</label>
            <input type="date" id="date" name="tanggal_konsultasi" required>
            
            <label for="time">Ajukan jam berkonsultasi:</label>
            <input type="time" id="time" name="jam_konsultasi" required>

            <label for="time">Apa yang membuat bapak/ibu merasa tertekan?</label>
            <textarea name="keluhan" id="" cols="30" rows="10" placeholder="tolong ceritakan apa yang bapak/ibu alami sehingga merasa tertekan sampai saat ini...."></textarea>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Buat janji</button>
            </div>
          </form>
        </div>
      </section>
      
</body>
</html>