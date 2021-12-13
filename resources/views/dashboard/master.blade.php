<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>GalleryCenterMarket</title>
</head>
<body>
    {{-- container --}}
    {{-- incluir la vista del navbar --}}
    @include('dashboard.structure.navbar')
    <div class="container">
        <div>
            {{-- mostrar el status --}}
            @include('dashboard.structure.status')
            {{-- contenido dinamico --}}
            @yield('content')
        </div>
    </div>
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>