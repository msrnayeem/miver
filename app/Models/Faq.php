<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
