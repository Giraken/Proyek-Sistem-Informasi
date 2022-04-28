@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top:3%;">
        <div class="col-12" style="border-radius:20px;background: #FFFFFF;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); margin-left:;padding-bottom:3%">
                <p style="text-align:center;padding-top:2%">
                    JUDUL LOMBA
                </p>
                <div class="row">
                    <div class="col-6">
                        <p style="font-size: 150%">NAMA TIM</p>
                        <div class="row">
                            <div class="col-5">
                                <img src="img/profil.jpg" alt="Cari Tim" style="width: 100%;">
                            </div>
                            <div class="col-5">
                                <div class="col-8">
                                    <p>Ketua Tim :</p>
                                </div>
                                <div class="col-8">
                                    <p>Kategori :</p>
                                </div>
                                <div class="col-8">
                                    <p>Bidang :</p>
                                </div>
                                <div class="col-8">
                                    <p>Tingkat :</p>
                                </div>
                        </div>
                        <p>Deskripsi tim yang dibutuhkan :</p>
                    </div>
                </div>
                    <div class="col-6">
                        <input type="submit" value="Profil Ketua Tim" class="btn btn-primary"
                        style="
                            background: linear-gradient(90deg, #26E12D 0%, #65DDC7 100%);border-radius: 79px;
                            width: 50%; margin-top: 20px; margin-left: 180px;
                        ">
                        <input type="submit" value="Meminta Bergabung" class="btn btn-primary"
                        style="
                            background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);border-radius: 79px;
                            width: 50%; margin-top: 10px; margin-left: 180px;
                        ">
                            <p style="
                            margin-left: 200px; margin-top: 180px;
                            ">
                                Jumlah anggota Tim :
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
