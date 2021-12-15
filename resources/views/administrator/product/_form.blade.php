@csrf
@include('administrator.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="product_name" id="product_name" 
    placeholder="Nombre del producto" value="{{ old('product_name', $product -> product_name) }}">
</div>

<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="description" id="description" 
    placeholder="descripción del producto" value="{{ old('description', $product -> description) }}">
</div>

<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="number" name="price" id="price" 
    placeholder="Precio" value="{{ old('price', $product -> price) }}">
</div>

{{-- lista desplegable categorías --}}
<div class="form-group">
    <select class="form-control" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Seleccionar...</option>
        @foreach($categories as $category_name => $id)
            <option {{ $product->category_id == $id ? 'selected="selected"':'' }} value="{{ $id }}">{{ $category_name }}</option>
        @endforeach
    </select>
</div>
{{-- lista desplegable comerciantes --}}
<div class="form-group">
    <select class="form-control" name="seller_id" id="seller_id" aria-label="Default">
        <option selected disabled>Seleccionar...</option>
        @foreach($sellers as $seller)
            <option {{ $product->seller_id == $seller->id ? 'selected="selected"':'' }} value="{{ $id }}">{{ $seller->name }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>

