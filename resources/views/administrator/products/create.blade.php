@extends('administrator.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('product.store') }}" method="POST">
        @include('administrator.products._form')
    </form>
@endsection