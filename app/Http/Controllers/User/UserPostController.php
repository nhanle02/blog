<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index($id)
    {
        return view('user.post.index', []);
    }
}
