<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlacedSeller;
use App\Models\Gig;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function orders(Request $request)
    {
        if(!session()->has('id')){
            return redirect()->route('index');
        }
        $sellerId = session()->get('id');

        $orders = Order::where('seller_id', $sellerId)->get();

        return view('pages.user.orders', compact('orders'));
        
    }

    public function placedOrder(Request $request)
    {
         // Retrieve the gigIdNumber and package from the AJAX request
         $gigId = $request->input('gigIdNumber');
         $package = $request->input('package');

        $packageId = Package::where('name', $package)->where('gig_id', $gigId)->first()->id;

        $buyer_id = session()->get('id');

        $gig = Gig::with(['seller', 'packages' => function ($query) use ($packageId) {
            $query->where('id', $packageId);
        }])->find($gigId);

        $seller_id = $gig->seller->id;
        $price = $gig->packages->first()->price;

        //place order

        $order = new Order();
        $order->order_id = 'ORD-'.$seller_id.'-'.$buyer_id.'-'.$gigId.'-'.now()->format('YmdHis');
        $order->buyer_id = $buyer_id;
        $order->seller_id = $seller_id;
        $order->gig_id = $gigId;
        $order->price = $price;
        $order->order_status = 'pending';
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

        //return json response true
        return response()->json(['success' => true]);
    }

    public function orderDetails(Request $request){
        $orderId = $request->orderId;
        $order = Order::with('gig')->where('order_id', $orderId)->first();
        
        if($order->seller_id != session()->get('id')){
            //redirect back with errors
            return redirect()->back()->withErrors(['You are not authorized to view this order']);
        }
        return view('pages.user.order-details', compact('order'));
    }
}
