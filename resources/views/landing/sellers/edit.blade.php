@extends('landing.master')
@section('content')
    <h3 class="text-center">Editar comerciante</h3> 
    <form action=" {{ route("seller.update", $seller -> id) }} " method="POST">
        @method('PUT')
        @include('landing.sellers._form')
    </form>
@endsection