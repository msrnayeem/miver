<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Notification;

class MessageController extends Controller
{
    public function getMessages()
    {
        $userId = session()->get('id');

        $messages = Message::selectRaw('LEAST(from_id, to_id) AS user1_id')
            ->selectRaw('GREATEST(from_id, to_id) AS user2_id')
            ->select('from_id', 'to_id', 'body', 'created_at')
            ->with(['sender:id,name', 'receiver:id,name'])
            ->where(function ($query) use ($userId) {
                $query->where('to_id', $userId)
                    ->orWhere('from_id', $userId);
            })
            ->groupByRaw('LEAST(from_id, to_id), GREATEST(from_id, to_id)')
            ->orderByDesc('created_at')
            ->get();
        if ($messages != null) {
            return response()->json([
                'status' => true,
                'data' => $messages,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'No messages found',
            ]);
        }
    }

    public function getMsgNotificationCount(){
        $message = Message::where('to_id', session()->get('id'))->where('seen', 0)->count();
        $notification = Notification::where('user_id', session()->get('id'))->where('is_read', 0)->count();
        
        return response()->json([
            'status' => true,
            'data' => [
                'message' => $message,
                'notification' => $notification,
            ],
        ]);
    }
}
