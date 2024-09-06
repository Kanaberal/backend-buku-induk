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
        Schema::create('halaman_belakang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nilai_id');
            $table->unsignedBigInteger('ekstrakurikuler_id');
            $table->unsignedBigInteger('ketidakhadiran_id');
            $table->unsignedBigInteger('status_akhir_tahun_id');
            $table->timestamps();

            //foreign key
            $table->foreign('nilai_id')->references('id')->on('nilai')->onDelete('cascade');
            $table->foreign('ekstrakurikuler_id')->references('id')->on('ekstrakurikuler')->onDelete('cascade');
            $table->foreign('ketidakhadiran_id')->references('id')->on('ketidakhadiran')->onDelete('cascade');
            $table->foreign('status_akhir_tahun_id')->references('id')->on('status_akhir_tahun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman_belakang');
    }
};
