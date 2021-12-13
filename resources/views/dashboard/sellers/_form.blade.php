@csrf
<form>
    <div class="row g-3">
    <div class="col-sm-2">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
    </div>

    <div class="col-sm-10">
        <input class="form-control" type="text" name="name" id="name" placeholder="Nombre comerciante">
    </div>

<div class="col-sm-2">
    <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono</label>
</div>
    <div class="col-sm-10">
        <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" placeholder="Teléfono">
    </div>


<div class="col-sm-2">
    <label for="inputPassword" class="col-sm-2 col-form-label">Dirección</label>
</div>
    <div class="col-sm-10">
        <input class="form-control" type="text" name="address" id="address" placeholder="Dirección">
    </div>


<div class="col-sm-2">
    <label for="identificationType" class="col-sm-2 col-form-label">Tipo de identificación</label>
</div>
    <div class="col-sm-10">
        <select id="identificationType" class="form-control">
            <option selected>Seleccione...</option>
            <option>Cédula de ciudadanía</option>
            <option>Cédula de extranjería</option>
        </select>
    </div>


<div class="col-sm-2">
    <label for="inputPassword" class="col-form-label">Número de identificación</label>
</div>
<div class="col-sm-10">
    <input class="form-control" type="text" name="identificationNumber" id="identificationNumber" placeholder="Número de identificación">
</div>


<div class="col-sm-2">
    <label for="inputPassword" class="col-sm-2 col-form-label">Sector</label>
</div>
    <div class="col-sm-10">
        <input class="form-control" type="text" name="sector" id="sector" placeholder="Sector">
    </div>


<div class="text-center">
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-danger" href=" {{ URL::previous() }}">Cancelar</button>
</div>
</div>
</form>