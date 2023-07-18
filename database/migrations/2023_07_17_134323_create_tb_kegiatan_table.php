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
        Schema::create('tb_kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->string('nama_kegiatan', 256);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('lokasi', 256);
            $table->string('peserta', 256);
            $table->enum('is_deleted', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kegiatan');
    }
};