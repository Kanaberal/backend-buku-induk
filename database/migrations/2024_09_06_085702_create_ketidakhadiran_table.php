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
        Schema::create('ketidakhadiran', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_sakit')->nullable();
            $table->integer('jumlah_izin')->nullable();
            $table->integer('jumlah_tanpa_keterangan')->nullable();
            $table->unsignedBigInteger('semester_id');
            $table->timestamps();

            //foreign key
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketidakhadiran');
    }
};
