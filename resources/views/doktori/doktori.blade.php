@extends('layout/app')
@section('content')
@if(count($doktori) > 0)
<div class="min-vh-100">
<h2 class="mt-5 text-center">Naši doktori: </h2>
<hr class="w-60 mx-auto">
<div class="container my-5">
  <div class="row">
  @foreach($doktori as $doktor)
      <div class="col col-md-3 my-3">
    <div class="card polja" style="width: 14rem;">
  <img src="{{$doktor->slika}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">dr {{ $doktor->ime }} {{ $doktor->prezime }}</h5>
    <p class="card-text">Doktor {{ $doktor->specijalizacija }}</p>
    <a href="/doktori/{{$doktor->id}}" class="btn btn-success text">Detaljnije</a>
  </div>
</div>
</div>
@endforeach
    </div>    
 </div>  
@else
    <p>Nema Doktora</p>
@endif
</div>
@endsection