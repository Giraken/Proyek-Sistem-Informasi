<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $fillable= [
        "user_id",
        "lomba_judul",
        "lomba_kategori",
        "lomba_bidang",
        "lomba_tingkat",
        "lomba_jenis",
        "lomba_deskripsi",
        "lomba_foto",
    ];

    public function tims(){
        return $this->hasMany(Tim::class,"lomba_id");
    }
    public static function findTims($judul){
        $lomba = Lomba::firstWhere("lomba_judul", $judul);
        if($lomba != null) return $lomba->tims;
        else return array();
    }
}
