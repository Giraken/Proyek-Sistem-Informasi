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
<body style="background: linear-gradient(116.82deg, #5594BE 0%, #65DDC7 100%);height: 955px;">
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
                        Daftar
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 text-md-left" style="margin-left: 5%">Nama Lengkap<i class="text-danger">*</i></label>
                                <label for="kelas" class="col-md-4 text-md-right"  style="margin-left: -5%">Kelas/Semester  </label>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-5" style="margin-left: 5%">
                                    <input id="name" type="text" placeholder="Masukkan nama pengguna.." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5" style="margin-left: 4%">
                                    <input id="kelas" type="text" placeholder="Masukkan kelas/semester.." class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas">

                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 text-md-left" style="margin-left: 5%">Email <i class="text-danger">*</i></label>

                                <label for="password" class="col-md-4 text-md-right"  style="margin-left: -9.5%">Kata Sandi <i class="text-danger">*</i></label>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-5" style="margin-left: 5%">
                                    <input id="email" type="email" placeholder="Masukkan email.." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5" style="margin-left: 4%">
                                    <input id="password" type="password" placeholder="Masukkan kata sandi.." class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="instansi" class="col-md-4 text-md-left" style="margin-left: 5%">Asal Instansi</label>

                                <label for="password_confirmation" class="col-md-4 text-md-right"  style="margin-left: %">Konfirmasi Kata Sandi <i class="text-danger">*</i></label>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-5" style="margin-left: 5%">
                                    <input id="instansi" type="text" placeholder="Masukkan asal instansi.." class="form-control @error('instansi') is-invalid @enderror" name="instansi" value="{{ old('instansi') }}" required autocomplete="instansi" autofocus>

                                    @error('instansi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5" style="margin-left: 4%">
                                    <input id="password_confirmation" type="password" placeholder="Masukkan ulang kata sandi.." class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div style="text-align: center">

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="btn btn-primary" style="
                                            background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);
                                            border: 1px solid #000000 box-shadow: 0px 4px 4px 0px #00000040;
                                            box-shadow: 0px 4px 4px 0px #00000040;
                                            width: 65%; margin-top:5%;border-radius:30px
                                        ">
                                            Kirim
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <p style="margin-top:1%">Sudah punya akun?</p>
                                    <a class="btn btn-link" href="{{ route('login') }}" style="margin-top:-5%">
                                        {{ __('Masuk') }}
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
