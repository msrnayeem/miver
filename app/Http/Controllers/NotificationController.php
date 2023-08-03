<?php

namespace App\Http\Controllers;

use App\Models\Notification;

class NotificationController extends Controller
{
    public function getNotificationData()
    {
        $notification = Notification::where('user_id', session()->get('id'))
            ->orderByDesc('created_at')
            ->get();

        return response()->json($notification);
    }

    public function markAsRead()
    {
        $notification = Notification::where('user_id', session()->get('id'))->update(['is_read' => 1]);

        $count = Notification::where('user_id', session()->get('id'))->where('is_read', 0)->count();

        return response()->json([
            'status' => true,
            'data' => $count,
        ]);

    }
}
