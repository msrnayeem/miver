<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user');
    }
}
