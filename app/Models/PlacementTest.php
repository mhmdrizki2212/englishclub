<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlacementTest extends Model
{
    protected $table = 'placement_tests'; // ini opsional

    // ✅ Tambahkan ini agar bisa mass-assignment
    protected $fillable = [
        'tags',
        'soal',
        'pilihan1',
        'pilihan2',
        'pilihan3',
        'pilihan4',
        'jawaban',
    ];
}
