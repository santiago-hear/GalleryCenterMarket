@extends('seller.master')
@section('content')
    <h6>Editar producto</h6>
    <form action="{{ route('myproducts.update', $product->id) }}" method="POST">
        @method('PUT')
        @include('seller.myproducts._form')
    </form>
@endsection