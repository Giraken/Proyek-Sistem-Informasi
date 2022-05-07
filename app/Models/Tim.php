<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Tim extends Model
{
    use HasFactory;
    protected $fillable = [
        "lomba_id",
        "tim_nama",
        "tim_jumlah",
        "tim_deskripsi",
    ];

    public function users(){
        return $this->belongsToMany(User::class,"user_tim");
    }

    public function lomba(){
        return $this->belongsTo(Lomba::class,"lomba_id");
    }
}
