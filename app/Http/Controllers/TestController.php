<?php

namespace App\Http\Controllers;
Use App\Mail\TestMail;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    public function bar(Request $request)
    {
        
        Mail::to($request->email)->send(new TestMail());


               return view('test');
    }
}
