@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom:2%">
    <div class="row" style="margin-top:3%;">
        <div class="col-7" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;">
            <div class="row">
                <form action="{{route('user.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-2" style="margin: 5%;margin-bottom:3%">
                    @if (Auth::user()->user_foto != null)
                        <img src="{{asset(Auth::user()->user_foto)}}" alt="gambar profil" class="w-100">

                        @else
                        <img src="{{asset('img/profil.jpg')}}" alt="gambar profil" class="w-100">
                        @endif
                        <input type="file" name="foto" id="foto">
                </div>
                <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                        <div class="col-10" style="margin-left:3%;margin-top:3%">
                                <p>
                                    <b> Nama Lengkap</b> <br>
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="custom-form"
                                    @isset(Auth::user()->user_name) value="{{Auth::user()->user_name}}" @endisset >
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>Email</b> <br>
                                    <input type="email" id="email" name="email" placeholder="Masukkan email" class="custom-form"
                                    @isset(Auth::user()->email) value="{{Auth::user()->email}}" @endisset disabled>
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>Domisili</b> <br>
                                <input type="text" id="domisili" name="domisili" placeholder="Masukkan domisili" class="custom-form"
                                    @isset(Auth::user()->user_domisili) value="{{Auth::user()->user_domisili}}" @endisset >
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>Asal Instansi</b> <br>
                                <input type="text" id="instansi" name="instansi" placeholder="Masukkan instansi" class="custom-form"
                                @isset(Auth::user()->user_instansi) value="{{Auth::user()->user_instansi}}" @endisset >
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>Jenjang Pendidikan</b><br>
                                <input type="text" id="jenjang" name="jenjang" placeholder="Masukkan jenjang pendidikan" class="custom-form"
                                @isset(Auth::user()->user_jenjang) value="{{Auth::user()->user_jenjang}}" @endisset >
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>Kelas/Semester</b> <br>
                                <input type="number" id="kelas" name="kelas" placeholder="Masukkan kelas/semester" class="custom-form"
                                    @isset(Auth::user()->user_kelas) value="{{Auth::user()->user_kelas}}" @endisset >
                            </p>
                        </div>
                        <div class="col-10" style="margin-left:3%">
                            <p>
                                <b>No. Telepon</b> <br>
                                <input type="number" id="telp" name="telp" placeholder="Masukkan no telpon" class="custom-form"
                                    @isset(Auth::user()->user_telp) value="{{Auth::user()->user_telp}}" @endisset >
                            </p>
                        </div>
                    </div>
                    <a href="#">
                        <button type="submit" class="btn btn-primary" style="background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);width: 20%; margin-top:5%;margin-bottom:5%; margin-left:75%;border-radius:30px">
                            Simpan
                        </button>
                    </a>
                </form>
            </div>

        </div>
        <div class="col-4" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-left:5%">

        </div>
    </div>
@endsection
