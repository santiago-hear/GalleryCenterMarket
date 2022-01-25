<nav class="navbar navbar-expand-lg navbaritems">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto categories">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Comerciantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Pabellones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Información Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Información de contacto</a>
                </li>
                <li class="nav-item dropdown actors">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contenido
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Home Principal</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Redes Sociales</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Sobre GCM</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>