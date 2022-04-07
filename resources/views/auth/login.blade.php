@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body"
                style="
                    font-family: Monsterrat;
                    font-style: normal;
                    font-weight: 800;
                    font-size: 32px;
                    line-height: 39px;

                    text-align:center;
                    align-items: center;
                    color: #55B2BE"
                >
                    {{ __('MASUK') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6" style="margin-left:22%">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="margin-left: 5%">{{ __('Password') }}</label>

                            <div class="col-md-6" style="margin-left:22%">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div style="text-align: right">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-align: right">
                                        {{ __('Lupa kata sandi??') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center">

                        <div class="form-group mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);border: 1px solid #000000 box-shadow: 0px 4px 4px 0px #00000040;box-shadow: 0px 4px 4px 0px #00000040;">
                                    {{ __('Masuk') }}
                                </button>
                            </div>
                        </div>

                        <div>
                            <p style="">Belum punya akun?</p>
                            <a class="btn btn-link" href="{{ route('register') }}" style="padding: -20%">
                                {{ __('Daftar di sini') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
