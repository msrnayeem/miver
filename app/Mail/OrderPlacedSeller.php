<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlacedSeller extends Mailable
{
    use Queueable, SerializesModels;

    public $seller;

    public $order_id;

    public function __construct($seller, $order_id)
    {
        $this->seller = $seller;
        $this->order_id = $order_id;
    }

    public function build()
    {
        return $this->view('emails.order-placed-seller')
            ->subject('New Order Placed')
            ->with([
                'seller' => $this->seller,
                'order_id' => $this->order_id,
            ]);
    }
}
