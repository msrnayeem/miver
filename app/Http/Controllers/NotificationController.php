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
}
