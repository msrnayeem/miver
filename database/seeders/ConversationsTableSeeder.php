<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Conversation;
use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{
    public function run()
    {
        $order = Order::find(1); // Assuming you have an order with ID 1
        $conversation = new Conversation();
        $conversation->order_id = $order->id;
        $conversation->user_id = $order->user_id;
        $conversation->message = 'Sample message';
        $conversation->timestamp = now();
        $conversation->save();
    }
}