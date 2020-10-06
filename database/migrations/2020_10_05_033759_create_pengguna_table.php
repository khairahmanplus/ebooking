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
            $table->id();
            $table->string('nama');
            $table->string('no_kad_pengenalan', 12);
            $table->unsignedInteger('id_bahagian');
            $table->string('jawatan');
            $table->string('no_tel_pej')->nullable();
            $table->string('no_tel_hp')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('emel');
            $table->string('kata_laluan');
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
