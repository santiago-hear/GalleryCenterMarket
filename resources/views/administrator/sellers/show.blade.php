@extends('administrator.master')
@section('content')
<div class="row g-3">
    <div class="form-group">
        {{-- input:text --}}
        <input readonly class="form-control" type="text" name="name" id="name" 
        placeholder="Nombre del comerciante" value="{{ old('name', $seller -> name) }}">
    </div>
    <div class="form-group">
        <input readonly class="form-control" type="text" name="phoneNumber" id="phoneNumber" 
        placeholder="Teléfono" value="{{ old('name', $seller -> phoneNumber) }}">
    </div>
</div>
<div class="text-center">
    <a class="btn btn-danger my-2" href="{{ URL::previous() }}">Aceptar</a>
</div>
@endsection