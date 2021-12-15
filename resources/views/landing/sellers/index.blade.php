@extends('landing.master')
@section('content')

    <h3 class="text-center my-5">Lista de comerciantes</h3>
    
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
                        <a href="{{ route('sellers.show', $seller -> id) }}" class="btn btn-success btn-sm">Ver</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
