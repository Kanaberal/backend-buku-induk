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
        Schema::create('perkembangan_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_menerima_beasiswa')->nullable();
            $table->integer('menerima_beasiswa_kelas')->nullable();
            $table->string('menerima_beasiswa_dari')->nullable();
            $table->date('tanggal_meninggalkan_sekolah')->nullable();
            $table->string('alasan_meninggalkan_sekolah')->nullable();
            $table->integer('tahun_lulus')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->date('tanggal_ijazah')->nullable();
            $table->string('no_skhun')->nullable();
            $table->date('tanggal_skhun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangan_siswa');
    }
};
