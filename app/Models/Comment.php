<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';

    protected $fillable = [
        'post_id',
        'user_id',
        'content',
        'comment_id',
        'status',
    ];

    public function ChildrenComments() 
    {
        return $this->hasMany(Comment::class, 'comment_id', 'id')->with('ChildrenComments');
    }

    public function post() 
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
    public function user() 
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
