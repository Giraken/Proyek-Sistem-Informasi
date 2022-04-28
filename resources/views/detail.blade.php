@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 10%">
        <div class="container text-center" style="margin-top:2%;box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; position: relative;">
            <div class="Judul">
                <h1 style="font-family: 'Montserrat';color: #5594BE;">{{$lomba->lomba_judul}}</h1>
            </div>
            <div class="row" style="margin-top: 3%">
                <div class="col-5">
                    <img src="{{asset($lomba->lomba_foto)}}" alt="poster" style="width: 90%;height:90%">
                </div>
                <div class="col-6">
                    <div class="row">
                        <ul class="nav" style="text-align: center;">
                            <div class="col-4">
                                <li class="active"><a data-toggle="tab" href="#Deskripsi" style="color:#5594BE;font-size:25px">Deskripsi</a></li>
                            </div>
                            <div class="col-2">
                                <li><a data-toggle="tab" href="#Syarat" style="color:#5594BE;font-size:25px">Syarat</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="Deskripsi" class="tab-pane active"> <br>
                            <div class="container" style="min-height: 100px">
                                <p  style="text-align: justify; font-family: 'Montserrat';color: #5C5C5C;font-size:20px">
                                    @if ($lomba->lomba_deskripsi != null)
                                        {{$lomba->lomba_deskripsi}}
                                    @else
                                        -Deskripsi Kosong-
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div id="Syarat" class="tab-pane"> <br>
                            <div class="container">
                                <p style="text-align: justify; font-family: 'Montserrat';color: #5C5C5C;font-size:20px">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam perferendis eaque consectetur ipsam quas alias exercitationem, hic odit! Beatae sed dolore accusantium modi ut expedita vero molestias suscipit ex consectetur!
                                </p>
                            </div>
                        </div>
                        <div>
                            <p style="font-size: 20px">
                                <b>Kategori :</b> {{$lomba->lomba_kategori}}   <b>Bidang :</b> {{$lomba->lomba_bidang}}     <b>Tingkat :</b> {{$lomba->lomba_tingkat}}
                            </p>
                        </div>
                    </div>
                    <div style="margin-left: 90%">
                        <a href="cari_tim">
                            <img src="{{asset("img/Cari.png")}}" alt="cari tim">
                        </a>
                    </div>
                    <div style="margin-top: 5%;margin-left:78.5%">
                        <a href="">
                            <img src="{{asset("img/Daftar Lomba.png")}}" alt="daftar lomba">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
