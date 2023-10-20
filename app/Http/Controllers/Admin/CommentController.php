<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\CommentResquest;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;
    
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    public function index(Request $request)
    {
        $comments = $this->commentService->getComments($request->all());
        $users = $this->commentService->getUsers();
        $status = config('const.comments.status');
        return view('admin.comments.index', [
            'comments' => $comments,
            'status' => $status,
            'users' => $users
        ]);
    }

    public function create() {
        $comments = $this->commentService->getAllComments();
        $posts = $this->commentService->getPosts();
        return view('admin.comments.create', [
            'comments' => $comments,
            'posts' => $posts
        ]);
    }

    public function store(CommentRequest $request)
    {
        $comment = $this->commentService->store($request->all());
        if ($comment) {
            return redirect()->route('admin.comments.index')->with('success', 'Tạo thành công!!!');
        }
        return back()->with('error', 'Tạo thất bại!!!');
    }

    public function edit($id) 
    {
        $comment = $this->commentService->getCommentId($id);
        $comments = $this->commentService->getAllComments();
        $posts = $this->commentService->getPosts();
        return view('admin.comments.edit', [
            'comment' => $comment,
            'comments' => $comments,
            'posts' => $posts
        ]);
    }
    public function update(CommentRequest $request, $id) 
    {
        $comment = $this->commentService->update($request->all(), $id);
        if ($comment) {
            return redirect()->route('admin.comments.index')->with('success', 'Cập nhật thành công!!!');
        }
        return back()->with('error', 'Cập nhật thất bại!!!');
    }
    public function delete($id)
    {
        $comment = $this->commentService->delete($id);
        if ($comment) {
            return redirect()->route('admin.comments.index')->with('success', 'Xoá thành công!!!');
        }
        return back()->with('error', 'Xoá thất bại!!!');
    }
}
