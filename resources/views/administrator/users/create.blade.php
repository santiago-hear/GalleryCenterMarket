@extends('administrator.master')
@section('content')
    <h6>Crear producto</h6>
    <form action="{{ route('user.store') }}" method="POST">
        @include('administrator.users._form')
    </form>
@endsection