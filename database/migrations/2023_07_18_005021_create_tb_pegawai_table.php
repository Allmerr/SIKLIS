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
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->increments('id_pegawai');
            
            $table->unsignedInteger('id_jabatan');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('tb_jabatan')->onDelete('cascade');
            $table->string('nama_pegawai',100);
            $table->enum('is_deletd', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pegawai');
    }
};