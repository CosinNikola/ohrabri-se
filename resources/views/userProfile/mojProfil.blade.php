@extends('layout/app')
@section('content')
<div class="min-vh-100">
<div class="contanier mt-5 second-color w-50 mx-auto px-3 py-3 hero">
    <h3 class="text-center">Moj Profil</h3>
    <div class="d-flex flex-row justify-content-between">
        <div>
            <h5><span class="fw-bold">Ime: </span>{{$korisnik->name}}</h5>
            <h5><span class="fw-bold">Email: </span>{{$korisnik->email}}</h5>
            <h5><span class="fw-bold">Lozinka: </span></h5>
        </div>
        <div>
            <h5><a href="/changeUsername/{{$korisnik->id}}">Promeni ime...</a></h5>
            <h5><a href="/changeEmail/{{$korisnik->id}}">Promeni email adresu...</a></h5>
            <h5><a href="/changePassword">Promeni lozinku...</a></h5>
        </div>
    </div>
</div>
</div>
@endsection