@extends('administrator.master')
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-success btn-small mb-3">Crear usuario</a>
    <h6>Usuarios</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Dirección</th>
                <th>Identificación</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Opciones</th>
                <th>Lock/Unlock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td scope="row">{{ $user -> id }}</td>
                    <td>{{ $user -> name.' '.$user -> lastname }}</td>
                    <td>{{ $user -> email }}</td>
                    <td>{{ $user -> phone_number }}</td>
                    <td>{{ $user -> address }}</td>
                    <td>{{ $user -> identification_number }}</td>
                    <td>
                        @foreach($rols as $rol)
                            {{ $user->rol_id == $rol->id ? $rol->key : ''}}
                        @endforeach
                    </td>
                    <td>
                        {{ $user -> status }}
                    </td>
                    <td>
                        <a href="{{ route('user.edit', $user -> id) }}" class="btn btn-primary btn"><ion-icon name="create-outline"></ion-icon></a>
                        <a href="{{ route('user.show', $user -> id) }}" class="btn btn-info btn"><ion-icon name="eye-outline"></ion-icon></a>
                        <button data-id="{{ $user->id }}" class="btn btn-danger btn"
                        data-bs-toggle='modal' data-bs-target="#ModalDelete"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                    <td>
                        <form action="{{ route('state', $user) }}" method="POST">
                            @csrf
                            @if ($estado = $user->status)
                                <div>
                                    @if ($estado == 'locked')
                                        <button class="btn btn-success btn"><ion-icon name="lock-open-outline"></ion-icon></button>
                                    @endif
                                    @if ($estado == 'unlocked')
                                        <button class="btn btn-warning btn"><ion-icon name="lock-closed-outline"></ion-icon></button>
                                    @endif
                                </div>
                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $users->links() }}
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDeleteLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que deseas eliminar el usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('user.destroy',0) }}" data-action="{{ route('user.destroy',0) }}" method="POST">
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
            modal.find('.modal-title').text('Vas a eliminar el usuario ' + id)
        })
    }
    
</script>