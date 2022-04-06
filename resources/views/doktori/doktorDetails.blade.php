@extends('layout/app')
@section('content')
<div class="min-vh-100">
<div class="container mt-5 col-md-6 second-color py-5 drDetails hero">
      <div class="row">
          <div class="col col-md-3">
              <img src="{{$doktor->slika}}" alt="">
          </div>
          <div class="col col-md-9 mt-2">
              <h5><span>Ime i prezime:</span> dr {{$doktor->ime}} {{$doktor->prezime}}</h5>
              <h5><span>Zvanje:</span> Doktor {{$doktor->specijalizacija}}</h5>
              <h5><span>E-mail adresa:</span> {{$doktor->email}}</h5>
              <h5><span>Broj telefona:</span> {{$doktor->brTel}}</h5>
          </div>
      </div>
  </div>
  </div>
@endsection