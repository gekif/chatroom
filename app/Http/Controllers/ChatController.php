<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function insert(Request $request)
    {
        Message::create([
            'user_id' => Auth::id(),
            'text' => $request->input('text'),
            'time' => date('h:i:s:a')
        ]);
    }


    public function display()
    {
        return view('home');
    }
}
