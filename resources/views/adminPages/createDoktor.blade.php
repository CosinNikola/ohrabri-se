@extends('adminPages/adminNav')
@section('content')
<div class="w-25 mx-auto mt-5">
    <h2>Kreiraj korisnika:</h2>
    {!! Form::open(['action' => 'App\Http\Controllers\AdminController@createDoktor', 'method' 
        => 'POST']) !!}
        <div class="form-group mt-3">
            {{Form::label('ime', 'Ime')}}
            {{Form::text('ime', '', ['class' =>'form-control', 'placeholder' =>'petar'])}}
            @error('ime')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('prezime', 'Prezime')}}
            {{Form::text('prezime', '', ['class' =>'form-control', 'placeholder' =>'petrovic'])}}
            @error('prezime')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('specijalizacija', 'Specijalizacija')}}
            {{Form::text('specijalizacija', '', ['class' =>'form-control', 'placeholder' =>'hirurg'])}}
            @error('specijalizacija')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('slika', 'Slika')}}
            {{Form::text('slika', '', ['class' =>'form-control', 'placeholder' =>'url'])}}
            @error('slika')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('email', 'Email adresa')}}
            {{Form::email('email', '', ['class' =>'form-control', 'placeholder' =>'primer@xx.com'])}}
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('brtel', 'Br. Telefona')}}
            {{Form::text('brTel', '', ['class' =>'form-control', 'placeholder' =>'06xxxxxxxx'])}}
            @error('brTel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="text-center mt-3">
        {{Form::submit('Kreiraj doktora', ['class'=>'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection