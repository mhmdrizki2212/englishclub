<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // PERBAIKAN: Tambahkan 'content', 'admin_id', dan 'category_id'
    protected $fillable = [
        'title',
        'content', // Pastikan 'content' juga ada
        'image',
        'status',
        'publish_date',
        'admin_id',
        'category_id'
    ];
}
