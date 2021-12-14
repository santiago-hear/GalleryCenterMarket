@extends('administrator.master')
@section('content')
    <h6>Crear Categoría</h6>
    <form action="{{ route('category.store') }}" class="row g-3" method="POST">
        @include('administrator.categories._form')
    </form>
@endsection