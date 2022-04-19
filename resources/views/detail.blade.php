@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container text-center" style="margin-top:5%;box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; position: relative;">
            <div class="Judul">
                <h1 style="font-family: 'Montserrat';color: #5594BE;">Judul Lomba</h1>
            </div>
            <div class="row" style="margin-top: 3%">
                <div class="col-5">
                    <img src="img/3.png" alt="poster">
                </div>
                <div class="col-6">
                    <div class="row">
                        <ul class="nav" style="text-align: center;">
                            <div class="col-3">
                                <li class="active"><a data-toggle="tab" href="#Deskripsi" style="color:#5594BE;">Deskripsi</a></li>
                            </div>
                            <div class="col-2">
                                <li><a data-toggle="tab" href="#Syarat" style="color:#5594BE;">Syarat</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="Deskripsi" class="tab-pane active"> <br>
                            <div class="container">
                                <p  style="text-align: justify; font-family: 'Montserrat';color: #5C5C5C;">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                    of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                    over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </p>
                            </div>
                        </div>
                        <div id="Syarat" class="tab-pane"> <br>
                            <div class="container">
                                <p style="text-align: justify; font-family: 'Montserrat';color: #5C5C5C;">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam perferendis eaque consectetur ipsam quas alias exercitationem, hic odit! Beatae sed dolore accusantium modi ut expedita vero molestias suscipit ex consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left: 90%">
                        <a href="cari_tim">
                            <img src="img/Cari.png" alt="cari tim">
                        </a>
                    </div>
                    <div style="margin-top: 5%;margin-left:78.5%">
                        <a href="">
                            <img src="img/Daftar Lomba.png" alt="daftar lomba">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
