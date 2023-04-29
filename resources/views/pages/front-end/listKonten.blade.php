@extends('layout.user')
  @section('content')

<!-- navbar -->
<div class="container mt-4">
    @include('parts.user.navbar')
</div>
<!-- end  navbar -->

<div class="container">
	<div class="headline mt-4">
		<div class="row">
		<div class="col-lg-8">
			<h4 class="title-article">Kumpulan artikel terbaru</h4>
		</div>
			<div class="col-lg-4">
				<form class="form-inline search-form d-flex justify-content-end " action="" method="get">
				<input class="form-control me-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container mt-4">
	@foreach($daftarArtikel as $da)
	<div class="card mt-4" style="width: 64em;">
	<img src="{{ asset ('storage/images/'.$da -> foto_artikel) }}" class="card-img-top" alt="artikel" style="height: 10em;">
	<div class="card-body">
		<h5 class="card-title fw-bold">{{$da -> judul_artikel}}</h5>
		<p class="card-text"><?php echo substr($da->isi_artikel,0,350)?>...</p>
		<p class="fw-light fs-6">{{ $da->therapist->name }} - {{$da -> created_at}}</p>
		<a href="#" class="btn btn-primary">Baca selengkapnya</a>
		</div>
	</div>
	@endforeach
</div>

@endsection