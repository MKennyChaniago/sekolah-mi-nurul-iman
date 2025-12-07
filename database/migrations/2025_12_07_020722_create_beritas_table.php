<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul Berita
            $table->string('slug')->unique(); // Slug untuk URL
            $table->string('category'); // Kategori (Kegiatan/Prestasi)
            $table->longText('content'); // Isi Berita
            $table->string('thumbnail')->nullable(); // Foto Sampul
            $table->date('published_at')->nullable(); // Tanggal Terbit
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('author')->default('Admin'); // Penulis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
