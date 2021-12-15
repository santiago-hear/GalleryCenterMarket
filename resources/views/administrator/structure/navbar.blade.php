<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <span class="navbar-brand">GalleryMaketCenter</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('landing.index') }}">Inicio</a>
        <a class="nav-link" href="{{ route('category.index') }}">Categorías</a>
        <a class="nav-link" href="{{ route('product.index') }}">Productos</a>
        <a class="nav-link" href="{{ route('user.index') }}">Usuarios</a>
      </div>
    </div>
  </div>
  <ul class="navbar-nav">
    @auth
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
    @endauth
  </ul>
</nav>