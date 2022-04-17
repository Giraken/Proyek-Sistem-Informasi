@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center">
        <img src="img/1.png" alt="Cari Lomba" style="width: 50%; height:50%;margin-top:5%"> <br>
        <img src="img/2.png" alt="SIMBA" style="width: 45%; height:45%">

        <div class="row" style="margin-top: 5%">
            <a class="col-4" href="login">
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




    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2021 Company, Inc</span>
        </div>
    </footer>

@endsection
