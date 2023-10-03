<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService) 
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->getUsersPaginate();
        $roles = config('const.users.roles');
        $status = config('const.users.status');
        return view('admin.users.index', [
            'users' => $users,
            'roles' => $roles,
            'status' => $status,
        ]);
    }

    public function create() {
        $genders = config('const.users.genders');
        $roles = config('const.users.roles');
        return view('admin.users.create', [
            'genders' => $genders,
            'roles' => $roles,
        ]);
    }

    public function store(UserRequest $request) 
    {
        $user = $this->userService->store($request->all());
        if ($user) {
            $this->userService->uploadFile($request);
            return redirect()->route('admin.users.index')->with('success', 'Đã tạo thành công một người dùng');
        } 
        return back()->with('error', 'Tạo người dùng thất bại');
    }

    public function edit($id) 
    {
        $genders = config('const.users.genders');
        $roles = config('const.users.roles');
        $user = $this->userService->getUser($id);
        dd($user);
        return view('admin.users.edit', [
            'genders' => $genders,
            'roles' => $roles,
            'user' => $user,
        ]);
    }

    public function delete($id) 
    {
        $this->userService->delete($id);
        return back()->with('success', 'Delete record successfully!!');
    }

    public function update($id) 
    {

    }
}
