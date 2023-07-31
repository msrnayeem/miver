<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
