@extends('layout/app')
@section('content')
<div class="min-vh-100">
<div class="contanier mt-5 second-color w-50 mx-auto px-3 py-3">
    <!-- @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach
    @endif -->
    @if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
        @endif
{!! Form::open(['action' => 'App\Http\Controllers\ChangePasswordController@changePasswordPut', 'method' 
        => 'POST']) !!} 
    <h3 class="text-center">Promeni Lozinku</h3>
    <div class="d-flex flex-row justify-content-between mt-4">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Trenutna lozinka</label>
    <input type="password" class="form-control" name="old-password">
    @if($errors->any('old-password'))
    <span class="span-error">{{ $errors->first('old-password') }}</span>
    @endif
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nova lozinka</label>
    <input type="password" class="form-control" name="new-password">
    @if($errors->any('new-password'))
    <span class="span-error">{{ $errors->first('new-password') }}</span>
    @endif
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Potvrdi novu lozinku</label>
    <input type="password" class="form-control" name="confirm-password">
    @if($errors->any('confirm-password'))
    <span class="span-error">{{ $errors->first('confirm-password') }}</span>
    @endif
    </div>
</div>
<div class="text-end">      
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Promeni lozinku', ['class'=>'btn btn-success'])}}
{!! Form::close() !!}
</div>
</div>
</div>
@endsection