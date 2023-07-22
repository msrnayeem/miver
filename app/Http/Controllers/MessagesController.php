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
        
        $message = new Message([
            'from_user' => session()->get('id'),
            'to_user' => $request->input('to_user'),
            'content' => $request->input('message')
        ]);
        $message->save();

        $options = [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true,
        ];

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = [
            'message' => $request->input('message'),
            'from_user' => auth()->id(),
            'to_user' => $request->input('to_user'),
        ];

        $pusher->trigger('chat-channel', 'chat-event', $data);

        return response()->json(['status' => 'Message sent']);
    }
}
