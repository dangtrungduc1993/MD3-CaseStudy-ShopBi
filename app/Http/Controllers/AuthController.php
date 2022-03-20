<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }
    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function login(LoginRequest $request)
    {
        if ($this->userService->login($request)) {
            return redirect()->route('product.homeauth');
        } else {
            Session::flash('msg', 'Tai khoan, mat khau khong dung');
            return redirect()->back();
        }
    }
    public function register(RegisterRequest $request)
    {
        $this->userService->register($request);
        return redirect()->route('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');

    }
}
