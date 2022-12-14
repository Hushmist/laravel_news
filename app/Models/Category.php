<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function news_category()
    {
        return $this->hasMany(NewsCategory::class);
    }

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
}
