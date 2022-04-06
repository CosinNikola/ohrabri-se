@extends('adminPages/adminNav')
@section('content')
<div class="w-25 mx-auto mt-5">
    <h2>Kreiraj korisnika:</h2>
    {!! Form::open(['action' => 'App\Http\Controllers\AdminController@createKorisnik', 'method' 
        => 'POST']) !!}
        <div class="form-group mt-3">
            {{Form::label('name', 'Ime')}}
            {{Form::text('name', '', ['class' =>'form-control', 'placeholder' =>'petar'])}}
            @error('name')
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
            {{Form::label('password', 'Lozinka')}}
            <input type="password" name="password" class="form-control" placeholder="********">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div class="form-group mt-3">
            {{Form::label('password', 'Potvrda lozinke')}}
            <input type="password" name="password_confirmation" class="form-control" placeholder="********">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-3">
        {{Form::label('roleID', 'Izaberite ulogu korisnika:')}}
        <select class="form-select" name="roleID" aria-label="Default select example">
        <option selected>Izaberite ulogu</option>
        <option value="1">Admin</option>
        <option value="2">Doktor</option>
        <option value="3">Korisnik</option>
        </select>
        </div>
        <div class="text-center mt-3">
            {{Form::submit('Kreiraj korisnika', ['class'=>'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection