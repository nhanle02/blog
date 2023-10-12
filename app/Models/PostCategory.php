<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_category';

    protected $fillable = [
        'post_id',
        'category_id', 
    ];

    // public function postCategory()
    // {
    //     return $this->belongsToMany(PostCategory::class, 'post_category', 'post_id', 'category_id');
    // }
}
