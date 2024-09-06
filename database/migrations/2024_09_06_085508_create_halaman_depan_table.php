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
        Schema::create('halaman_depan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_diri_id');
            $table->unsignedBigInteger('tempat_tinggal_id');
            $table->unsignedBigInteger('kesehatan_id');
            $table->unsignedBigInteger('pendidikan_id');
            $table->unsignedBigInteger('ayah_kandung_id');
            $table->unsignedBigInteger('ibu_kandung_id');
            $table->unsignedBigInteger('wali_id');
            $table->unsignedBigInteger('hobi_siswa_id');
            $table->unsignedBigInteger('perkembangan_siswa_id');
            $table->unsignedBigInteger('setelah_pendidikan_id');
            $table->timestamps();

            //foreign key
            $table->foreign('data_diri_id')->references('id')->on('data_diri')->onDelete('cascade');
            $table->foreign('tempat_tinggal_id')->references('id')->on('tempat_tinggal')->onDelete('cascade');
            $table->foreign('kesehatan_id')->references('id')->on('kesehatan')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikan')->onDelete('cascade');
            $table->foreign('ayah_kandung_id')->references('id')->on('ayah_kandung')->onDelete('cascade');
            $table->foreign('ibu_kandung_id')->references('id')->on('ibu_kandung')->onDelete('cascade');
            $table->foreign('wali_id')->references('id')->on('wali')->onDelete('cascade');
            $table->foreign('hobi_siswa_id')->references('id')->on('hobi_siswa')->onDelete('cascade');
            $table->foreign('perkembangan_siswa_id')->references('id')->on('perkembangan_siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman_depan');
    }
};
