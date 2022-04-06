@extends('adminPages/adminNav')
@section('content')
<div class="w-25 mx-auto">
    <h2 class="mt-5 text-center">Izmeni korisnika: </h2>
    {!! Form::open(['action' => ['App\Http\Controllers\AdminController@updateDoktor',$doktor->id], 'method' 
=> 'POST']) !!}
<div class="form-group mt-3">
            {{Form::label('ime', 'Ime')}}
            {{Form::text('ime', $doktor->ime, ['class' =>'form-control', 'placeholder' =>'petar'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('prezime', 'Prezime')}}
            {{Form::text('prezime', $doktor->prezime, ['class' =>'form-control', 'placeholder' =>'petrovic'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('specijalizacija', 'Specijalizacija')}}
            {{Form::text('specijalizacija', $doktor->specijalizacija, ['class' =>'form-control', 'placeholder' =>'hirurg'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('slika', 'Slika')}}
            {{Form::text('slika', $doktor->slika, ['class' =>'form-control', 'placeholder' =>'url'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('email', 'Email adresa')}}
            {{Form::email('email', $doktor->email, ['class' =>'form-control', 'placeholder' =>'primer@xx.com'])}}
        </div>
        <div class="form-group mt-3">
            {{Form::label('brtel', 'Br. Telefona')}}
            {{Form::text('brTel', $doktor->brTel, ['class' =>'form-control', 'placeholder' =>'06xxxxxxxx'])}}
        </div>
        <div class="text-center mt-3">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Izmeni doktora', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
        </div>
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