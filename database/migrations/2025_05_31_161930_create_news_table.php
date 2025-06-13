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
        Schema::create('news', function (Blueprint $table) {
            $table->id('news_id');
            $table->string('title');

            // TAMBAHKAN BARIS INI UNTUK KOLOM KONTEN
            $table->text('content');

            $table->integer('views')->default(0);
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->date('publish_date')->nullable();

            // Definisikan kolom sebelum membuat foreign key
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // PERBAIKAN: Foreign key constraint sebaiknya didefinisikan di akhir
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // Anda mungkin juga ingin menambahkan foreign key untuk admin_id
            // $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
