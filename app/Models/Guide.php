<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = 'guides';

    public function guides()
    {
        return $this->hasMany(Guide::class);
    }
}
