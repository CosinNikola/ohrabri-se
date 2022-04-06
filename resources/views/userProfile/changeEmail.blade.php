@extends('layout/app')
@section('content')
<div class="min-vh-100">
<div class="contanier mt-5 second-color w-50 mx-auto px-3 py-3">
    @if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
        @endif
{!! Form::open(['action' => 'App\Http\Controllers\ChangeCredsController@changeEmail', 'method' 
        => 'POST']) !!} 
    <h3 class="text-center">Promeni Email</h3>
    <div class="d-flex flex-row justify-content-around mt-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Trenutna Email Adresa</label>
    <input type="text" class="form-control" name="old-email" value="{{$korisnik->email}}">
    @if($errors->any('old-email'))
    <span class="span-error">{{ $errors->first('old-email') }}</span>
    @endif
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nova Email Adresa</label>
    <input type="text" class="form-control" name="email">
    @if($errors->any('email'))
    <span class="span-error">{{ $errors->first('email') }}</span>
    @endif
    </div>
    </div>
    <div class="text-end">      
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Promeni email', ['class'=>'btn btn-success'])}}
{!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection