@extends('seller.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('myproducts.store') }}" method="POST">
        @include('seller.myproducts._form')
    </form>
@endsection