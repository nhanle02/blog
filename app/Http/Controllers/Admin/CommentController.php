<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;
    
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    public function index()
    {
        $comments = $this->commentService->getComments();
        $status = config('const.comments.status');
        return view('admin.comments.index', [
            'comments' => $comments,
            'status' => $status,
        ]);
    }

    public function create() {
        return view('admin.comments.create');
    }
}
