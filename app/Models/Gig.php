<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'gig_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
