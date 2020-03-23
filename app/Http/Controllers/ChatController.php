<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function insert(Request $request)
    {

    }


    public function display()
    {
        return view('home');
    }
}
