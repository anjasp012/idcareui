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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('category')->default('Research Paper');
            $table->string('penulis');
            $table->string('judul');
            $table->string('slug');
            $table->string('publikasi');
            $table->string('volume');
            $table->string('nomor');
            $table->string('halaman');
            $table->string('tahun');
            $table->string('penerbit')->nullable();
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
