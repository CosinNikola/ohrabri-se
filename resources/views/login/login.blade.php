@extends('layout/app')
@section('content')
<form class="mx-auto my-5 w-25">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Adresa</label>
    <input type="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lozinka</label>
    <input type="password" class="form-control">
  </div>
  <!-- <div class="alert alert-danger"">
      <p></p>
    </div> -->
  <div class="text-center">
  <button type="submit" class="btn btn-success">Uloguj se</button>
  </div>
</form>
@endsection