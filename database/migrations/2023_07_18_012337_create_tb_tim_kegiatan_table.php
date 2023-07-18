<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_tim_kegiatan', function (Blueprint $table) {
            $table->increments('id_tim');
            $table->unsignedInteger('id_kegiatan');
            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('tb_kegiatan')->onDelete('cascade');
            $table->unsignedInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('tb_pegawai')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tim_kegiatan');
    }
};