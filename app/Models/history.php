<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TestTaker; // Impor model TestTaker

class History extends Model
{
    use HasFactory;

    protected $fillable = ['test_taker_id', 'name', 'score'];

    // Relasi ke TestTaker
    public function testTaker()
    {
        return $this->belongsTo(TestTaker::class);
    }
}
