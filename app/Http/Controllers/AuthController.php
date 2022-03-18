<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            return redirect()->route('index');
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
}
