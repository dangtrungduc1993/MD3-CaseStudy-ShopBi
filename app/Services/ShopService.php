<?php
namespace App\Services;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ShopRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ShopService {

    public $shopRepository;
    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function login($request){
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            return true;
        }else{
            return false;
        }
    }
    public function register($request){
        $data = $request->only('name','email','password','role_id');
        $data['password']=Hash::make($data['password']);
        DB::table($this->shopRepository->getTable())->insert($data);
    }
}




