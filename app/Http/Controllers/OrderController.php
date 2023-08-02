<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlacedSeller;
use App\Models\Gig;
use App\Models\Notification;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function placedOrder(Request $request)
    {
        $gigId = 1;
        $packageId = 1;

        $buyer_id = session()->get('id');

        $gig = Gig::with(['user', 'packages' => function ($query) use ($packageId) {
            $query->where('id', $packageId);
        }])->find($gigId);

        $seller_id = $gig->user->id;
        $price = $gig->packages->first()->price;

        //place order

        $order = new Order();
        $order->order_id = 'ORD-'.$seller_id.'-'.$buyer_id.'-'.$gigId.'-'.now()->format('YmdHis');
        $order->buyer_id = $buyer_id;
        $order->seller_id = $seller_id;
        $order->gig_id = $gigId;
        $order->price = $price;
        $order->created_at = now();
        $order->save();

        //create notifiction for seller
        $notification = new Notification();
        $notification->user_id = $seller_id;
        $notification->notification_text = "You have a new order, id:'.$order->order_id.";
        $notification->notification_date = now();
        $notification->save();

        //create notifiction for buyer
        $notification = new Notification();
        $notification->user_id = $buyer_id;
        $notification->notification_text = "You have placed a new order, id:'.$order->order_id.";
        $notification->notification_date = now();
        $notification->save();

        //send email to seller
        $seller = User::find($seller_id); // Replace 1 with the user ID you want to send the welcome email to
        Mail::to($seller->email)->send(new OrderPlacedSeller($seller, $order->order_id));

        return 'Order Placed Successfully';
    }
}
