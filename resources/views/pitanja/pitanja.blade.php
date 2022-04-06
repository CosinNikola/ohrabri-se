@extends('layout/app')
@section('content')
<div class="min-vh-100">
@auth
@include('pitanja/formapitanja')
@endauth
@if(count($pitanja) > 0)
<h2 class="mt-5 text-center">Pitanja Korisnika: </h2>
<hr class="w-60 mx-auto">
@foreach($pitanja as $pitanje)
<div class="container iskustva w-60 mt-3">
        <div class="card cardBorder polja">
              <div class="card-body cardBg">
              <h6 class="mb-3">{{ $pitanje->ime_autora }}</h6>
              <h5 class="card-title">{{ $pitanje->naslov }}</h5>
              <small class="created">
              @if($pitanje->updated_at === null)
                {{$pitanje->created_at->format('d.m.Y H:i')}}
                @else
                {{$pitanje->updated_at->format('d.m.Y H:i')}}
                @endif
              </small>
              <p class="card-text">{{ $pitanje->sadrzaj }}</p>
             
              @auth
              @if($pitanje->id_autora === auth()->user()->id && $pitanje->sadrzajOdgovora === null)
              <div class="d-flex flex-row justify-content-end">
                <a href="pitanja/edit/{{$pitanje->id}}" class="mx-2 btn btn-info">Izmeni...</a>
                @if($pitanje->id_autora === auth()->user()->id)
                <div class="d-flex flex-row">
                  {!!Form::open(['action'=>['App\Http\Controllers\PitanjaController@destroy', $pitanje->id], 'method'=>'POST'])!!}
                  {{Form::hidden('_method', 'Delete')}}
                  {{Form::submit('Obriši', ['class' => 'btn btn-danger'])}}
                  {!!Form::close()!!}
                </div>
                @endif
              </div>
              @endif
              @endauth
              @auth
              @if((auth()->user()->role_id === 2 && $pitanje->sadrzajOdgovora === null) || (auth()->user()->role_id === 2 && $pitanje->sadrzajOdgovora !== null && auth()->user()->name === $pitanje->imeDoktora))
              <a href="/pitanja/{{$pitanje->id}}">Odgovori...</a>
              @endif
              @endauth
              @if($pitanje->sadrzajOdgovora !== null)
              <div class="card mx-auto">
                <div class="card-body">
                  <h6 class="card-title">{{ $pitanje->imeDoktora }}</h6>
                  <p class="card-text fs-5">{{ $pitanje->sadrzajOdgovora }}</p>
                </div>
              </div>
              @endif
            </div>
          </div>
      </div>
@endforeach
<div class="text-center mx-auto">{{$pitanja->links()}}</div>
@else
<p>Nema pitanja</p>
@endif
</div>
@endsection