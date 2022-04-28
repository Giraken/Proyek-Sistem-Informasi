@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container" style="margin-bottom:2%">
            <div class="row" style="margin-top:3%;">
                <div class="col-12" style=";border-radius:20px;background: linear-gradient(116.82deg, #5594BE 0%, #65DDC7 100%);filter: drop-shadow(8px 4px 35px rgba(56, 125, 130, 0.44));">
                        <div class="row" style="margin-top: 1%">
                            <div class="col-3">
                                <select name="kategori"
                                style="
                                    width: 80%;
                                    padding: 10px 20px;
                                    display: inline-block;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                "><option value=""
                                    style="
                                    font-family: 'Montserrat';
                                    font-style: normal;
                                    font-weight: 700;
                                    font-size: 24px;
                                    line-height: 29px;
                                    display: flex;
                                    align-items: center;
                                    color: grey;
                                    "> -- Semua Kategori --
                                    </option>
                                    <option value="Olimpiade"
                                    style="
                                    font-family: 'Montserrat';
                                    font-style: normal;
                                    font-weight: 700;
                                    font-size: 24px;
                                    line-height: 29px;
                                    display: flex;
                                    align-items: center;
                                    color: rgba(185, 0, 0, 0.66);
                                    "> Olimpiade
                                    </option>
                                    <option value="Karya Tulis"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #26E12D;
                                    ">Karya Tulis</option>
                                    <option value="Lainnya"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #93644A;
                                    ">Lainnya</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <select name="bidang_lomba"
                                style="
                                    width: 80%;
                                    padding: 10px 20px;
                                    display: inline-block;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                "><option value=""
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: grey;
                                    ">-- Semua Bidang --</option>
                                    <option value="Komputer"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #26E12D;
                                    ">Komputer</option>
                                    <option value="IPA"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #0066FF;"
                                    >IPA</option>
                                    <option value="IPS"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #93644A;"
                                    >IPS</option>
                                    <option value="Seni"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #26E12D;"
                                    >Seni</option>
                                    <option value="Olahraga"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #0066FF;"
                                    >Olahraga</option>
                                    <option value="Agama"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #93644A;"
                                    >Agama</option>
                                    <option value="Lainnya"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #0066FF;"
                                    >Lainnya</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <select name="tingkat"
                                style="
                                    width: 80%;
                                    padding: 10px 20px;
                                    margin-bottom: 13px;
                                    display: inline-block;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                ">
                                <option value=""
                                style="
                                font-family: 'Nunito Sans';
                                font-style: normal;
                                font-weight: 800;
                                font-size: 24px;
                                line-height: 33px;
                                display: flex;
                                align-items: center;
                                letter-spacing: 0.02em;
                                color: grey;"
                                >-- Semua Tingkat --</option>
                                    <option value="Kuliah"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #0066FF;"
                                    >Kuliah</option>
                                    <option value="SD"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #93644A;"
                                    >SD</option>
                                    <option value="SMP"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #26E12D;"
                                    >SMP</option>
                                    <option value="SMA"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #0066FF;"
                                    >SMA</option>
                                    <option value="Umum"
                                    style="
                                    font-family: 'Nunito Sans';
                                    font-style: normal;
                                    font-weight: 800;
                                    font-size: 24px;
                                    line-height: 33px;
                                    display: flex;
                                    align-items: center;
                                    letter-spacing: 0.02em;
                                    color: #93644A;"
                                    >Umum</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <a href="">
                                    <img src="{{asset("img/Filter.svg")}}" alt="Filter"
                                    style="
                                    padding-top: 10px;
                                    padding-left: 90px;
                                    ">
                                </a>
                            </div>
                            </div>
                        </div>

                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 3%">
                @foreach ($lombas as $lomba)
                <div class="col-2 mx-3 my-5 bg-white text-center rounded shadow">
                    <a href="{{route('lomba.show',$lomba->id)}}">
                        <img src="{{asset($lomba->lomba_foto)}}" alt="coba" class="w-100 my-2">
                    </a>
                    <a href="{{route('lomba.show',$lomba->id)}}" class="fw-bold">{{$lomba->lomba_judul}}</a>
                </div>
                @endforeach
        </div>
    </div>
@endsection
