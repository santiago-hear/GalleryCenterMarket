<nav class="navbar navbar-expand-lg navbaritems">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto categories">
                <li class="nav-item">
                    <a class="nav-link" href="#">Carnes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Verduras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Frutas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Abarrotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Textiles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ramas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cacharrería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cafetería</a>
                </li>
                <li class="nav-item dropdown actors">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Reciclaje</a></li>
                        <li><a class="dropdown-item" href="#">Quesos</a></li>
                        <li><a class="dropdown-item" href="#">Tecnología</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sellers.index') }}">Comerciantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pabellones</a>
                </li>
            </ul>
        </div>
    </div>
</nav>