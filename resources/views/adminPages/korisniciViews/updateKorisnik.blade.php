@extends('adminPages/adminNav')
@section('content')
<div class="w-25 mx-auto">
    <h2 class="mt-5 text-center">Izmeni korisnika: </h2>
    {!! Form::open(['action' => ['App\Http\Controllers\UsersController@update',$korisnik->id], 'method' 
=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Ime')}}
            {{Form::text('name', $korisnik->name, ['class' =>'form-control', 'placeholder' =>'Naslov pitanja'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('email', 'Email Adresa')}}
            {{Form::email('email', $korisnik->email, ['class' =>'form-control', 'placeholder' =>'Sadrzaj pitanja'])}}
        </div>
        <div class="mt-3">
        {{Form::label('roleID', 'Izaberite ulogu korisnika:')}}
        {{Form::select('roleID', array('1' => 'Admin', '2' => 'Doktor', '3' => 'Korisnik'), '3')}}
        </div>
        <div class="text-center mt-3">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Izmeni korisnika', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        @if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
        </div>
        
    </div>
@endsection