<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService) 
    {
        $this->postService = $postService;
    }
    public function index(Request $request) 
    {
        $posts = $this->postService->getPosts($request->all());
        $status = config('const.posts.status');
        return view('admin.posts.index', [
            'posts' => $posts,
            'status' => $status,
        ]);
    }

    public function create() 
    {
        return view('admin.posts.create');
    }
}
