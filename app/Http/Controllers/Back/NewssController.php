<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewssController extends Controller
{
    public function index()
    {
        return view ('back.newss');
    }
}
