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
        Schema::create('jadwal_mengajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('data_gurus')->onDelete('cascade');
            $table->string('mata_pelajaran');
            $table->string('kelas');
            $table->string('hari');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mengajars');
    }
};
