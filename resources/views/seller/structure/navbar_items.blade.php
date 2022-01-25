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
                    <a class="nav-link" href="{{ route('myproducts.index') }}">Mis Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Mis datos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>