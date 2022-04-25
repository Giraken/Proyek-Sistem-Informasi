@extends('layouts.app')

@section('content')
    <div class="container"  style="box-shadow: 0 3px 20px rgba(0, 0, 0, .5); border-radius: 10px; background-color: white; padding: 15px; position: relative;font-family:'Inter';">
        <div>
            <h1>Formulir Publikasi Lomba</h1>
            <p>Deskripsi</p>
        </div>

        <div style="border-radius: 5px;">
            <form action="/#">
                <div>
                    <label for="judul">Judul Lomba</label>
                </div>
                <div>
                    <input type="text" id="judul" name="judul_lomba" placeholder="Masukkan judul lomba.."
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
                    <label for="country">Kategori</label>
                </div>
                <div>
                    <select id="country" name="country"
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
                    <label for="country">Bidang</label>
                </div>
                <div>
                    <select id="country" name="country"
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
                    <label for="country">Tingkat</label>
                </div>
                <div>
                    <select id="country" name="country"
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
                    <label for="country">Jenis</label>
                </div>
                <div>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="individu">Individu</label>

                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="tim">Tim</label>
                </div>

                <div>
                    <label for="country">Persyaratan & Deskripsi Lain</label>
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
                    ">Masukkan Deskripsi Lainnya</textarea>
                </div>

                <div>
                    <label for="country">Upload Poster</label>
                </div>
                <div>
                    <input type="file" class="form-control-file" id="berkas" name="berkas" placeholder="Upload Poster(JPEG,JPG,PNG)">
                </div>


                <input type="submit" value="Publikasi" class="btn btn-primary"
                style="
                    background: linear-gradient(90.54deg, #5594BE 1.53%, #65DDC7 100%);
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
