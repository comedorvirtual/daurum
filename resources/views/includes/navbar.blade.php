<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand pl-5" href="{{ url('/') }}"><img src="{{asset('/images/logo/logo-completo.png')}}" class="img-logo img-fluid" alt="logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>     
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto pr-5">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('productos*') ? 'active' : '' }}" href="{{ url('productos') }}">Monturas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('nosotros*') ? 'active' : '' }}" href="{{ url('nosotros') }}">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('contacto*') ? 'active' : '' }}" href="{{ url('contacto') }}">Contactenos</a>
              </li>
            </ul>
      </div>
    </div>
</nav>