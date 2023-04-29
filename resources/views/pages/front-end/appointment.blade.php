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
          <h2>Dr. Claudia Stephani</h2>
          <p>Psikolog Militer</p>
          <p>Experience: 10 years</p>
          <p>Dr. Stephani adalah seorang Dokter Spesialis Kebidanan Kandungan yang aktif melayani pasien di RS Stella Maris Makassar. dr.stephani mendapatkan gelar kedokteran setelah menamatkan pendidikan di Universitas Hasanuddin, Makassar.
            Beliau yang tergabung dalam Ikatan Dokter Indonesia (IDI) dan Perkumpulan Obstetri dan Ginekologi Indonesia (POGI) bisa memberikan layanan konsultasi medis terkait kesehatan mental.
            Harga yang tertera merupakan biaya konsultasi dokter, belum termasuk tindakan lain dan biaya admin dari RS/Klinik (apabila ada).</p>
        </div>
        
        <div class="appointment-form">
          <h3>Book an Appointment</h3>
          <h4>Rs FeelBetter Jakarta</h4>
          <p>kota jakarta, jakarta Selatan</p>
          <p style="color: red;">Bayar di rumah sakit</p>
          <b><p>Rp230.000</p></b>
          <form action="#">
            <label for="date">Pilih tanggal dan waktu kunjungan:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
            
            <input type="submit" value="Buat Janji">
          </form>
        </div>
      </section>
      
</body>
</html>