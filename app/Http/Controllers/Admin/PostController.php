<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\UserService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    private $userService;

    public function __construct(PostService $postService, UserService $userService) 
    {
        $this->postService = $postService;
        $this->userService = $userService;
    }
    public function index(Request $request) 
    {
        $posts = $this->postService->getPosts($request->all());
        $status = config('const.posts.status');
        $users = $this->userService->getAllUsers();
        return view('admin.posts.index', [
            'posts' => $posts,
            'status' => $status,
            'users' => $users,
        ]);
    }

    public function create() 
    {
        return view('admin.posts.create');
    }
}
