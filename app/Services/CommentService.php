<?php

namespace App\Services;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class CommentService 
{
    public function getComments($request) 
    {
        $user_id = $request['user'] ?? '';
        $content = $request['content'] ?? '';
        $comments = Comment::with(['post', 'user'])
        ->where(function ($query) use ($user_id) {
            if (!empty($user_id)) {
                $query->where('user_id', $user_id);
            }
        })
        ->where('content', 'like', "%$content%")
        ->paginate(10);
        $comments->appends(['user' => $user_id, 'content' => $content]);
        return $comments;
    }
    public function getUsers()
    {
        return User::get();
    }
    public function getAllComments() 
    {
        return Comment::get();
    }
    public function getPosts()
    {
        return Post::get();
    }
    public function store($request)
    {
        $request['status'] = !empty($request['status']) ? '1' : '2';
        return Comment::create($request);
    }

    public function getCommentId($id)
    {
        return Comment::find($id);
    }

    public function update($request, $id) 
    {
        $comment = Comment::find($id);
        $comment->post_id = $request['post_id'];
        $comment->user_id = $request['user_id'];
        $comment->comment_id = $request['comment_id'];
        $comment->content = $request['content'];
        $comment->status = !empty($request['status']) ? '1' : '2';
        $comment->save();
        return $comment;
    }

    public function delete($id)
    {
        return Comment::find($id)->delete();
    }
}