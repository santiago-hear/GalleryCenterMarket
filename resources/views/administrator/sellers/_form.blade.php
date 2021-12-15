@csrf
@include('administrator.structure.validation-error')
<form>
    <div class="row g-3">

        <div class="col-sm-2">
            <label for="inputPassword" class="col-form-label">Nombre</label>
        </div>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="name" id="name" placeholder="Nombre comerciante">
        </div>

        <div class="col-sm-2">
            <label for="inputPassword" class="col-form-label">Teléfono</label>
        </div>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" placeholder="Teléfono">
        </div>


        <div class="col-sm-2">
            <label for="inputPassword" class="col-form-label">Dirección</label>
        </div>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="address" id="address" placeholder="Dirección">
        </div>


        <div class="col-sm-2">
            <label for="identificationType" class="col-form-label">Tipo de identificación</label>
        </div>
        <div class="col-sm-10">
            <select class="form-control" name="identificationType" id="identificationType" aria-label="Default">
                <option selected disabled>Seleccionar...</option>
                <option value="1">Cédula de Ciudadanía</option>
                <option value="2">NIT</option>
                <option value="3">Pasaporte</option>
                <option value="4">Cédula de Extranjería</option>
            </select>
        </div>


        <div class="col-sm-2">
            <label for="inputPassword" class="col-form-label">Número de identificación</label>
        </div>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="identificationNumber" id="identificationNumber" placeholder="Número de identificación">
        </div>


        <div class="col-sm-2">
            <label for="inputPassword" class="col-form-label">Sector</label>
        </div>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="sector" id="sector" placeholder="Sector">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-success">Aceptar</button>
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a> 
        </div>
</div>
</form>