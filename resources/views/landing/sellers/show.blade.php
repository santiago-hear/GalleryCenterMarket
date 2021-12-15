@extends('landing.master')
@section('content')
<div class="row g-3">
    <div>
        <div class="row g-0">
          <div class="col-md-5">
            <img src="{{ asset('imagenes/comerciante2.png') }}" class="img-fluid rounded-start" width="500" height="500">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h2 class="card-title my-3">{{ old('name', $seller -> name) }} {{ old('lastname', $seller -> lastname) }}</h2>
              <p class="h5 card-text my-3">Email: {{ old('email', $seller -> email) }}</p>
              <p class="h5 card-text my-3">Teléfono: {{ old('phone_number', $seller -> phone_number) }}</p>
              <p class="h5 card-text my-3">Dirección: {{ old('address', $seller -> address) }}</p>
              <p class="h5 card-text my-3">N° de identificación: {{ old('identification_number', $seller -> identification_number) }}</p>
              
            </div>
          </div>
        </div>
    </div>
</div>
<div class="text-center">
    <a class="btn btn-danger my-2" href="{{ URL::previous() }}">Volver</a>
</div>
@endsection