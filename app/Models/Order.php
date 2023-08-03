<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
    
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function conversation()
    {
        return $this->hasOne(Conversation::class);
    }
}
