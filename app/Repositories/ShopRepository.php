<?php

namespace App\Repositories;

use App\Models\Shop;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class ShopRepository extends BaseRepository
{
//    public $table = 'shops';
    public function getTable()
    {
        return 'shops';
    }

    public function store($request)
    {
        $shop = new Shop();
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->role_id = 2;
        $shop->password = Hash::make($request->password);
        $shop->save();

    }

    public function update($request,$id)
    {
        $shop = shop::find($id);
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->password = Hash::make($request->password);
        $shop->save();


    }

}
