@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center">
        <img src="img/1.png" alt="Cari Lomba" style="width: 50%; height:50%;margin-top:5%"> <br>
        <img src="img/2.png" alt="SIMBA" style="width: 45%; height:45%">

        <div class="row" style="margin-top: 5%">
            <a class="col-4" href="cari_tim">
                <img src="img/Cari Tim.png" alt="Cari Tim">
            </a>
            <a class="col-4" href="login">
                <img src="img/Publikasi.png" alt="Publikasi">
            </a>
            <a class="col-4" href="login">
                <img src="img/Kategori.png" alt="Kategori">
            </a>
        </div>

        <div>
            <img src="img/Terpopuler.png" alt="Terpopuler" style="margin-top:5% ">
        </div>

        <div class="row" style="margin-top: 3%">
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

        <div>
            <img src="img/Terdekat.png" alt="Terdekat" style="margin-top:5% ">
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-3">
                <img src="img/3.png" alt="coba">
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
    <footer class="d-flex py-3 border-top" style="background-color:#211736">
        <div class="align-items-center ml-3">
            <p style="font-family: 'Montserrat'; font-weight: 500; font-size: 24px; display: flex; color: #FFFFFF; ">
              About Us
            </p>
            <p style="font-family: 'Montserrat'; font-weight: 500; font-size: 20px; color: rgba(255, 255, 255, 0.5);">
                Simba adalah sebuah website sistem informasi yang menampilkan lomba-lomba di <br> seluruh indonesia dan membantu pengguna mencari tim untuk mengikuti lomba
            </p>
            <span class="text-muted">Copyright © 2022 SIMBA</span>
        </div>
    </footer>
@endsection
