<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peserta_daftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta', 100);
            $table->string('nim', 30);
            $table->string('fakultas', 150);
            $table->string('email', 100);
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peserta_daftar');
    }
};
