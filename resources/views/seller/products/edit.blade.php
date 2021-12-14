@extends('seller.master')
@section('content')
    <h6>Editar producto</h6>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @include('seller.products._form')
    </form>
@endsection