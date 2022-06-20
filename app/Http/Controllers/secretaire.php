<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secretaire extends Controller
{
    public function index()
    {
        return view('secretaire.secretaire');
    }
}
