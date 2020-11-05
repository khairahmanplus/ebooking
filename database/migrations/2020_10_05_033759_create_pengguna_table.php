<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('no_kad_pengenalan', 12)->primary();
            $table->string('nama');
            $table->unsignedInteger('id_bahagian');
            $table->string('no_tel')->nullable();
            $table->string('emel')->unique();
            $table->string('kata_laluan')->nullable();
            $table->boolean('kemaskini_kata_laluan')->default(true);
            $table->unsignedTinyInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}
