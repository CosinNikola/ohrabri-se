@extends('layout.app')

@section('content')
<div class="container min-vh-100">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5 polja">
                <div class="card-body">
                    <h3 class="my-4 text-center">Prijavi se</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Adresa') }}</label> -->

                            <div class="col-md-10 mx-auto">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Adresa">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autofocus placeholder="Lozinka" class="me-1">
                            <i class="material-icons eye">visibility</i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid col-md-10 mx-auto mb-3">
                            <button class="btn btn-success" type="submit">{{ __('Prijavi se') }}</button>
                        </div>

                        <div class="d-flex flex-row justify-content-between col-md-10 mx-auto mt-4">
                        <div class="row">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Zapamti me?') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Zaboravio/la si lozinku?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="mx-auto">
                            <p>Nemaš nalog? <a href="/register">Registruj se</a></p>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('assets/script.js')}}"></script>
@endsection
