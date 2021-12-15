@extends('administrator.master')
@section('content')
    <h6>Editar producto</h6>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @method('PUT')
        @include('administrator.product._form')
    </form>
@endsection