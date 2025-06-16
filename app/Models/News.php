<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * Tentukan primary key tabel.
     *
     * @var string
     */
    protected $primaryKey = 'news_id'; // <--- TAMBAHKAN BARIS INI

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
        'publish_date',
        'admin_id',
        'category_id'
    ];
}
