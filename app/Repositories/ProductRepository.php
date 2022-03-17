<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository {

    public function getTable()
    {
        return 'products';
    }
    public function store($request){
        $data = $request->only('name','description','price','quantity','type_id','shop_id');
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
        $data = $request->only('name','description','price','quantity','shop_id','type_id');
        DB::table($this->table)->where('id',$id)->update($data);
    }
    public function getAll()
    {
        return DB::table($this->table)
        ->join('shops','products.shop_id','=','shops.id')
        ->join('types','products.type_id','=','types.id')
        ->select('products.*','shops.id as shopid','shops.name as shopname','types.id as typeid','types.name as typename')
        ->get();

    }
    public function getById($id)
    {
        return DB::table($this->table)
        ->join('shops','products.shop_id','=','shops.id')
        ->join('types','products.type_id','=','types.id')
        ->select('products.*','shops.id as shopid','shops.name as shopname','types.id as typeid','types.name as typename')
        ->where('products.id',$id)
        ->first();
    }
}

