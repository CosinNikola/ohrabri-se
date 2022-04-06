@extends('layout/app')
@section('content')
<div class="min-vh-100">
@auth
@include('iskustva/formaiskustva')
@endauth
@if(count($iskustva) > 0)
<h2 class="text-center mt-5">Iskustva korisnika:</h2>
<hr class="w-60 mx-auto">
@foreach($iskustva as $iskustvo)
<div class="card mt-4 w-60 mx-auto polja">
  <div class="card-body">
              {{$iskustvo->ime_autora}}
              <h4 class="card-title mt-2">{{ $iskustvo->naslov }}</h4>
              <small class="created">
                @if($iskustvo->updated_at === null)
                {{$iskustvo->created_at->format('d.m.Y H:i')}}
                @else
                {{$iskustvo->updated_at->format('d.m.Y H:i')}}
                @endif
                </small>
              <p class="card-text">{{ $iskustvo->sadrzaj }}</p>
              @auth
              @if($iskustvo->id_autora === auth()->user()->id)
              <div class="d-flex flex-row justify-content-end">
                <a href="iskustva/{{$iskustvo->id}}/edit" class="mx-2 btn btn-info">Izmeni...</a>
                {!!Form::open(['action'=>['App\Http\Controllers\IskustvaController@destroy', $iskustvo->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method', 'Delete')}}
                {{Form::submit('Obriši', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
              </div>
              @endif
              @endauth
            </div>
          </div>
@endforeach
      <div class="text-center mx-auto">{{$iskustva->links()}}</div>
@else
    <p>Nema Iskustava</p>
@endif
</div>
@endsection