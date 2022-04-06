@extends('layout.app')

@section('content')
<div class="container vh-100">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5 polja">
                <div class="card-body">
                <h3 class="my-4 text-center">Registruj se</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Ime') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Ime" autofocus> 

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Adresa') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Adresa">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Lozinka') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Lozinka">
                                <i class="material-icons eye">visibility</i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Potvrdi Lozinku') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Potvrdi Lozinku">
                            </div>
                        </div>

                        <div class="d-grid col-md-10 mx-auto mb-3">
                            <button class="btn btn-success" type="submit">{{ __('Registruj se') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('assets/script.js')}}"></script>
@endsection
