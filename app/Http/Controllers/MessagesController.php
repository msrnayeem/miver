<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Pusher\Pusher;

class MessagesController extends Controller
{
    public function index()
    {
        return view('chat');
    }
    public function send(Request $request)
    {
        
        // Validate the request
        $request->validate([
            'message' => 'required|string',
        ]);

        // Save the message to your database or handle it as needed
        // For this example, we'll just broadcast the message directly

        $message = $request->input('message');

        // Broadcast the message using Laravel Echo and Pusher
        event(new \App\Events\MessageSent($message));

        return response()->json(['status' => 'Message sent!']);
    }
}
