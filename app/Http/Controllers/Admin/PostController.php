<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
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
        $categories = $this->postService->getCategories();
        $tags = $this->postService->getTags();
        return view('admin.posts.create', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
    public function store(PostRequest $request) 
    {
        $posts = $this->postService->store($request->all());
        if ($posts) {
            return redirect()->route('admin.posts.index')->with('success', 'Tạo thành công!!!');
        }
        return back()->with('error', 'Tạo thất bại!!!');
    }

    public function edit($id) 
    {
        $categories = $this->postService->getCategories();
        $tags = $this->postService->getTags();
        $post = $this->postService->getPost($id);
        return view('admin.posts.edit', [
            'categories' => $categories,
            'tags' => $tags,
            'post' => $post
        ]);
    }

    public function update(PostRequest $request, $id)
    {
        $post = $this->postService->update($request->all(), $id);
        if ($post) {
            return redirect()->route('admin.posts.index')->with('success', 'Cập nhật thành công!!!');
        }
        return back()->with('error', 'Cập nhật thất bại!!!');
    }
}
