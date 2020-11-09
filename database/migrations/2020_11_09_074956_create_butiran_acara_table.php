<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButiranAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butiran_acara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_acara');
            $table->date('tarikh');
            $table->enum('sesi', ['pagi', 'petang', 'penuh']);
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
        Schema::dropIfExists('butiran_acara');
    }
}
