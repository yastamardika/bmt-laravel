<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_artist',250);
            $table->string('kategori',40);
            $table->string('nama_owner',250);
            $table->text('deskripsi');
            $table->string('foto',250);
            $table->string('nomor_telepon',20);
            $table->text('alamat',250);
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
        Schema::dropIfExists('talent');
    }
}
