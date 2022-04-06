@extends('layout/app')
@section('content')
<h2 class="mt-5 text-center">Izmeni iskustvo: </h2>
<div class="w-30 mx-auto mt-4">
    {!! Form::open(['action' => ['App\Http\Controllers\IskustvaController@update', $iskustvo->id], 'method' 
        => 'POST']) !!}
        <div class="form-group mb-3">
            {{Form::label('naslov', 'NASLOV', ['class' => 'fs-5'])}}
            {{Form::text('naslov', $iskustvo->naslov, ['class' =>'form-control polja'])}}
        </div>
        <div class="form-group">
            {{Form::label('sadrzaj', 'SADRŽAJ', ['class' => 'fs-5'])}}
            {{Form::textarea('sadrzaj', $iskustvo->sadrzaj, ['class' =>'form-control polja'])}}
        </div>
        <div class="text-center mt-3">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Izmeni iskustvo', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
        </div>
    </div>
    @endsection