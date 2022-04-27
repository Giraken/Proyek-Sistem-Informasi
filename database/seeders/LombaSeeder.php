<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        $kat = ["Olimpiade", "Karya Tulis", "Lainnya"];
        $bid = ["Komputer", "IPA","IPS","Seni","Olahraga","Agama","Lainnya"];
        $tin = ["SD", "SMP","SMA","Kuliah"];
        for ($i=0; $i < 20; $i++) {
            $nama = $faker->name;
            DB::table('lombas')->insert([
                "user_id" => rand(1,User::count()),
                "lomba_judul" => $faker->realText(20),
                "lomba_kategori" => $kat[rand(0,2)],
                "lomba_bidang"=>$bid[rand(0,6)],
                "lomba_tingkat"=>$tin[rand(0,3)],
                "lomba_jenis" => rand(0,1),
                "lomba_deskripsi" => $faker->realText(120),
                "lomba_foto" => "images/posters/".rand(1,7).".jpg",
            ]);
        }
    }
}
