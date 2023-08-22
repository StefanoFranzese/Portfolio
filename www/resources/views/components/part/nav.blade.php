<nav class="navbar navbar-expand-lg navbar-dark  navbar-dark my-1 my-md-3 mx-1 mx-md-3 mx-lg-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Nome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item mx-md-2 mx-lg-3">
            <a class="nav-link {{ URL::current() == url('/') ? 'active' : '' }}" href="{{route('projects')}}">Project</a>
          </li>
          <li class="nav-item mx-md-2 mx-lg-3">
            <a class="nav-link {{ URL::current() == url('/about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item mx-md-2 mx-lg-3">
            <a class="nav-link {{ URL::current() == url('/contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>