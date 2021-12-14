@extends('administrator.master')
@section('content')
    <div class="row g-3">
      <h1 class="text-center my-5">CONTENIDO HOME PRINCIPAL</h1>
    </div>
    
    <div >
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('imagenes/verduras2.jpg') }}" class="d-block" width="1500" height="500">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imagenes/frutas2.jpg') }}" class="d-block" width="1500" height="500">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imagenes/despensa.jpg') }}" class="d-block" width="1500" height="500">
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

    <div class="row g-3">
      <h1 class="text-center my-5">COMERCIANTES</h1>
      
    </div>

    <div class="row g-3">
      @foreach($sellers as $seller)
      <div class="card col-sm-4">
      <img src="{{ asset('imagenes/comerciante2.png') }}" class="card-img-top">
      <div class="card-body text-center">
        <h5 class="card-title"> {{ old('name', $seller -> name) }} {{ old('lastname', $seller -> lastname) }} </h5>
        <p class="h6 card-text my-2"> {{ old('email', $seller -> email) }} </p>
        <p class="h6 card-text my-2">Teléfono: {{ old('phone_number', $seller -> phone_number) }} </p>
        <a href="{{ route('seller.show', $seller -> rol_id) }}" class="btn btn-primary btn-sm">Ver</a>
      </div>
      </div>
      @endforeach
    </div>

    <div class="row g-3">
      <h1 class="text-center my-5">PRODUCTOS</h1>
    </div>

    <div class="row g-3">
      @foreach($products as $product)
      <div class="card col-sm-4">
      <img src="{{ asset('imagenes/producto1.png') }}" class="card-img-top">
      <div class="card-body text-center">
        <h5 class="card-title"> {{ old('product_name', $product -> product_name) }} </h5>
        <p class="h5 card-text my-3"> {{ old('description', $product -> description) }} </p>
        <p class="h5 card-text my-3">Precio: {{ old('price', $product -> price) }} </p>
        <a href="{{ route('product.show', $product -> id) }}" class="btn btn-primary btn-sm">Ver</a>
      </div>
      </div>
      @endforeach
    </div>

    <div class="my-5">

    </div>

@endsection
    