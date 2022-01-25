@csrf
@include('administrator.structure.validation-error')
@if($errors)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
<div class="row g-3">
    <div class="col-md-6">
        <label for="name" class="form-label">{{ __('Nombre') }}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="lastname" class="form-label">{{ __('Apellido') }}</label>
        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>
        @error('lastname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email' ) }}" autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-2">
        <label for="country" class="form-label">{{ __('País') }}</label>
        <input type="text" class="form-control" id="country" value="+57" disabled>
    </div>
    <div class="col-10">
        <label for="phone_number" class="form-label">{{ __('Número de Celular') }}</label>
        <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number' ) }}" autocomplete="phone_number" autofocus>
        @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12">
        <label for="address" class="form-label">{{ __('Dirección') }}</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Calle 10 # 15-12" value="{{ old('addess' ) }}" autocomplete="address" autofocus>
    </div>
    <div class="col-md-5">
        <label for="identification_type" class="form-label">{{ __('Tipo de Identificación') }}</label>
        <select id="identification_type" name="identification_type" class="form-select @error('identification_type') is-invalid @enderror">
            <option selected disabled>Seleccionar...</option>
            <option value="1">Cédula de Ciudadanía</option>
            <option value="2">NIT</option>
            <option value="3">Pasaporte</option>
            <option value="4">Cédula de Extranjería</option>
        </select>
        @error('identification_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-7">
        <label for="identification_number" class="form-label">{{ __('Número de Identificación') }}</label>
        <input type="identification_number" class="form-control @error('identification_number') is-invalid @enderror" id="identification_number" name="identification_number" value="{{ old('identification_number' ) }}" autocomplete="identification_number" autofocus>
        @error('identification_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label">{{ __('Estado') }}</label>
        <select id="status" name="status" class="form-select">
            <option selected disabled>Seleccionar...</option>
            <option value="{{ 'App\Models\Status\UnlockStatus' }}">Unlock</option>
            <option value="{{ 'App\Models\Status\LockStatus' }}">Lock</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="rol_id" class="form-label">{{ __('Rol') }}</label>
        <select id="rol_id" name="rol_id" class="form-select">
            <option selected disabled>Seleccionar...</option>
            @foreach($rols as $rol)
                <option value="{{ $rol->id }}"> {{ $rol->rol }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success">{{ __('Registrar Usuario') }}</button>
    </div>
</div>

