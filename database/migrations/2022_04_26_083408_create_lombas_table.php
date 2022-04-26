<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string("lomba_judul");
            $table->string("lomba_kategori");
            $table->string("lomba_bidang");
            $table->string("lomba_tingkat");
            $table->string("lomba_jenis");
            $table->string("lomba_deskripsi")->nullable(true);
            $table->string("lomba_foto");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lombas');
    }
}