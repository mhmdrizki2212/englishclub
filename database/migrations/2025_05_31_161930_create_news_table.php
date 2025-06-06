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
        $table->id('news_id'); // custom primary key name
        $table->string('title');
        $table->integer('views')->default(0);
        $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
        $table->date('publish_date')->nullable();
        $table->unsignedBigInteger('admin_id');
        $table->unsignedBigInteger('category_id');
        $table->timestamps();

        // Foreign keys
        // $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
