{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('administrator.structure.validation-error')
<div class="row g-3">
    <div class="form-group">
        {{-- input:text --}}
        <label for="category_name" class="col-sm-6">Nombre categoría</label>
        <input class="form-control col-sm-6" type="text" name="category_name" id="category_name"
        placeholder="Nombre de la categoria" value="{{ old('category_name', $category -> category_name) }}">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="category_description" id="category_description" cols="30" rows="10" placeholder="Descripción de la categoria">{{ old('category_description', $category -> category_description) }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Aceptar</button>
        <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
    </div>
</div>


