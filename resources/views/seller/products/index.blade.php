@extends('seller.master')
@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-success btn-small mb-3">Crear producto</a>
    <h6>Productos</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Comerciante</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                @if($product->seller_id == auth()->user()->id)
                    <tr>
                        <td scope="row">{{ $product -> id }}</td>
                        <td>{{ $product -> product_name }}</td>
                        <td>{{ $product -> description }}</td>
                        <td>{{ $product -> price }}</td>
                        <td>
                            @foreach($sellers as $seller)
                                {{ $product->seller_id == $seller->id ? $seller->name : ''}}
                            @endforeach
                        </td>
                        <td>{{ $product -> created_at }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product -> id) }}" class="btn btn-info btn-sm">Editar</a>
                            <a href="{{ route('products.show', $product -> id) }}" class="btn btn-success btn-sm">Ver</a>
                            <button data-id="{{ $product->id }}" class="btn btn-danger btn-sm"
                                data-bs-toggle='modal' data-bs-target="#ModalDelete">Eliminar</button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
{{ $products->links() }}
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que deseas eliminar el producto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('products.destroy',0) }}" data-action="{{ route('products.destroy',0) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function(){
        $('#ModalDelete').on('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#deletePost').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deletePost').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar el producto ' + id)
        })
    }
    
</script>