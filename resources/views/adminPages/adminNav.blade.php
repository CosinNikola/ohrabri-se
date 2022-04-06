<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <title>Document</title>
</head>
<body>
  <div class="d-flex flex-row">
<ul class="nav flex-column fourth-color w-10 text-center vh-100">
  <li class="nav-item">
    <a class="nav-link active color-light" aria-current="page" href="/home">Početna</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active color-light" aria-current="page" href="/admin/korisnici">Korisnici</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-light" href="/admin/doktori">Doktori</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-light" href="/admin/iskustva">Iskustva</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-light" href="/admin/pitanja">Pitanja</a>
  </li>
  <li class="nav-item">
  <a href="{{ route('logout') }}" class="nav-link color-light"
onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Odjavi se') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" 
method="POST" class="d-none">
@csrf
</form>
  </li>
</ul>
@yield('content')
</div>
</body>

</html>