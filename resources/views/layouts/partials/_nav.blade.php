<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
    <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ set_active_route('home') }}">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item {{ set_active_route('about') }}">
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item {{ set_active_route('contact') }}">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
      </ul>
    </div>
  </nav>