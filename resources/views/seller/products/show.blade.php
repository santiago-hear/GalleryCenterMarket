@extends('administrator.master')
@section('content')
<div class="row g-3">
        <div class="row g-0">
          <div class="col-md-7">
            <img src="{{ asset('imagenes/producto1.png') }}" class="img-fluid rounded-start">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h2 class="card-title">{{ old('product_name', $product -> product_name) }}</h2>
              <p class="h5 card-text my-3">Descripción: {{ old('description', $product -> description) }}</p>
              <p class="h5 card-text my-3">Precio: {{ old('price', $product -> price) }}</p>
              <p class="h5 card-text my-3">Categoría: {{ old('category_id', $product -> category_id) }}</p>
              <p class="h5 card-text my-3">Comerciante: {{ old('seller_id', $product -> seller_id) }}</p>
              <a href="#" class="btn btn-primary">Agregar al carrito</a>
            </div>
          </div>
        </div>
</div>
<div>
    <a class="btn btn-danger my-2" href="{{ URL::previous() }}">Volver</a>
</div>
@endsection