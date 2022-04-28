@extends('layouts.app')

@section('content')
    <form action="/#">
    <div class="row" style="padding-left: 550px;">
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
        <div class="col-xl-auto" style="padding-top: 30px; padding-left: 20px;">
                    <input type="submit" value="Cari" class="btn btn-primary"
                        style="
                            background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);
                            box-shadow: 0px 4px 4px 0px #00000040;
                            width: 150px; border-radius: 20px;
                        ">
        </div>
        </form>
    </div>

    <div class="container"
        style=" padding-top: 20px;
    ">
        <div class="row" style="margin-top:3%;">
            <div class="col-8" style=";border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left: 200px;">
                <p style="font-family: 'Nunito Sans';color: #000000;font-size:125%; padding-left: 350px; margin-top: 20px;">
                    GEMASTIK XVII
                </p>
                <div class="row">
                    <div class="col-2" style="margin: 3%;margin-top:-2%">
                        <p style="font-family: 'Montserrat';color: #000000;font-size:150%">
                            <b>DoaIbu</b>
                        </p>
                        <div class="row">
                            <div class="col-1" style="margin-top: -18%">
                                <p style="font-family: 'Montserrat';color: #000000;font-size:125%">
                                    Lainnya
                                </p>
                            </div>
                            <div class="col-1" style="margin-top: -18%">
                                <p style="font-family: 'Montserrat';color: #000000;font-size:125%; padding-left: 50px;">
                                    Komputer
                                </p>
                            </div>
                            <div class="col-1" style="margin-top: -18%">
                                <p style="font-family: 'Montserrat';color: #000000;font-size:125%; padding-left: 115px;">
                                    Kuliah
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4" style="margin-top: -18%">
                                <p style="font-family: 'Montserrat';color: #000000;font-size:125%">
                                    Dibutuhkan programmer yang bisa bahasa....
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="col-2" style="margin-left: 500px;margin-top:4%">
                    <img src="img/Profil.svg" alt="gambar profil">
                </div>
                </div>
            </div>
    </div>
@endsection
