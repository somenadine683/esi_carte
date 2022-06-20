<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liste extends Controller
{
    public function index()
    {
        return view('liste.liste');
    }
}
