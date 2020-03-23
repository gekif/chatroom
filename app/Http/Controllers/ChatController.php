<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
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
        $messages = Message::where('user_id', Auth::id())
                    ->get();

        $user = User::where('id', Auth::id())
                ->first();

        $username = $user->name;

        return view('home', [
            'username' => $username,
            'messages' => $messages
        ]);
    }
}
