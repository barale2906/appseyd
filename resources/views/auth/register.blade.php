@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset('dist/css/elmio.css')}}">


@section('content')

<div class="container">
    <div class="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formula">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="card">
                    <img src={{ asset('dist/img/900474371_logo.jpg')}} class="card-img-top" alt="SOMOS ENVIOS Y DILIGENCIAS S.A.S."/>
                </div>
                <div class="form-group row">
                    <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario / cc') }}</label>

                    <div class="col-md-8">
                        <input id="usuario" type="number" class="form-control @error('Usuario') is-invalid @enderror" name="usuario"
                        value="{{ old('usuario') }}" required autofocus>

                        @error('usuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nit" class="col-md-4 col-form-label text-md-right">{{ __('Nit') }}</label>

                    <div class="col-md-8">
                        <input id="nit" type="number" class="form-control @error('Nit') is-invalid @enderror" name="nit"
                        value="{{ old('nit') }}" required autofocus>

                        @error('nit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-block btn-info ingresar">
                            {{ __('Register') }}
                        </button>

                        <a class="btn btn-block ingresar" href="{{ route('login') }}">
                            <span class="text-uppercase">{{ __('login') }}</span>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection

