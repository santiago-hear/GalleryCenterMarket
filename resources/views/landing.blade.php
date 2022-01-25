@extends('landing.master')
@section('content')
<div class="contaner-fluid carrusel">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('imagenes/vegetables.jpg') }}" class="d-block img-fluid">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('imagenes/verduras.jpg') }}" class="d-block img-fluid">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('imagenes/plaza.jpg') }}" class="d-block img-fluid">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Anterior</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Siguiente</span>
		</button>
	</div>
</div>

<div class="row">
	<h1 class="text-center text-success my-5">Conoce nuestros comerciantes</h1>

</div>

<div class="row row-cols-1 row-cols-md-5 g-4 m-4">
	@foreach($sellers as $seller)
	<div class="col">
		<div class="card">
			<img src="{{ asset('imagenes/comerciante2.png') }}" class="card-img-top">
			<div class="card-body text-center">
				<h5 class="card-title"> {{ $seller -> name }} {{ $seller -> lastname }} </h5>
				<p class="h6 card-text my-2"> {{ $seller -> email }} </p>
				<p class="h6 card-text my-2">Teléfono: {{ $seller -> phone_number }} </p>
				<a href="{{ route('sellers.show', $seller -> id) }}" class="btn btn-primary btn-sm">Ver</a>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="vermas">
			<a href="#">
				<p>Ver más</p>
				<ion-icon name="arrow-forward-circle-outline"></ion-icon>
			</a>
		</div>
	</div>
	@endforeach
</div>

<div class="row">
	<h1 class="text-center text-success my-5">Los mejores productos están aquí</h1>
</div>

<div class="row row-cols-1 row-cols-md-5 g-4 m-4">
	@foreach($products as $product)
	<div class="col">
		<div class="card">
			<img src="{{ asset('imagenes/producto1.png') }}" class="card-img-top">
			<div class="card-body text-center">
				<h5 class="card-title"> {{ old('product_name', $product -> product_name) }} </h5>
				<p class="h5 card-text my-3"> {{ old('description', $product -> description) }} </p>
				<p class="h5 card-text my-3">Precio: {{ old('price', $product -> price) }} </p>
				<a href="{{ route('products.show', $product -> id) }}" class="btn btn-primary btn-sm">Ver</a>
			</div>
		</div>
	</div>
	@endforeach
	<div class="col">
		<div class="vermas">
			<a href="#">
				<p>Ver más</p>
				<ion-icon name="arrow-forward-circle-outline"></ion-icon>
			</a>
		</div>
	</div>
</div>
@endsection