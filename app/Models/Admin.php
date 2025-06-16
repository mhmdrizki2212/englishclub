<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;  // Ganti ini
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable  // Pastikan mewarisi Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password',
    ];

    // Optional: Jika Anda menggunakan hash, pastikan untuk menambahkan mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
