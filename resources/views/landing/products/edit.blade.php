@extends('landing.master')
@section('content')
    <h6>Editar producto</h6>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @method('PUT')
        @include('landing.products._form')
    </form>
@endsection