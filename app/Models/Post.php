<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'status',
        'create_by',
        'updated_by',
        'comment_count',
        'comment_status',
        'is_featured',
        'views',
        'image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'create_by');
    }
}
