@extends('layout/app')
@section('content')
<div class="container iskustva w-60 mt-3">
        <div class="card">
            <div class="card-header">
              {{ $pitanje->ime_autora }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $pitanje->naslov }}</h5>
              <p class="card-text">{{ $pitanje->sadrzaj }}</p>
              <hr>
              <div class="w-60 mx-auto">
                  <h3>Odgovori na pitanje:</h3>
          {!! Form::open(['action' => ['App\Http\Controllers\PitanjaController@update',$pitanje->id], 'method' 
=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('sadrzajOdgovora', 'Sadrzaj')}}
            {{Form::textarea('sadrzajOdgovora', '', ['class' =>'form-control', 'placeholder' =>'Sadrzaj odgovora'])}}
        </div>
        {{Form::hidden('_method', "PUT")}}
        <div class="text-center mt-3">
        {{Form::submit('Odgovori', ['class'=>'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
</div>
</div>
@endsection