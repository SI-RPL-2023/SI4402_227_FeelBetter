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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profile', 50);
            $table->string('nama_lengkap', 50);
            $table->date('tanggal_lahir');
            $table->string('NIK');
            $table->string('jenis_kelamin');
            $table->string('nomor_telpon');
            $table->string('email')->unique();
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
