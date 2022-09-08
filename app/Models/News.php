<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    //allow all array to fill
    protected $fillable = ['title', 'category_id', 'image', 'article', 'slug', 'created_at', 'title_id', 'article_id', 'photos'];

    //guarder cant fill field
    // protected $guarded = ['*'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}