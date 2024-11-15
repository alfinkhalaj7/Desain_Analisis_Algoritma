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
        Schema::create('izin_cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('data_gurus')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->integer('durasi'); // Durasi dalam hari
            $table->string('status'); // Contoh: Approved, Pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_cutis');
    }
};
