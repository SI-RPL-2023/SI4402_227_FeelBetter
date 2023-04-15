<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">FeelBetter</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="d-flex align-items-center ms-auto">
                @if(Auth::user()->role->name == 'Terapis')
              <img src="{{url('asset/front-end/img/doctor.png')}}" class="card-img-top img-thumbnail rounded-circle me-2" alt="profile image" style="width: 50px; height:50px;">
            @else
              <img src="{{url('asset/front-end/img/profile.png')}}" class="card-img-top img-thumbnail rounded-circle me-2" alt="profile image" style="width: 50px; height:50px;">
            @endif
                <h1 class="fs-6 profile ms-auto">Hi, {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
</nav>
