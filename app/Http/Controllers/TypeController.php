<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;


class TypeController extends Controller
{
    public $typeRepository;
    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;


    }
    public function index()
    {
        $types = $this->typeRepository->getAll();
        return view('backend.type.list', compact('types'));
    }
    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.type.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->typeRepository->store($request);
        return redirect()->route('type.index');
    }
    public function show($id)
    {
        $type = $this->typeRepository->getById($id);
//        dd($type);
        return view('backend.type.detail', compact('type'));

    }
    public function edit($id)
    {
        $type = $this->typeRepository->getById($id);
        return view('backend.type.update', compact('type','id'));

    }

    public function update(Request $request, $id)
    {
        $this->typeRepository->update($request,$id);
        return redirect(route('type.index'));


    }

    public function destroy($id)
    {
        $this->typeRepository->deleteById($id);
        return redirect(route('type.index'));

    }

    public function getTypeOfParent($id){
        $types = Type::where('parent_id',$id)->get();
        return response()->json($types);
    }
}
