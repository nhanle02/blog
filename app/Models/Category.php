<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent',
        'count',
        'status',
    ];

    public function childrenCategories() 
    {
        return $this->hasMany(Category::class, 'parent', 'id')->with('childrenCategories');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category');
    }
}
