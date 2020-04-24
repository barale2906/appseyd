@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset('dist/css/elmio.css')}}">

@section('content')

<div class="container">
    <div class="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formula">
            <div class="card">
                <img src={{ asset('dist/img/900474371_logo.jpg')}} class="card-img-top" alt="SOMOS ENVIOS Y DILIGENCIAS S.A.S."/>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf



                <div class="form-group row">

                    <label for="email" class="col-md-4 ">{{ __('Email - Usuario') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autofocus placeholder="Usuario o email" autocomplete:off>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 ">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                         name="password" required autocomplete="current-password" placeholder="Digite su contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-10 offset-md-2">

                        @if (Route::has('password.request'))
                            <a class="btn" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <button type="submit" class="btn btn-block btn-info ingresar">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-block ingresar" href="{{ route('register') }}">
                            <span class="text-uppercase">{{ __('Register') }}</span>
                        </a>



                    </div>
                </div>



            </form>

        </div>
    </div>
</div>

@endsection
