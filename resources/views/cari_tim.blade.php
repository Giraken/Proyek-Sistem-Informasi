@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/#">
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
                            <img src="img/Search.svg" alt=""
                            style="
                            ">
                        </a>
                        <input type="text" id="cari_tim" name="cari_tim" placeholder="Cari Nama Lomba"
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

    <div class="row" style="margin-top:3%;">
        <div class="col-12" style="border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left:;padding-bottom:3%">
            <div class="col-11" style="
                border-radius:20px;
                background: #FFFFFF;
                box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
                margin-top:2%;margin-left:5%;
                font-family: 'Montserrat';">
                <p style="text-align:center;padding-top:2%">
                    JUDUL LOMBA
                </p>
                <div class="row">
                    <div class="col-8">
                        <p style="font-size: 150%">NAMA TIM</p>
                        <div class="row">
                            <div class="col-2">
                                <p>KATEGORI</p>
                            </div>
                            <div class="col-2">
                                <p>BIDANG</p>
                            </div>
                            <div class="col-2">
                                <p>TINGKAT</p>
                            </div>
                            <div class="col-12">
                                <p>DESKRIPSI</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1" style="margin-top: 2%;margin-left:8%">
                        <h1 style="color: #5594BE;">2/3</h1>
                    </div>

                    <div class="col-2">
                        <img src="img/profil.jpg" alt="Cari Tim" style="width: 50%;">
                    </div>

                </div>
            </div>

            <div class="col-11" style="
                border-radius:20px;
                background: #FFFFFF;
                box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
                margin-top:2%;margin-left:5%;
                font-family: 'Montserrat';">
                <p style="text-align:center;padding-top:2%">
                    GEMASTIK XVII
                </p>
                <div class="row">
                    <div class="col-8">
                        <p style="font-size: 150%">DoaIbu</p>
                        <div class="row">
                            <div class="col-2">
                                <p>Lainnya</p>
                            </div>
                            <div class="col-2">
                                <p>Komputer</p>
                            </div>
                            <div class="col-2">
                                <p>Kuliah</p>
                            </div>
                            <div class="col-12">
                                <p>Dibutuhkan Programmer yang bisa bahasa..</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1" style="margin-top: 2%;margin-left:8%">
                        <h1 style="color: #5594BE;">2/3</h1>
                    </div>

                    <div class="col-2">
                        <img src="img/profil.jpg" alt="Cari Tim" style="width: 50%;">
                    </div>

                </div>
            </div>

            <div class="col-11" style="
                border-radius:20px;
                background: #FFFFFF;
                box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
                margin-top:2%;margin-left:5%;
                font-family: 'Montserrat';">
                <p style="text-align:center;padding-top:2%">
                    GEMASTIK XVII
                </p>
                <div class="row">
                    <div class="col-8">
                        <p style="font-size: 150%">DoaIbu</p>
                        <div class="row">
                            <div class="col-2">
                                <p>Lainnya</p>
                            </div>
                            <div class="col-2">
                                <p>Komputer</p>
                            </div>
                            <div class="col-2">
                                <p>Kuliah</p>
                            </div>
                            <div class="col-12">
                                <p>Dibutuhkan Programmer yang bisa bahasa..</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-1" style="margin-top: 2%;margin-left:8%">
                        <h1 style="color: #5594BE;">2/3</h1>
                    </div>

                    <div class="col-2">
                        <img src="img/profil.jpg" alt="Cari Tim" style="width: 50%;">
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
