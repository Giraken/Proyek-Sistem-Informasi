<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_instansi')->nullable(true)->default(null);
            $table->string('user_jurusan')->nullable(true)->default(null);
            $table->string('user_jenjang')->nullable(true)->default(null);
            $table->integer('user_kelas')->nullable(true)->default(null);
            $table->string('user_domisili')->nullable(true)->default(null);
            $table->date('user_tanggal_lahir')->nullable(true)->default(null);
            $table->string('user_telp')->nullable(true)->default(null);
            $table->string('user_foto')->nullable(true)->default(null);
            $table->integer('user_role');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
