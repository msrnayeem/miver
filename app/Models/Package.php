<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
