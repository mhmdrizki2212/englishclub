<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TestTaker extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi
    protected $fillable = ['email', 'nim', 'name', 'score'];

    // Relasi ke History
    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
