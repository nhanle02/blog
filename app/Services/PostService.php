<?php

namespace App\Services;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;

class PostService
{
    public function getPosts($request) 
    {
        $s = $request['s'] ?? '';
        $status = $request['status'] ?? '';
        $uid = $request['uid'] ?? '';
        $posts = Post::when(!empty($status), function($queryStatus) use($status) {
            $queryStatus->where('status', $status);
        })
        ->when(!empty($uid), function($queryUser) use($uid) {
            $queryUser->whereHas('user', function($queryExistsUser) use($uid){
                $queryExistsUser->where('id', $uid);
            });
        })
        ->where('title', 'like', "%$s%")
        ->with(['categories', 'user'])->paginate(20);

        $posts->appends(['s' => $s, 'status' => $status, 'uid' => $uid]);
        return $posts;
    }
}