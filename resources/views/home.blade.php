@extends('layout.app')
@section('content')
<div class="container my-5 text-justify w-75 p-5 second-color hero">
    <h1 class="text-center">Dobrodošli na Ohrabri Se!</h1>
    <p class="fs-5">
        Tu smo da vam pomognemo u pronalaženju rešenja vašeg problema.
        Ovde možete pročitati razna iskustva naših korisnika.
        Možete postaviti pitanje našim doktorima, koji će Vam prvom prilikom odgovoriti na isto.
        Imate i mogućnost da vidite sa kojim doktorima imamo saradnju i koje doktore možete i lično kontaktirati.
        Sve u svemu, poenta svega je da <span class="fw-bold text-decoration-underline">UVEK POSTOJI REŠENJE</span>.
    </p>
</div>
<div class="row my-4 w-100">
    <div class="col col-md-4 offset-1 hero p-3">
        <h2 class="text-center">ISKUSTVA KORISNIKA</h2>
        <div class="card my-4 mx-auto polja">
          @if($iskustvo !== null)
            <div class="card-body">
              {{$iskustvo->ime_autora}}
              <h4 class="card-title mt-2">{{ $iskustvo->naslov }}</h4>
              <small class="created">{{$iskustvo->created_at->format('d.m.Y H:i')}}</small>
              <p class="card-text">{{ $iskustvo->sadrzaj }}</p>
            </div>
          </div>
          @endif
          <div class="text-end">
              <a class="btn btn-success mb-3" href="/iskustva">Još iskustava...</a>
          </div>
    </div>
    <div class="col col-md-4 offset-2 hero p-3">
        <h2 class="text-center">PITANJA KORISNIKA</h2>
        <div class="container iskustva my-3">
        <div class="card cardBorder polja">
              <div class="card-body cardBg">
                @if($pitanje !== null)
              <h6 class="mb-3">{{ $pitanje->ime_autora }}</h6>
              <h5 class="card-title">{{ $pitanje->naslov }}</h5>
              <small class="created">{{$pitanje->created_at->format('d.m.Y H:i')}}</small>
              <p class="card-text">{{ $pitanje->sadrzaj }}</p>
              @if($pitanje->sadrzajOdgovora !== null)
              <div class="card mx-auto">
                <div class="card-body">
                  <h6 class="card-title">{{ $pitanje->imeDoktora }}</h6>
                  <p class="card-text fs-5">{{ $pitanje->sadrzajOdgovora }}</p>
                </div>
              </div>
              @endif
              @endif
            </div>
          </div>
      </div>
      <div class="text-end">
              <a class="btn btn-success mb-3" href="/pitanja">Još pitanja...</a>
          </div>
    </div>
    
</div>
<div class="row w-100">
    <div class="col col-md-9 text-center mx-auto my-3 hero p-5">
        <h2 class="my-4">NAŠI DOKTORI</h2>
        <div class="row justify-content-evenly">
          @if(count($doktori) > 0 && count($doktori) < 5)
        @for($i=0; $i < count($doktori); $i++)
    <div class="card polja my-3" style="width: 15rem;">
  <img src="{{$doktori[$i]->slika}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">dr {{ $doktori[$i]->ime }} {{ $doktori[$i]->prezime }}</h5>
    <p class="card-text">Doktor {{ $doktori[$i]->specijalizacija }}</p>
    <a href="/doktori/{{$doktori[$i]->id}}" class="btn btn-success text">Detaljnije</a>
  </div>
</div>
@endfor
@endif
</div>
<div class="text-end">
              <a class="btn btn-success my-3" href="/doktori">Još doktora...</a>
          </div>
    </div>
</div>
@endsection
