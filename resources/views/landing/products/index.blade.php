@extends('landing.master')
@section('content')
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
                    <a href="{{ route('products.show', $product -> id) }}" class="btn btn-primary btn-sm">Ver</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection