<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penyuluh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyuluh', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('alamat');
            $table->string('nomer_hp');
            $table->enum('level',['super_admin','admin']);
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
        Schema::dropIfExists('penyuluh');
    }
}
