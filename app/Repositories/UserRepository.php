<?php

namespace App\Repositories;

use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
//    public $table = 'users';
    public function getTable()
    {
        return 'users';
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 3;
        $user->password = Hash::make($request->password);
        $user->save();

    }

    public function update($request,$id)
    {
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


    }

}
