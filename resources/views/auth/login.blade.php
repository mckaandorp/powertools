@extends('layouts.admin')

@section('adm')

<div class="form-bg">
    <div>
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                         @csrf
                        <h3 class="title">Powertools</h3>
                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Emailadres') }}</label>

                                <div class="col-md-6">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn signin">{{ __('Login') }}</button>

                                @if (Route::has('password.request'))
                                    <span class="forgot-pass">
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </span>    
                                @endif
                                 
                                @if (Route::has('register'))
                                    <span class="register">
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </span>  
                                @endif

                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection