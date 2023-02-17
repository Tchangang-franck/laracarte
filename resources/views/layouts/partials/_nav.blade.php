<nav class="navbar navbar-expand-lg bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('_home-path') }}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="{{ set_active_route('_home-path') }} nav-link" aria-current="page" href="{{ route('_home-path') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{ set_active_route('_about-path') }} nav-link " href="{{ route('_about-path') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Planet
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
              <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
              <li><a class="dropdown-item" href="https://laracasts.com">Laracasts</a></li>
              <li><a class="dropdown-item" href="https://larajobs.com">Larajobs</a></li>
              <li><a class="dropdown-item" href="https://laravel-news.com">Lara News</a></li>
              <li><a class="dropdown-item" href="https://larachat.com">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> 
        </ul>
        <ul class="nav navbar-nav  navbar-right">
            <li><a href="#" class="nav-link">Login</a></li>
            <li><a href="#" class="nav-link">Register</a></li>
          </ul>
      </div>
    </div>
  </nav>