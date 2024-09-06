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
        Schema::create('setelah_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('melanjutkan_ke')->nullable();
            $table->string('bekerja_di')->nullable();
            $table->date('tanggal_mulai_bekerja')->nullable();
            $table->string('penghasilan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setelah_pendidikan');
    }
};
