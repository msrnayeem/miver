<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'category_user')->withTimestamps();
    }
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
    public function guides()
    {
        return $this->hasMany(Guide::class);
    }
}