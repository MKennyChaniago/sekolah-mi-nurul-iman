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
    Schema::create('gurus', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama Guru
        $table->string('nip')->nullable(); // NIP (Opsional)
        $table->string('position'); // Jabatan (Guru Kelas/Kepsek)
        $table->enum('status', ['PNS', 'Honorer', 'GTY', 'Staff']); // Status Kepegawaian
        $table->string('photo')->nullable(); // Foto Profil
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
