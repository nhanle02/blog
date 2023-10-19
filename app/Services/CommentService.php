<?php

namespace App\Services;
use App\Models\Comment;

class CommentService 
{
    public function getComments() 
    {
        $comments = Comment::with(['post', 'user'])
        ->paginate(10);
        return $comments;
    }
}