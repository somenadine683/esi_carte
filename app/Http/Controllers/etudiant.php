<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etudiant extends Controller
{
    public function index()
    {
        return view('etudiant.etudiant');
    }
}
