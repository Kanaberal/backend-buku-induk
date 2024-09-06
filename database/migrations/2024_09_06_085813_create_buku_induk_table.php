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
        Schema::create('buku_induk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('halaman_depan_id');
            $table->unsignedBigInteger('halaman_belakang_id');
            $table->timestamps();

            //foreign key
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('halaman_depan_id')->references('id')->on('halaman_depan')->onDelete('cascade');
            $table->foreign('halaman_belakang_id')->references('id')->on('halaman_belakang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_induk');
    }
};
