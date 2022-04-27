@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom:2%">
        <div class="row" style="margin-top:3%;">
            <div class="col-7" style=";border-radius:20px;background: linear-gradient(116.82deg, #5594BE 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));">
                <div class="row">
                    <div class="col-2" style="margin: 3%;margin-top:5%">
                        @if (Auth::user()->user_foto != null)
                        <img src="{{asset(Auth::user()->user_foto)}}" alt="gambar profil" class="w-100">

                        @else
                        <img src="{{asset('img/profil.jpg')}}" alt="gambar profil" class="w-100">
                        @endif
                    </div>
                    <div class="col-8" style="margin: 3%;margin-top:5%">
                        <span style="font-family: 'Montserrat';color: #FFFFFF;font-size:150%">
                            <b>{{Auth::user()->user_name}}</b>
                        </span><br>
                        <span style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            @if (Auth::user()->user_jurusan != null)
                            {{Auth::user()->user_jurusan}}
                            @else
                            -
                            @endif
                        </span><br>
                        <span style="font-family: 'Montserrat';color: #FFFFFF;margin-top:-20%;font-size:125%">
                            @if (Auth::user()->user_instansi!= null)
                        {{Auth::user()->user_instansi}}

                        @else
                        -
                        @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-4" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-left:5%">

            </div>
        </div>

        <div class="col-7" style="margin-left:%; border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-top:5%;">
            <div class="row">
                <div class="col-10">
                    <h1 style="margin-left:3%; margin-top:5%;text-align: left;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;line-height: 29px;letter-spacing: 0.17em; color: rgba(0, 0, 0, 0.58);">
                        ABOUT ME
                    </h1>
                </div>
                <div class="col-2" style="margin-top:2%;">
                    <a href="edit_profil">
                        <img src="{{asset('img/edit.png')}}" alt="edit" style="width: 30%;">
                    </a>
                </div>
            </div>
            <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                <div class="col-10" style="margin-left:3%;margin-top:3%">
                    <p>
                        <b> Nama Lengkap</b> <br> {{Auth::user()->user_name}}
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>Email</b> <br> {{Auth::user()->email}}
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>Domisili</b> <br>
                        @if (Auth::user()->user_domisili != null)
                        {{Auth::user()->user_domisili}}

                        @else
                        -
                        @endif
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>Asal Instansi</b> <br>
                        @if (Auth::user()->user_instansi != null)
                        {{Auth::user()->user_instansi}}

                        @else
                        -
                        @endif
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>Jenjang Pendidikan</b><br>
                        @if (Auth::user()->user_jenjang != null)
                        {{Auth::user()->user_jenjang}}

                        @else
                        -
                        @endif
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>Kelas/Semester</b> <br>
                        @if (Auth::user()->user_kelas != null)
                        {{Auth::user()->user_kelas}}

                        @else
                        -
                        @endif
                    </p>
                </div>
                <div class="col-10" style="margin-left:3%">
                    <p>
                        <b>No. Telepon</b> <br>
                         @if (Auth::user()->user_telp != null)
                        {{Auth::user()->user_telp}}

                        @else
                        -
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-top:5%;margin-left:-2%">
            <h1 style="margin-top: ;text-align: center;font-family: 'Montserrat'; font-weight: 700; font-size: 28px;color: rgba(0, 0, 0, 0.7);">
                LOMBA DISIMPAN
            </h1>
            <div class="row">
                <div class="col-3">
                    <a href="detail_lomba">
                        <img src="img/3.png" alt="coba">
                    </a>
                </div>
                <div class="col-3">
                    <img src="img/3.png" alt="coba">
                </div>
                <div class="col-3">
                    <img src="img/3.png" alt="coba">
                </div>
                <div class="col-3">
                    <img src="img/3.png" alt="coba">
                </div>
            </div>
        </div>
    </div>
@endsection
