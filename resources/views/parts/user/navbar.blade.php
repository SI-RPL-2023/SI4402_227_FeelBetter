<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">FeelBetter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @guest
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
            <a class="nav-link me-4" href="">Home</a>
            <a class="nav-link me-4" href="#education">Education</a>
            <a class="nav-link me-4" href="#service">Service</a>
            <a class="nav-link me-4" href="#about">about</a>
      </div>  
      <button type="button" class="btn btn-primary btn-daftar"  onclick="event.preventDefault(); location.href='{{ url('register') }}';">Daftar</button>
      @endguest
      <!-- daftar menu pasien -->
      @if(Auth::check() && Auth::user()->isPasien())
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
            <a class="nav-link me-4" href="">Home</a>
            <a class="nav-link me-4" href="#education">Education</a>
            <a class="nav-link me-4" href="#service">Service</a>
            <a class="nav-link me-4" href="#about">about</a>
            <a class="nav-link me-4" href="#chat">Chat</a>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-profile dropdown-toggle pe-2" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
          <i class="fa-solid fa-user fa-lg me-2"></i>
          {{Auth::user()->name}}
        </button>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
          <li><button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href='{{ url('profil') }}';">Profile</button></li>
          <li><button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href='{{ url('logout') }}';">Keluar</button></li>
        </ul>
      </div>
      @endif
      <!-- end daftar menu pasien -->

      <!-- daftar menu terapis -->
      @if(Auth::check() && Auth::user()->isTerapis())
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
            <a class="nav-link me-4" href="">Home</a>
            <a class="nav-link me-4" href="#education">Education</a>
            <a class="nav-link me-4" href="#service">Service</a>
            <a class="nav-link me-4" href="#about">about</a>
            <a class="nav-link me-4" href="#chat">Chat</a>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-profile dropdown-toggle pe-2" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
          <i class="fa-solid fa-user fa-lg me-2"></i>
          {{Auth::user()->name}}
        </button>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
          <li><button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href='{{ url('profil') }}';">Profile</button></li>
          <li><button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href='{{ url('logout') }}';">Keluar</button></li>
        </ul>
      </div>
      @endif
      <!-- end daftar menu terapis -->
    </div>
  </div>
</nav>