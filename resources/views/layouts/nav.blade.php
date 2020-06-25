<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SCRUNLIZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catálogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Instagram</a>
      </li>
      @if (Route::has('login'))
      @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:document.getElementById(&quot;logout-form&quot;).submit()">Salir</a>
          </li>
          <form method="POST" action="/logout" accept-charset="UTF-8" id="logout-form">
          @csrf
          </form>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
          @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
      @endauth
    @endif
    </ul>
    
  </div>
</nav>
