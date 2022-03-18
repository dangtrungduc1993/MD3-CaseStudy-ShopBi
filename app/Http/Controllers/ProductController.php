<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductsRequest;
use App\Repositories\ProductRepository;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class ProductController extends Controller
{
    //
    public $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;

    }

    public function index()
    {
        $products = $this->productRepository->getAll();
       return view('backend.product.list',compact('products'));
    }


    public function create()

    {
        // $products = $this->productRepository->getAll();
        // $types = Type::where('parent_id',0)->get();
        $types = Type::all();

        return view('backend.product.create',compact('types'));
    }




    public function store(ProductRequest $request)
    {
        // dd($request);
         $this->productRepository->store($request);
        return redirect()->route('product.list');

    }


    public function show($id)
    {
        $products = $this->productRepository->getById($id);
        return view('backend.product.detail',compact('products'));
    }
    public function showByTypeId($type_id)
    {
        $products = $this->productRepository->getByTypeId($type_id);
        // dd($products);
        return view('backend.product.typedetail',compact('products'));
    }

    public function edit($id)
    {
        $product = $this->productRepository->getById($id);
        $products = $this->productRepository->getAll();
        // dd($products);
        return view('backend.product.update',compact('products','product'));
    }


    public function update(ProductRequest $request, $id)
    {
        $this->productRepository->update($request,$id);
        return redirect()->route('product.list');
    }


    public function destroy($id)
    {
        $this->productRepository->deleteById($id);
        return redirect()->route('product.list');
    }
}
