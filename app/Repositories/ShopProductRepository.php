<?php

namespace App\Repositories;

use App\Models\ShopProduct;
use Illuminate\Support\Facades\DB;

class ShopProductRepository extends BaseRepository {

    public function getTable()
    {
        return 'shop_products';
    }
    public function store($request){
        $data = $request->only('name','description','price','quantity','type_id');
        $fileName = time().'_'.$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images',$fileName,'public');
        $data['image'] = $path;
        DB::table($this->table)->insert($data);
    }
    public function update($request,$id){
        // if($request->hasFile('img')){
        //     $fileName = time().'_'.$request->file('img')->getClientOriginalName();
        //     $path = $request->file('img')->storeAs('images',$fileName,'public');
        // }
        // $data = $request->only('name','description','price','quantity','shop_id','type_id');
        $data = $request->only('name','description','price','quantity','type_id');
        $fileName = time().'_'.$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images',$fileName,'public');
        $data['image'] = $path;
        DB::table($this->table)->where('id',$id)->update($data);
    }
    public function getAll()
    {
        return DB::table($this->table)
        // ->join('shops','shopProducts.shop_id','=','shops.id')
        ->join('types','shop_products.type_id','=','types.id')
        ->select('shop_products.*','types.id as typeid','types.name as typename')
        ->get();

    }
    public function getById($id)
    {
        return DB::table($this->table)
        // ->join('shops','shopProducts.shop_id','=','shops.id')
        ->join('types','shop_products.type_id','=','types.id')
        ->select('shop_products.*','types.id as typeid','types.name as typename')
        ->where('shop_products.id',$id)
        ->first();
    }
    // public function getByTypeId($type_id)
    // {
    //     return DB::table($this->table)
    //     // ->join('shops','shopProducts.shop_id','=','shops.id')
    //     ->join('types','shopProducts.type_id','=','types.id')
    //     ->select('shopProducts.*','types.id as typeid','types.name as typename')
    //     ->where('shopProducts.type_id',$type_id)
    //     ->first();
    // }

    public function getByTypeId($type_id)
    {
        return DB::table($this->table)->where('type_id',$type_id)->get();
    }
}

