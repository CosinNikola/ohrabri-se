<nav class="navbar navbar-dark bg-dark py-0">
        <div class="container-fluid justify-content-center py-3 fourth-color">
          <a class="navbar-brand" to="/home">
            <img src="assets\img\os-logo-inverted.png" alt="OS Logo" class="logo">
          </a>
          <h2 class="text-white fw-bold">Ohrabri Se</h2>
        </div>
      </nav>
  <nav class="navbar navbar-expand-lg navbar-light third-color">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav color-black py-2 fw-bold w-75 justify-content-around fs-5">
              <li class="nav-item">
                <a href="/" class="{{(request()->is('/')) ? 'nav-link active' : 'nav-link'}}">POČETNA</a> 
              </li>
              <li class="nav-item">
                <a href="/iskustva" class="{{(\Request::route()->getName() == 'iskustva.index') ? 'nav-link active' : 'nav-link'}}">ISKUSTVA</a>
              </li>
              <li class="nav-item">
                <a href="/pitanja" class="{{(Request::route()->getName() == 'pitanja.index') ? 'nav-link active' : 'nav-link'}}">PITANJA ZA DOKTORE</a>
              </li>
              <li class="nav-item">
                <a href="/doktori" class="{{(Request::route()->getName() == 'doktori.index') ? 'nav-link active' : 'nav-link'}}">DOKTORI ZA KONTAKT  </a>
              </li>
              @guest
              @if(Route::has('login'))
              <li class="nav-item">
                <a href="/login" class="{{(request()->is('login')) ? 'nav-link active' : 'nav-link'}}">PRIJAVI SE</a>
              </li>
              @endif
              @if(Route::has('register'))
              <li class="nav-item">
                <a href="/register" class="{{(request()->is('register')) ? 'nav-link active' : 'nav-link'}}">REGISTRUJ SE</a>
              </li>
              @endif
              @endguest
              @auth
              <li class="nav-item dropdown">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" 
role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" 
aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li><a href="/users/{{auth()->user()->id}}" class="dropdown-item">Moj profil</a></li>
<hr>
@if(auth()->user()->role_id === 1)
<li><a href="/admin" class="dropdown-item">Admin Stranica</a></li>
<hr>
@endif
<a href="{{ route('logout') }}" class="dropdown-item"
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Odjavi se') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" 
method="POST" class="d-none">
@csrf
</form>
</ul>
</li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>