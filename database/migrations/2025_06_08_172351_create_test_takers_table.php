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
        // Cek jika tabel belum ada sebelum membuat
        if (!Schema::hasTable('test_takers')) {
            Schema::create('test_takers', function (Blueprint $table) {
                $table->id();
                $table->string('email')->unique(); // Tambahkan unique untuk mencegah duplikat
                $table->string('nim')->unique();   // Tambahkan unique untuk mencegah duplikat
                $table->string('name');
                $table->integer('score')->nullable(); // Skor bisa diisi nanti
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_takers');
    }
};
