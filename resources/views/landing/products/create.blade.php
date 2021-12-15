@extends('landing.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('product.store') }}" method="POST">
        @include('landing.products._form')
    </form>
@endsection