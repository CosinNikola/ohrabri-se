@extends('layout/app')
@section('content')
<div class="min-vh-100">
<div class="contanier mt-5 second-color w-50 mx-auto px-3 py-3">
    @if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
        @endif
{!! Form::open(['action' => 'App\Http\Controllers\ChangeCredsController@changeUsername', 'method' 
        => 'POST']) !!} 
    <h3 class="text-center">Promeni Ime</h3>
    <div class="d-flex flex-row justify-content-evenly mt-4 w-75 mx-auto">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Trenutno Ime</label>
    <input type="text" class="form-control" name="old-name" value="{{$korisnik->name}}">
    @if($errors->any('old-name'))
    <span class="span-error">{{ $errors->first('old-name') }}</span>
    @endif
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Novo Ime</label>
    <input type="text" class="form-control" name="name">
    @if($errors->any('name'))
    <span class="span-error">{{ $errors->first('name') }}</span>
    @endif
    </div>
</div>
<div class="text-end">      
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Promeni ime', ['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection