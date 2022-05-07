@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:3%;">
        <div class="col-12" style="border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left:;padding-bottom:3%">
                <p style="text-align:center;padding-top:2%">
                    {{$tim->lomba->lomba_judul}}
                </p>
                <div class="row">
                    <div class="col-6">
                        <p style="font-size: 150%"> {{$tim->tim_nama}} </p>
                        <div class="row">
                            <div class="col-5">
                                <img src="{{$tim->users[0]->user_foto}}" alt="Cari Tim" style="width: 100%;">
                            </div>
                            <div class="col-5 ">
                                <div class="my-2">
                                    <span>Ketua Tim : {{$tim->users[0]->user_name}}</span>
                                </div>
                                <div class="my-2">
                                    <span>Kategori : {{$tim->lomba->lomba_kategori}} </span>
                                </div>
                                <div class="my-2">
                                    <span>Bidang : {{$tim->lomba->lomba_bidang}}</span>
                                </div>
                                <div class="my-2">
                                    <span>Tingkat : {{$tim->lomba->lomba_tingkat}}</span>
                                </div>
                        </div>
                        <p>Deskripsi tim yang dibutuhkan : {{$tim->tim_deskripsi}}</p>
                    </div>
                </div>
                    <div class="col-6">
                        <a href="{{route("user.show",$tim->users[0]->id)}}" class="btn btn-primary"
                        style="
                            background: linear-gradient(90deg, #26E12D 0%, #65DDC7 100%);border-radius: 79px;
                            width: 50%; margin-top: 20px; margin-left: 180px;
                        ">Profil Ketua Tim</a>
                        <a class="btn btn-primary"
                        style="
                            background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);border-radius: 79px;
                            width: 50%; margin-top: 10px; margin-left: 180px;
                        ">Meminta Bergabung</a>
                            <p style="
                            margin-left: 200px; margin-top: 180px;
                            ">
                                Jumlah anggota Tim :{{$tim->users->count()}}/{{$tim->tim_jumlah}}
                            </p>
                    </div>
            <div class="container"
                style="
                width: 1200px;
                height: 430px;
                left: 195px;
                top: 465px;

                background: #FFFFFF;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                ">
            </div>
        </div>
    </div>
@endsection
