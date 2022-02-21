<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'image', 'article', 'slug', 'created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}