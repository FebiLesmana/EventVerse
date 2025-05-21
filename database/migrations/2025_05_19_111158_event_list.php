<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_list', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('jenis', 30);
            $table->string('deskripsi', 150);
            $table->string('tempat', 20);
            $table->dateTime('waktu');
            $table->string('pembicara', 30)->nullable();
            $table->string('organizer', 30);
            $table->string('instagram', 30)->nullable();
            $table->string('poster');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_list');
    }
};
