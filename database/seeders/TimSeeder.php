<?php

namespace Database\Seeders;

use App\Models\Lomba;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        for($i=0; $i < 20; $i++) {
            $jumlah = rand(2,5);
            $isi = rand(1,$jumlah);
            $id = DB::table('tims')->insertGetId([
                "lomba_id" => rand(1, Lomba::count()),
                "tim_nama" => "Tim ".$faker->realText(10),
                "tim_jumlah" => $jumlah,
                "tim_deskripsi" => $faker->text(300)
            ]);
            $users = User::all()->random($isi);
            for($j=0;$j < $isi;$j++){
                DB::table('user_tim')->insert([
                    "user_id" => $users[$j]->id,
                    "tim_id" => $id,
                ]);
            }
        }
    }
}
