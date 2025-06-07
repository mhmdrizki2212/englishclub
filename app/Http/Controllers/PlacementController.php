<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function index()
    {
        // Returning the placement form view
        return view('formuser');
    }
}