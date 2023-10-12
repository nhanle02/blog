<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;

class PostService
{
    public function getPosts($request) 
    {
        $name = $request['name'] ?? '';
        $status = $request['status'] ?? '';
        $posts = Post::when(!empty($status), function($queryStatus) use($status) {
            $queryStatus->where('status', $status);
        })
        ->with(['categories', 'users'])->paginate(20);

        $posts->appends(['name' => $name, 'status' => $status]);
        return $posts;
    }
}