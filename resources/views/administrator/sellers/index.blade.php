@extends('administrator.master')
@section('content')
    <a href="{{ route('seller.create') }}" class="btn btn-success btn-small mb-3">Crear comerciante</a>
    
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Comerciante</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Tipo de Identificación</th>
                <th>Número de identificación</th>
                <th>Sector</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sellers as $seller)
                <tr>
                    <td scope="row">{{ $seller -> id }}</td>
                    <td>{{ $seller -> name }}</td>
                    <td>{{ $seller -> phoneNumber }}</td>
                    <td>{{ $seller -> address }}</td>
                    <td>{{ $seller -> identificationType }}</td>
                    <td>{{ $seller -> identificationNumber }}</td>
                    <td>{{ $seller -> sector }}</td>
                    <td>{{ $seller -> created_at }}</td>
                    <td>
                        <a href="{{ route('seller.edit', $seller -> id) }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('seller.show', $seller -> id) }}" class="btn btn-success btn-sm">Ver</a>
                        <button data-id="{{ $seller->id }}" class="btn btn-danger btn-sm"
                            data-bs-toggle='modal' data-bs-target="#ModalDelete">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $sellers->links() }}
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que deseas eliminar el comerciante?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('seller.destroy',0) }}" data-action="{{ route('seller.destroy',0) }}" method="POST">
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
            modal.find('.modal-title').text('Vas a eliminar la publicación ' + id)
        })
    }
    
</script>