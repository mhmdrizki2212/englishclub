<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];
}
