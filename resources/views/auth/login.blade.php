<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIMBA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background: linear-gradient(116.82deg, #5594BE 0%, #65DDC7 100%);position: relative; height: 955px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <p style="
                    font-family: 'Montserrat';
                    font-size: 700%;

                    display: flex;
                    letter-spacing: 0.57em;

                    color: rgba(255, 255, 255, 0.67);
                    margin-left : 15%;
                    margin-bottom :-5%;
                    margin-top:15%
                    ">
                        SIMBA
                    </p>
                    <p style="
                    font-family: 'Montserrat';
                    font-size: 350%;

                    display: flex;
                    letter-spacing: 0.455em;
                    margin-left : 7%;

                    color: rgba(255, 255, 255, 0.67);">
                        Informasi Lomba
                    </p>
                </div>

                <div class="card" style="
                    background: #FFFFFF;
                    border: 1px solid #000000;
                    box-sizing: border-box;
                    box-shadow: 3px 4px 22px rgba(0, 0, 0, 0.17);
                    border-radius: 13px;
                ">
                    <div class="card-body"
                    style="
                        font-family: Monsterrat;
                        font-style: normal;
                        font-weight: 800;
                        font-size: 32px;

                        text-align:center;
                        align-items: center;
                        color: #55B2BE"
                    >
                        Masuk
                    </div>

                    <div class="card-body" style="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="text-md-right" style="margin-left: 30%">Email</label>

                                <div class="col-md-6" style="margin-left: 28%">
                                    <input id="email" type="email" placeholder="Masukkan email.." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    style="
                                        border: none;
                                        border-bottom: 2px solid black;
                                        box-sizing: border-box;
                                        border-radius: 0px;
                                    ">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-md-right" style="margin-left: 30%">Password</label>

                                <div class="col-md-6" style="margin-left: 28%">
                                    <input id="password" type="password" placeholder="Masukkan kata.." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                    style="
                                        border: none;
                                        border-bottom: 2px solid black;
                                        box-sizing: border-box;
                                        border-radius: 0px;
                                    ">

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
                                    <div class="col-md-8" style="margin-left: 19%;">
                                        <button type="submit" class="btn btn-primary" style="
                                            background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);
                                            border: 1px solid #000000 box-shadow: 0px 4px 4px 0px #00000040;
                                            box-shadow: 0px 4px 4px 0px #00000040;
                                            width: 65%; border-radius:30px
                                        ">
                                            Masuk
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <p style="margin-top:5%">Belum punya akun?</p>
                                    <a class="btn btn-link" href="{{ route('register') }}" style="margin-top:-5%">
                                        {{ __('Daftar di sini') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
