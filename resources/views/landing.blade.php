@extends('administrator.master')
@section('content')
    <div class="row g-3">
      <h1 class="text-center">CONTENIDO HOME PRINCIPAL</h1>
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
      <h1 class="text-center">COMERCIANTES</h1>
      
    </div>

    <div class="row g-3">
      <h1 class="text-center">PRODUCTOS</h1>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

@endsection
    