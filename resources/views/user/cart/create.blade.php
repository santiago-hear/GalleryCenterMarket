@extends('user.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('cart.store') }}" method="POST">
        @include('user.products._form')
    </form>
@endsection