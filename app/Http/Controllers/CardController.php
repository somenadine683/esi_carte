<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        return view('home');
    }
    public function create(){
        return view('etudiants.create');
    }
    public function show(){
        return view('secretaires.create');
    }
}
