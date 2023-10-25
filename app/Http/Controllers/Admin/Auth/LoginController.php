<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $this->credentials($request);

        if (Auth::attempt($credentials)) { // auth()->attempt()
            return redirect()->route('admin.index');
        }
        return redirect()->route('admin.login')->with('error', 'Thông tin đăng nhập hoặc mật khẩu khôgn đúng!!!');
    }
    
    public function credentials($request) 
    {
        $username = $request->get('username');
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return [
                'email' => $username,
                'password' => $request->get('password'),
            ];
        }
        return $request->only([
            'username', 'password'
        ]);
    }
    public function logout() 
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
