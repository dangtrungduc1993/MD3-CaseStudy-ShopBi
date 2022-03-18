<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;


    }
    public function index()
    {
        $users = $this->userRepository->getAll();
        return view('backend.user.list', compact('users'));
    }
    public function create()
    {
        return view('backend.user.create');
    }

    public function store(UserRequest $request)
    {
        $this->userRepository->store($request);
        return redirect()->route('user.index');
    }
    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view('backend.user.detail', compact('user'));

    }
    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('backend.user.update', compact('user','id'));

    }

    public function update(UserRequest $request, $id)
    {
        $this->userRepository->update($request,$id);
        return redirect(route('user.index'));


    }

    public function destroy($id)
    {
        $this->userRepository->deleteById($id);
        return redirect(route('user.index'));

    }

    // public function getuserOfParent($id){
    //     $users = user::where('parent_id',$id)->get();
    //     return response()->json($users);
    // }
}
