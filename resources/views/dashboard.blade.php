@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center">
        <img src="img/1.png" alt="Cari Lomba" style="width: 50%; height:50%;margin-top:5%"> <br>
        <img src="img/2.png" alt="SIMBA" style="width: 45%; height:45%">

        <div class="row" style="margin-top: 5%">
            <a class="col-4" href="{{route("tim.search")}}">
                <img src="img/Cari Tim.png" alt="Cari Tim">
            </a>
            <a class="col-4" href="{{route("lomba.create")}}">
                <img src="img/Publikasi.png" alt="Publikasi">
            </a>
            <a class="col-4" href="{{route("lomba.search")}}">
                <img src="img/Cari Lomba.png" alt="Cari Lomba">
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
@endsection
