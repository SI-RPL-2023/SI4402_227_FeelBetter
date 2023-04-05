<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">FeelBetter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
            <a class="nav-link me-4" href="">Home</a>
            <a class="nav-link me-4" href="#education">Education</a>
            <a class="nav-link me-4" href="#service">Service</a>
            <a class="nav-link me-4" href="#about">about</a>
        </div>
        @guest
        <button type="button" class="btn btn-primary btn-daftar"  onclick="event.preventDefault(); location.href='{{ url('register') }}';">Daftar</button>
        @endguest
    </div>
  </div>
</nav>