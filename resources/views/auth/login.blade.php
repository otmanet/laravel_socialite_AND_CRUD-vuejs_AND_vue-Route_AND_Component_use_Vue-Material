@extends('layouts.app')

@section('content')
<style>
    #link{
        color:#ffff;
        font-size: 25px;
    
    }
    #link:hover {
        transform:scale(1.3,1.3);
        -webkit-transform:scale(1.3,1.3);
        -moz-transform:scale(1.3,1.3)
        box-shadow: 0 0 50px #fff;
    }
    /* -----
    SVG Icons - svgicons.sparkk.fr
    ----- */

    .svg-icon {
    width: 1.5em;
    height: 1.5em;
    }

    .svg-icon path,
    .svg-icon polygon,
    .svg-icon rect {
    fill: #ffff;
    }

    .svg-icon circle {
    stroke: #ffff;
    stroke-width: 1;
    }
</style>
<div class="container">
    <div class="row justify-content-center mt-5" >
        <div class="col-md-8">
            <div class="card w-75" >
                <div class="card-header" style="text-align: center; font-size: 25px">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <a id="link" href="{{route('login.google')}}" class="btn btn-danger btn-block form-control mb-2" style="border-radius: 1.5rem">
                              <i class="fab fa-google-plus"></i>
                                     google
                                </a>
                                <a id="link" href="{{route('login.facebook')}}" class="btn btn-primary btn-block form-control mb-2" style="border-radius:1.5rem">
                                   <i class="fab fa-facebook"></i>
                                    facebook
                                </a>
                                <a id="link" href="{{route('login.github')}}" class="btn btn-dark btn-block form-control mb-2" style="border-radius:1.5rem">
                                    <i class="fab fa-github"></i>
                                     Github
                                </a>
                            </div>
                        </div>
                        <div style="text-align: center">QR</div>
                        <div class="form-group row" >
                            <div class="col-md-6 offset-md-3 mb-3 mt-4">
                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="border-radius:1.5rem" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email.....">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="border-radius:1.5rem" name="password" required autocomplete="current-password"  placeholder="Password...">
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
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
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
