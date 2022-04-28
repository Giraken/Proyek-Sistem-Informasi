<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;
    protected $fillable = [
        "lomba_id",
        "tim_nama",
        "tim_jumlah",
        "tim_anggota",
    ];
}
