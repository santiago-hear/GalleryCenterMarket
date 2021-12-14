@extends('seller.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('products.store') }}" method="POST">
        @include('seller.products._form')
    </form>
@endsection