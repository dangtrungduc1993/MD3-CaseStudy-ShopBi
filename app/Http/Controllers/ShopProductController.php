<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\ShopProductRequest;
use App\Http\Requests\ShopProductsRequest;
use App\Repositories\ShopProductRepository;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class ShopProductController extends Controller
{
    //
    public $shopProductRepository;
    public function __construct(ShopProductRepository $shopProductRepository)
    {
        $this->shopProductRepository = $shopProductRepository;

    }

    public function index()
    {
        $shopProducts = $this->shopProductRepository->getAll();

       return view('backend.shopProduct.list',compact('shopProducts'));
    }
    public function auth()
    {
        return view('front.user');
    }
    public function indexAuth()
    {
        $shopProducts = $this->shopProductRepository->getAll();
        return view('backend.shopProduct.listAuth', compact('shopProducts'));
    }


    public function create()

    {
        // $shopProducts = $this->shopProductRepository->getAll();
        // $types = Type::where('parent_id',0)->get();
        $types = Type::all();

        return view('backend.shopProduct.create',compact('types'));
    }




    public function store(ShopProductRequest $request)
    {
        // dd($request);
         $this->shopProductRepository->store($request);
        return redirect()->route('shopProduct.listauth');

    }


    public function show($id)
    {
        $shopProducts = $this->shopProductRepository->getById($id);
        return view('backend.shopProduct.detail',compact('shopProducts'));
    }
    public function showByTypeId($type_id)
    {
        $shopProducts = $this->shopProductRepository->getByTypeId($type_id);
        // dd($shopProducts);
        return view('backend.shopProduct.typedetail',compact('shopProducts'));
    }

    public function edit($id)
    {
        $shopProduct = $this->shopProductRepository->getById($id);
        $shopProducts = $this->shopProductRepository->getAll();
        // dd($shopProducts);
        return view('backend.shopProduct.update',compact('shopProducts','shopProduct'));
    }


    public function update(ShopProductRequest $request, $id)
    {
        $this->shopProductRepository->update($request,$id);
        return redirect()->route('shopProduct.listauth');
    }


    public function destroy($id)
    {
        $this->shopProductRepository->deleteById($id);
        return redirect()->route('shopProduct.listauth');
    }
}
