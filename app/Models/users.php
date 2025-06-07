<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Menambahkan kolom yang bisa diisi massal
    protected $fillable = [
        'email',
        'nim',
        'name',
        'score',
    ];
}