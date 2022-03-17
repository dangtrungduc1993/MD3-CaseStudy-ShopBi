<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use App\Models\Shop;
use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public $shopRepository;
    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;


    }
    public function index()
    {
        $shops = $this->shopRepository->getAll();
        return view('backend.shop.list', compact('shops'));
    }
    public function create()
    {
        return view('backend.shop.create');
    }

    public function store(ShopRequest $request)
    {
        $this->shopRepository->store($request);
        return redirect()->route('shop.index');
    }
    public function show($id)
    {
        $shop = $this->shopRepository->getById($id);
        return view('backend.shop.detail', compact('shop'));

    }
    public function edit($id)
    {
        $shop = $this->shopRepository->getById($id);
        return view('backend.shop.update', compact('shop','id'));

    }

    public function update(ShopRequest $request, $id)
    {
        $this->shopRepository->update($request,$id);
        return redirect(route('shop.index'));


    }

    public function destroy($id)
    {
        $this->shopRepository->deleteById($id);
        return redirect(route('shop.index'));

    }

    // public function getshopOfParent($id){
    //     $shops = shop::where('parent_id',$id)->get();
    //     return response()->json($shops);
    // }
}
