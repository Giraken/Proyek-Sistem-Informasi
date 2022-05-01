@extends('layouts.app')

@section('content')
    <div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; position: relative;font-family:'Inter';">
        <div>
            <h1>Formulir Buat Tim</h1>
        </div>

        <div style="border-radius: 5px;">
            <form action="" method="post" enctype="multipart/form-data">@csrf
                <div>
                    <label for="judul">Judul Lomba</label>
                </div>
                <div>
                    <input type="text" id="judul" name="judul" placeholder="Masukkan judul lomba.."
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        border: none;
                        border-bottom: 2px solid black;
                        box-sizing: border-box;
                    ">
                </div>

                <div>
                    <label for="nama_tim">Nama Tim</label>
                </div>
                <div>
                    <input type="text" id="nama_tim" name="nama_tim" placeholder="Masukkan nama tim.."
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        border: none;
                        border-bottom: 2px solid black;
                        box-sizing: border-box;
                    ">
                </div>

                <div>
                    <label for="jumlah_anggota_tim">Jumlah Anggota Tim</label>
                </div>
                <div>
                    <select id="jumlah_anggota_tim" name="jumlah_anggota_tim"
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                </div>

                <div>
                    <label for="kategori">Kategori</label>
                </div>
                <div>
                    <select id="kategori" name="kategori"
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    ">
                        <option value="Olimpiade">Olimpiade</option>
                        <option value="Karya Tulis">Karya Tulis</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label for="bidang">Bidang</label>
                </div>
                <div>
                    <select id="bidang" name="bidang"
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    ">
                        <option value="Komputer">Komputer</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Seni">Seni</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Agama">Agama</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div>
                    <label for="tingkat">Tingkat</label>
                </div>
                <div>
                    <select id="tingkat" name="tingkat"
                    style="
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    ">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="Kuliah">Kuliah</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>


                <div>
                    <label for="deskripsi_tim">Deskripsi Tim</label>
                </div>
                <div>
                    <textarea style="
                        width: 50%;
                        height: 150px;
                        padding: 12px 20px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        background-color: #f8f8f8;
                        font-size: 16px;
                        resize: none;
                    " name="deskripsi">Masukkan Deskripsi Anggota Tim Yang Dibutuhkan...</textarea>
                </div>


                <input type="submit" value="Buat Tim" class="btn btn-primary"
                style="
                    background: linear-gradient(90deg, #26E12D 0%, #65DDC7 100%);
                    border: 1px solid #000000 box-shadow:
                    0px 4px 4px 0px #00000040;
                    box-shadow: 0px 4px 4px 0px #00000040;
                    width: 15%; border-radius:5px
                    margin-top:20%
                ">
            </form>
        </div>
    </div>
@endsection
