<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mobil');
            $table->string('nama_detail',50);
            $table->date('th_keluar');
            $table->enum('transmisi',['matic','manual']);
            $table->enum('status',['active','deactive']);
            $table->enum('warna',['silver','black','metalic']);
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
        Schema::dropIfExists('detail_mobils');
    }
};
