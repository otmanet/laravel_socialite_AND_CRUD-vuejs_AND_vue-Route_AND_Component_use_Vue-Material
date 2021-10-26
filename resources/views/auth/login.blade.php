@extends('layouts.app')

@section('content')
<style>
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
    fill: #4691f6;
    }

    .svg-icon circle {
    stroke: #4691f6;
    stroke-width: 1;
    }
</style>
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card w-75" >
                <div class="card-header" style="text-align: center; font-size: 25px">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <a id="link" href="" class="btn btn-danger btn-block form-control mb-2" style="border-radius: 1.5rem">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path fill="none"
                                        d="M10,0.562c-5.212,0-9.438,4.226-9.438,9.438c0,5.213,4.226,9.438,9.438,9.438c5.212,0,9.438-4.225,9.438-9.438C19.438,4.788,15.212,0.562,10,0.562 M10,18.58c-4.738,0-8.58-3.841-8.58-8.58c0-4.738,3.842-8.58,8.58-8.58c4.737,0,8.579,3.841,8.579,8.58C18.579,14.739,14.737,18.58,10,18.58 M10.033,10.346C9.813,10.183,9.608,9.94,9.6,9.865c0-0.128,0-0.188,0.303-0.435c0.393-0.322,0.609-0.745,0.609-1.192c0-0.387-0.108-0.731-0.293-0.982h0.164l0.908-0.688H8.832c-0.986,0-1.851,0.774-1.851,1.657c0,0.912,0.667,1.604,1.565,1.642C8.533,9.933,8.525,9.996,8.525,10.06c0,0.131,0.03,0.257,0.09,0.378c-1.113,0.007-2.05,0.752-2.05,1.632c0,0.789,0.902,1.362,2.145,1.362c1.343,0,2.067-0.84,2.067-1.631C10.778,11.143,10.576,10.748,10.033,10.346 M8.026,8.198C7.985,7.869,8.054,7.565,8.212,7.384c0.096-0.11,0.22-0.169,0.358-0.169V7.036l0.016,0.179c0.412,0.014,0.807,0.501,0.88,1.086c0.042,0.335-0.03,0.647-0.191,0.833c-0.096,0.11-0.217,0.169-0.367,0.168h0C8.503,9.29,8.1,8.784,8.026,8.198 M8.707,12.749c-0.612,0-1.093-0.394-1.093-0.897c0-0.461,0.562-0.865,1.202-0.865v-0.18h0l0.017,0.18c0.138,0.002,0.272,0.022,0.399,0.062l0.126,0.092c0.326,0.231,0.498,0.363,0.549,0.575c0.013,0.056,0.019,0.111,0.019,0.167C9.927,12.458,9.517,12.749,8.707,12.749M13.43,6.993h-0.858v1.288H11.28V9.14h1.291v1.283h0.858V9.14h1.293V8.281H13.43V6.993z">
                                    </path>
                                </svg>
                                    Login with google
                                </a>
                                <a id="link" href="" class="btn btn-primary btn-block form-control mb-2" style="border-radius:1.5rem">
                                   <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path fill="none"
                                        d="M10,0.5c-5.247,0-9.5,4.253-9.5,9.5c0,5.247,4.253,9.5,9.5,9.5c5.247,0,9.5-4.253,9.5-9.5C19.5,4.753,15.247,0.5,10,0.5 M10,18.637c-4.77,0-8.636-3.867-8.636-8.637S5.23,1.364,10,1.364S18.637,5.23,18.637,10S14.77,18.637,10,18.637 M10.858,7.949c0-0.349,0.036-0.536,0.573-0.536h0.719v-1.3H11c-1.38,0-1.866,0.65-1.866,1.743v0.845h-0.86V10h0.86v3.887h1.723V10h1.149l0.152-1.299h-1.302L10.858,7.949z">
                                    </path>
                                </svg>
                                    Login with facebook
                                </a>
                                <a id="link" href="" class="btn btn-dark btn-block form-control mb-2" style="border-radius:1.5rem">login with Github</a>
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
