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
            $table->string('publikasi')->nullable();
            $table->string('volume')->nullable();
            $table->string('nomor')->nullable();
            $table->string('halaman')->nullable();
            $table->string('tahun')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('file')->nullable();
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
