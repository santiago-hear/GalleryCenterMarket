@extends('landing.master')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="text-center my-5">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <h1 class="greentitle">{{ __('¡Bienvenido '. Auth::user()->name.'!') }}</h1>
            <h3 class="greentitle">{{ __('Usted se ha conectado como '. Auth::user()->rol->rol) }}</h3>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('imagenes/verduras2.jpg') }}" class="d-block w-100" alt="frutas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Productos</h5>
                        <p>Administra y gestiona tus productos</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('imagenes/tomatoes_banner.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Categorías</h5>
                        <p>Gestiona las categorías de GCM</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('imagenes/frutas2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Comerciantes</h5>
                        <p>Administra los comerciantes de la plaza de mercado</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@endsection