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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('tamatan_dari');
            $table->date('tanggal_ijazah');
            $table->string('no_ijazah');
            $table->date('tanggal_skhun');
            $table->string('no_skhun');
            $table->string('lama_belajar_sebelumnya');
            $table->string('pindahan_dari')->nullable();
            $table->string('alasan_pindah')->nullable();
            $table->integer('diterima_di_kelas');
            $table->string('diterima_di_bidang_keahlian');
            $table->string('diterima_di_program_keahlian');
            $table->string('diterima_di_paket_keahlian');
            $table->date('diterima_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan');
    }
};
