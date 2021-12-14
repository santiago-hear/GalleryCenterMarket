@extends('administrator.master')
@section('content')
    <h6>Editar Usuario</h6>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('administrator.users._form')
    </form>
@endsection