<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) {
            $nama = $faker->name;
            $jenjang4 = ["SD", "SMP", "SMA", "Kuliah"];
            $jurusan421 = [["MIPA", "IPS", "Bahasa", "Agama"],
                        ["Biologi", "Fisika", "Geofisika", "Kimia", "Statistika", "Matematika", "Astronomi", "Teknik Informatika", "Ilmu Komputer", "Teknik Komputer", "Sistem Informasi", "Sistem Informasi", "Manajemen Informasi", "Pendidikan Dokter", "Pendidikan Dokter Gigi", "Farmasi", "Kesehatan Masyarakat", "Keperawatan", "Kebidanan", "Ilmu gizi", "Kedokteran Hewan",]];
            $ind = rand(0,3);
            DB::table('users')->insert([
                'user_name' => $nama,
                'email' => Str::replace(" ", "",Str::lower($nama).rand(0, 1000)).'@gmail.com',
                'password' => Hash::make("12345678"),
                'user_instansi' => $faker->firstNameMale." University",
                'user_jurusan' => $ind > 1 ? $jurusan421[$ind-2][$ind == 2 ? rand(0,3):rand(0,20)]:null,
                'user_jenjang' => $jenjang4[$ind],
                'user_kelas' => rand(0,3),
                'user_domisili' => $faker->city,
                'user_telp' => $faker->phoneNumber,
                'user_foto'=> asset("img/profil.jpg"),
                'user_role' => "1",
            ]);
        }
    }
}
