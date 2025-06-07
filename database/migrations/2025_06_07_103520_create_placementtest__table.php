<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('test_takers', function(Blueprint $table){
            $table->id();
            $table->string('email')->unique();
            $table->string('nim')->unique();
            $table->string('name');
            $table->integer('score')->nullable();
            $table->timestamps();
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('test_takers'); // Sesuaikan dengan nama tabel yang digunakan
    }
};