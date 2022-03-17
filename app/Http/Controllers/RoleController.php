<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    public $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;


    }
    public function index()
    {
        $roles = $this->roleRepository->getAll();
        return view('backend.role.list', compact('roles'));
    }
    public function create()
    {
        // $categories = $this->categoryRepository->getAll();
        return view('backend.role.create');
    }

    public function store(RoleRequest $request)
    {
        $this->roleRepository->store($request);
        return redirect()->route('role.index');
    }
    public function show($id)
    {
        $role = $this->roleRepository->getById($id);
//        dd($role);
        return view('backend.role.detail', compact('role'));

    }
    public function edit($id)
    {
        $role = $this->roleRepository->getById($id);
        return view('backend.role.update', compact('role','id'));

    }

    public function update(RoleRequest $request, $id)
    {
        $this->roleRepository->update($request,$id);
        return redirect(route('role.index'));


    }

    public function destroy($id)
    {
        $this->roleRepository->deleteById($id);
        return redirect(route('role.index'));

    }

    // public function getroleOfParent($id){
    //     $roles = role::where('parent_id',$id)->get();
    //     return response()->json($roles);
    // }
}
