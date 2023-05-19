<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Summary</title>

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
    <section class="booking-summary container mt-4">
        <h2>Booking Summary</h2>
        <div class="summary-info">
          <div class="info-item">
            <h3>date</h3>
            <p>13.00 Wib - May 5, 2023</p>
          </div>
          <div class="info-item">
            <h3>Terapis</h3>
            <p>Hendrawan S.Psi</p>
          </div>
          <div class="info-item">
            <h3>Detail</h3>
            <p>Consultation Mental Health</p>
          </div>
          <div class="info-item">
            <h3>Location</h3>
            <p>RS FeelBetter Room 5</p>
          </div>
        </div>
        <div class="summary-total">
          <h3>Total price</h3>
          <p>$900</p>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>