@extends('administrator.master')
@section('content')
<div class="row g-3">
    <div class="col-md-6">
        <label for="name" class="form-label">{{ __('Nombre') }}</label>
        <input disabled type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name ) }}" autocomplete="name" autofocus>
    </div>
    <div class="col-md-6">
        <label for="lastname" class="form-label">{{ __('Apellido') }}</label>
        <input disabled type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname ) }}" autocomplete="lastname" autofocus>
    </div>
    <div class="col-md-12">
        <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
        <input disabled type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email ) }}" autocomplete="email" autofocus>
    </div>
    <div class="col-md-2">
        <label for="country" class="form-label">{{ __('País') }}</label>
        <input disabled type="text" class="form-control" id="country" value="+57" disabled>
    </div>
    <div class="col-10">
        <label for="phone_number" class="form-label">{{ __('Número de Celular') }}</label>
        <input disabled type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number ) }}" autocomplete="phone_number" autofocus>
    </div>
    <div class="col-12">
        <label for="address" class="form-label">{{ __('Dirección') }}</label>
        <input disabled type="text" class="form-control" id="address" name="address" placeholder="Calle 10 # 15-12" value="{{ old('addess', $user->addess ) }}" autocomplete="address" autofocus>
    </div>
    <div class="col-md-5">
        <label for="identification_type" class="form-label">{{ __('Tipo de Identificación') }}</label>
        <select disabled id="identification_type" name="identification_type" class="form-select @error('identification_type') is-invalid @enderror">
            <option selected disabled>Seleccionar...</option>
            <option value="1">Cédula de Ciudadanía</option>
            <option value="2">NIT</option>
            <option value="3">Pasaporte</option>
            <option value="4">Cédula de Extranjería</option>
        </select>
    </div>
    <div class="col-md-7">
        <label for="identification_number" class="form-label">{{ __('Número de Identificación') }}</label>
        <input disabled type="identification_number" class="form-control @error('identification_number') is-invalid @enderror" id="identification_number" name="identification_number" value="{{ old('identification_number', $user->identification_number ) }}" autocomplete="identification_number" autofocus>
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label">{{ __('Estado') }}</label>
        <select disabled id="status" name="status" class="form-select">
            <option selected disabled>{{$user->status}}</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label">{{ __('Rol') }}</label>
        <select disabled id="status" name="status" class="form-select">
            <option selected disabled>Seleccionar...</option>
            @foreach($rols as $rol)
                <option {{ $user->rol_id == $rol->id ? 'selected="selected"':'' }} value="{{ $rol->id }}">{{ $rol->rol }}</option>
            @endforeach
        </select>
    </div>
</div>
@endsection