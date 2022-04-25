@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom:2%">
    <div class="row" style="margin-top:3%;">
        <div class="col-7" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;">
            <div class="row">
                <div class="col-2" style="margin: 5%;margin-bottom:3%">
                    <img src="img/profil.png" alt="gambar profil">

                </div>
                <div class="row" style="font-family: 'Montserrat'; font-size: 140%; line-height: 24px;">
                    <div class="col-10" style="margin-left:3%;margin-top:3%">
                        <p>
                            <b> Nama Lengkap</b> <br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Email</b> <br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Domisili</b> <br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Asal Instansi</b> <br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Jenjang Pendidikan</b><br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>Kelas/Semester</b> <br> Enrico
                        </p>
                    </div>
                    <div class="col-10" style="margin-left:3%">
                        <p>
                            <b>No. Telepon</b> <br> Enrico
                        </p>
                    </div>
                </div>
            </div>

            <a href="#">
                <button type="submit" class="btn btn-primary" style="background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);width: 20%; margin-top:5%;margin-bottom:5%; margin-left:75%;border-radius:30px">
                    Simpan
                </button>
            </a>
        </div>
        <div class="col-4" style="border-radius:20px;filter: box-shadow: 0 3px 20px rgba(0, 0, 0, .5);background: #FFFFFF;margin-left:5%">

        </div>
    </div>
@endsection
