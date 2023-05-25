<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('themes/create') }}">THEME</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Themes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('themes/create') }}">Nouveau</a></li>
              <li><a class="dropdown-item" href="{{ url('themes') }}">Liste des themes </a></li>
             </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Documents
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('documents/create') }}">Nouveau</a></li>
              <li><a class="dropdown-item" href="{{ url('documents') }}">Liste des Documents </a></li>
             </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Deconnexion</a>
          </li> --}}
        </ul>
   @auth


   <form class="d-flex align-items-center" method="post" action="{{route('logout')}}">
    Bienvenue  {{Auth::user()->name}}
    @csrf
    <button class="btn btn-outline-success" type="submit">Deconnexion</button>
</form>


@endauth
@guest
    Vous n'etes pas connecte <br>
    <a class="btn btn-sm btn-success" href="{{route('login')}}">Connexion</a>
@endguest
      </div>
    </div>
  </nav>
