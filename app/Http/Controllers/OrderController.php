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
        $type = 'buyer';
        return view('pages.user.orders', compact('orders', 'type'));
        
    }
    public function myOrders(Request $request)
    {
        if(!session()->has('id')){
            return redirect()->route('index');
        }
        $sellerId = session()->get('id');

        $orders = Order::where('buyer_id', $sellerId)->get();
        $type = 'seller';
        return view('pages.user.orders', compact('orders', 'type'));
        
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
        $order->created_at = now();
        $order->updated_at = now();
        $order->delivery_date = now()->addDays($gig->delivery_time);
        $order->save();
       
        //create notifiction for seller
        $notification = new Notification();
        $notification->user_id = $seller_id;
        $notification->notification_text = '<a href="' . route('order.details', ['orderId' => $order->order_id]) . '">you have got a new order</a>';
        $notification->notification_date = now();
        $notification->save();

        //create notifiction for buyer
        $notification = new Notification();
        $notification->user_id = $buyer_id;
        $notification->notification_text = '<a href="' . route('order.details', ['orderId' => $order->order_id]) . '">you have placed a new order</a>';
        $notification->notification_date = now();
        $notification->save();

        //send email to seller
      //  $seller = User::find($seller_id); // Replace 1 with the user ID you want to send the welcome email to
     //   Mail::to($seller->email)->send(new OrderPlacedSeller($seller, $order->order_id));

        //return json response true
        return response()->json(['success' => true]);
    }

    public function orderDetails(Request $request){
        $orderId = $request->orderId;
        $order = Order::with('gig')->where('order_id', $orderId)->first();
        
        if($order->buyer_id == session()->get('id')){
            $type = 'buyer';
        }
        else if($order->seller_id == session()->get('id')){
            $type = 'seller';
        }
        else{
            return redirect()->back()->withErrors(['You are not authorized to view this order']);
        }
        return view('pages.user.order-details', compact('order', 'type'));
    }

    public function orderUpdate(Request $request){

        $orderId = $request->input('order_id');
        $status = $request->input('status');

        $statusValue = '';

        switch ($status) {
            case 'pending':
                $statusValue = 0;
                break;
            case 'accepted':
                $statusValue = 1;
                break;
            case 'delivered':
                $statusValue = 2;
                break;
            case 'cancelled':
                $statusValue = 3;
                break;
            default:
                return response()->json(['error' => 'Invalid status value'], 422);
            }
        $order = Order::find($orderId);
        $order->order_status = $statusValue;
        $order->save();

        //create notifiction for buyer
        $notification = new Notification();
        $notification->user_id = $order->buyer_id;
        $notification->notification_text = '<a href="' . route('order.details', ['orderId' => $order->order_id]) . '">your order status has been updated : ' . $status . '</a>';
        $notification->notification_date = now();
        $notification->save();

        return response()->json(['success' => true]);
    }

    public function cancelOrder(Request $request){
        $orderId = $request->input('id');
        $order = Order::find($orderId);

        if($order->buyer_id !== session()->get('id')){
           return redirect()->back()->withErrors('You are not authorized to cancel this order');
        }

        if($order->order_status == 3){
            return redirect()->back()->withErrors('Order cancelled already');
        }
        if($order->order_status !== 0){
         
          return redirect()->back()->withErrors('You can canel your order if its only in pending status');

        }

        if($order->order_status == 0){
            $order->order_status = 3;
            $order->save();
            //create notifiction for seller
            $notification = new Notification();
            $notification->user_id = $order->seller_id;
            $notification->notification_text = '<a href="' . route('order.details', ['orderId' => $order->order_id]) . '">your order has been cancelled by buyer</a>';
            $notification->notification_date = now();
            $notification->save();
            
            return redirect()->back()->withErrors('Order cancelled successfully');
        }
        
       return redirect()->back()->withErrors('You can canel your order if its in pending');
   
    }


    //for admin panel

    public function allOrders(Request $request){
        $status = $request->query('status');

        if ($status === null) {
            $orders = Order::all();
        }
        else {
            // 'status' parameter provided, filter orders by the specified status
            $orders = Order::where('order_status', $status)->get();
        }
        
        return view('pages.admin.all-orders', compact('orders'));
    }
}
