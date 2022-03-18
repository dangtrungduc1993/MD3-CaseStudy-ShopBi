<?php
namespace App\Services;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class UserService {

    public $user

    public function login($request){
        $data = $request->only('email','password');
        if(Auth::attempt($data))
    }
    public function register($request){

    }
}




