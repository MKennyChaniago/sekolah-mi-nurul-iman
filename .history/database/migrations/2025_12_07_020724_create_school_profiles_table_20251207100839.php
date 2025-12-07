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
    Schema::create('school_profiles', function (Blueprint $table) {
        $table->id();
        $table->text('history')->nullable(); // Sejarah
        $table->string('history_image')->nullable(); // Foto Sejarah
        $table->text('vision')->nullable(); // Visi
        $table->text('mission')->nullable(); // Misi
        $table->string('structure_image')->nullable(); // Foto Struktur Organisasi
        $table->text('headmaster_welcome')->nullable(); // Sambutan Kepala Sekolah
        $table->string('headmaster_name')->nullable(); // Nama Kepsek
        $table->string('headmaster_photo')->nullable(); // Foto Kepsek
        $table->text('curriculum_desc')->nullable(); // Deskripsi Kurikulum
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
