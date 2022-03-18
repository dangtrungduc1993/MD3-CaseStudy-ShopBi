<?php

namespace App\Repositories;

use App\Models\Role;
use http\Env\Request;

class RoleRepository extends BaseRepository
{
//    public $table = 'roles';
    public function getTable()
    {
        return 'roles';
    }

    public function store($request)
    {
        $role = new role();
        $role->name = $request->name;
        // $role->description = $request->name;
        // $role->parent_id = $request->parent_id;
        $role->save();

    }

    public function update($request,$id)
    {
        $role = role::find($id);

        $role->name = $request->name;
        // $role->description = $request->name;
        // $role->parent_id = $request->parent_id;
        $role->save();
    }

}
