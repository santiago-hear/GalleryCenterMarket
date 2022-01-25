@extends('landing.master')
@section('content')

    <h3 class="text-center my-5">Lista de comerciantes</h3>
    
    <div class="row g-3">
        @foreach($sellers as $seller)
            <div class="card col-sm-4">
                <img src="{{ asset('imagenes/comerciante2.png') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title"> {{ $seller -> name }} {{ $seller -> lastname }} </h5>
                    <p class="h6 card-text my-2"> {{ $seller -> email }} </p>
                    <p class="h6 card-text my-2">Teléfono: {{ $seller -> phone_number }} </p>
                    <a href="{{ route('sellers.show', $seller -> id) }}" class="btn btn-primary btn-sm">Ver</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
