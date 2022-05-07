@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route("tim.find")}}" method="POST"> @csrf
        <div class="row" style="margin-left: 30%;">
            <div class="col-xl-auto">
                <div class="container"
                    style="
                    background: #EBE8E8;
                    border-radius: 10px;
                    margin-top: 20px;
                    " >
                    <div class="">
                        <a href="">
                            <img src="{{asset('img/Search.svg')}}" alt=""
                            style="
                            ">
                        </a>
                        <input type="text" id="cari_tim" name="lomba_judul" placeholder="Cari Nama Lomba"
                        style="
                            padding: 12px 20px;
                            margin: 8px 0;
                            border: none;
                            box-sizing: border-box;
                            background: #EBE8E8;
                            text-align: center;
                        ">
                    </div>
                </div>
            </div>
            <div class="col-xl-auto" style="padding-top: 30px; padding-left: ;">
                        <input type="submit" value="Cari" class="btn btn-primary"
                            style="
                                background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);
                                box-shadow: 0px 4px 4px 0px #00000040;
                                width: 150px; border-radius: 20px;
                            ">
            </div>
        </div>
    </form>
@forelse ($tims as $tim)
    <div class="row" style="margin-top:3%;">
        <div class="col-12" style="border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left:;padding-bottom:3%">
            <div class="col-11" style="
                border-radius:20px;
                background: #FFFFFF;
                box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
                margin-top:2%;margin-left:5%;
                font-family: 'Montserrat';">
                <div class="text-center my-3">
                    <a style="text-align:center;" class="" href="{{route("lomba.show",$tim->lomba->id)}}">
                        {{$tim->lomba->lomba_judul}}
                    </a>
                </div>
                <div class="row">
                    <div class="col-8">
                        <a href="{{route("tim.show",$tim->id)}}" style="font-size: 150%">{{$tim->tim_nama}}</a>
                        <div class="row">
                            <div class="col-2">
                                <p>{{$tim->lomba->lomba_kategori}}</p>
                            </div>
                            <div class="col-2">
                                <p>{{$tim->lomba->lomba_bidang}}</p>
                            </div>
                            <div class="col-2">
                                <p>{{$tim->lomba->lomba_tingkat}}</p>
                            </div>
                            <div class="col-12">
                                <p>{{$tim->tim_deskripsi}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1" style="margin-top: 2%;margin-left:8%">
                        <h1 style="color: #5594BE;">{{$tim->users->count()}}/{{$tim->tim_jumlah}}</h1>
                    </div>

                    <div class="col-2">
                        <img src="{{asset("img/profil.jpg")}}" alt="Cari Tim" style="width: 50%;">
                    </div>

                </div>
            </div>

        </div>
    </div>
@empty
<div class="row" style="margin-top:3%;">
        <div class="col-12" style="border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left:;padding-bottom:3%">
            <div class="col-11" style="
                border-radius:20px;
                background: #FFFFFF;
                box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
                margin-top:2%;margin-left:5%;
                font-family: 'Montserrat';">
                <p style="text-align:center" class="my-5 p-5">
                    Maaf, tim tidak ditemukan
                </p>
            </div>

        </div>
    </div>
@endforelse
</div>
@endsection
