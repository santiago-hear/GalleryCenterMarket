<nav class="navbar navbar-expand-lg navbar-light firstnavbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="logo-image">
                <img src="{{ asset('imagenes/companyIcon.png') }}" class="img-fluid">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-9 row">
                <form class="d-flex col-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success" type="button" id="search"><ion-icon class="mt-1" name="search-outline"></ion-icon></button>
                    </div>
                </form>
            </ul>
            <ul class="navbar-nav ms-auto">
                <!- Authentication Links ->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item mt-1 row text-center">
                        <a class="btn btn-outline-success btn-sm col-10" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    
                    @endif

                    @if (Route::has('register'))
                    
                        <a class="link-success col-10" style="font-size: small;" href="{{ route('register') }}">{{ __('o registrarse') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->rol->key == 'Admin')
                            <a class="dropdown-item" href="{{ route('home') }}">Inicio</a>
                            <a class="dropdown-item" href="{{ route('product.index') }}">Productos</a>
                            <a class="dropdown-item" href="{{ route('category.index') }}">Categorias</a>
                            <a class="dropdown-item" href="{{ route('user.index') }}">Usuarios</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>