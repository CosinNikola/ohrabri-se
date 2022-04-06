@extends('layout/app')
@section('content')
<h2 class="mt-5 text-center">Registruj se:</h2>
  <form class="mx-auto my-5 w-25">
  <div class="mb-3">
    <label for="ime" class="form-label">Ime: </label>
    <input type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Adresa: </label>
    <input type="email"  class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Lozinka: </label>
    <input type="password"  class="form-control">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Potvrdi lozinku: </label>
    <input type="password" v-model="potvrdaLozinke" class="form-control">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-success">Registruj se</button>
  </div>
</form>
@endsection