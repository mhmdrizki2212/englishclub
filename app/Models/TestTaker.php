<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTaker extends Model
{
    use HasFactory;

    /**
     * Tentukan nama tabel jika tidak mengikuti konvensi Laravel (opsional tapi baik)
     */
    protected $table = 'test_takers';

    /**
     * Kolom yang boleh diisi secara massal (mass assignable).
     * Ini penting untuk keamanan.
     */
    protected $fillable = ['email', 'nim', 'name', 'score'];

    /**
     * Relasi ke History (jika diperlukan nanti).
     */
    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
