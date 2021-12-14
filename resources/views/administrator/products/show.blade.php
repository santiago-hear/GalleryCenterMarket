@extends('administrator.master')
@section('content')
<div class="row g-3">
    <div>
        {{-- input:text --}}
        <input readonly class="form-control text-center" type="text" name="product_name" id="product_name" 
        placeholder="Nombre del producto" value="{{ old('product_name', $product -> product_name) }}">
    </div>
    <div class="text-center" style="width: 18rem;">
        <img src="../../imagenes/verduras.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> {{ old('product_name', $product -> product_name) }} </h5>
          <p class="card-text"> {{ old('description', $product -> description) }} </p>
          <a href="#" class="btn btn-primary">Agregar al carrito</a>
        </div>
      </div>
</div>
<div class="text-center">
    <a class="btn btn-danger my-2" href="{{ URL::previous() }}">Volver</a>
</div>
@endsection