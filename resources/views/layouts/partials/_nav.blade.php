<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark ">
    <div class="container">
          <a class="navbar-brand" href="{{ route('_home-path') }}">{{ config('app.name') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item {{ set_active_route('_home-path') }} ">
                <a class=" nav-link" aria-current="page" href="{{ route('_home-path') }}">Home</a>
              </li>
              <li class=" nav-item {{ set_active_route('_about-path') }} ">
                <a class=" nav-link " href="{{ route('_about-path') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Artisan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="plaet-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Planet
                </a>
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                    <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Lara News</a>
                    <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                </ul>
              </li>
              <li class=" nav-item {{ set_active_route('_about-path') }} ">
                <a class="nav-link" href="{{ route('contact-path') }}">Contact</a>
              </li> 
            </ul>
            <ul class="nav navbar-nav  navbar-right">
                <li><a href="#" class="nav-link">Login</a></li>
                <li><a href="#" class="nav-link">Register</a></li>
              </ul>
      </div>
    </div>
  </nav>