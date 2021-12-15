@extends('landing.master')
@section('content')
    <h3 class="text-center">Formulario de registro de comerciantes</h3> 
    <form action=" {{ route("seller.store") }} " method="POST">
        @include('landing.sellers._form')
    </form>
@endsection