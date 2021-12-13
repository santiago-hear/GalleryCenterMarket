@extends('dashboard.master')
@section('content')
    <h3 class="text-center">Editar comerciantes</h3> 
    <form action=" {{ route("seller.update", $seller -> id) }} " method="POST">
        @method('PUT')
        @include('dashboard.sellers._form')
    </form>
@endsection