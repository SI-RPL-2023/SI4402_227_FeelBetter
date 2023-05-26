@extends('layout.user-profile')
@section('content')
    <!-- navbar-->
    @if (Auth::guest() || (Auth::check() && Auth::user()->isPasien()) || (Auth::check() && Auth::user()->isTerapis()) )
    <div class="container mt-4">
      @include('parts.user.navbar')
    </div>
    @endif
    <!-- end navbar -->

   <div class="container mt-4">
     <center><img src="{{ asset ('storage/images/'.$bacaArtikel -> foto_artikel) }}" alt="" width="1020px" height="300px"></center>
    <h1 class="fs-3 mt-4 fw-bold">{{$bacaArtikel -> judul_artikel}}</h1>
    <span>by {{Auth::user()->name}} - {{$bacaArtikel -> created_at}}</span>
    <p class="fs-6">{!! $bacaArtikel -> isi_artikel !!}</p>
   </div>

    <!-- end daftar artikel tertulis -->

<!-- footer -->
<div class="mt-5">
    @include('parts.user.footer')
</div>
<!-- end  footer -->

@endsection
