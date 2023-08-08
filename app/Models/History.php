<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'user_id', // Add 'user_id' to the fillable array
        'action',
        'description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
