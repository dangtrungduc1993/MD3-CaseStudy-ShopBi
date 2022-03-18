<?php

namespace App\Repositories;

use App\Models\Type;
use http\Env\Request;

class TypeRepository extends BaseRepository
{
//    public $table = 'types';
    public function getTable()
    {
        return 'types';
    }

    public function store($request)
    {
        $type = new Type();
        $type->name = $request->name;
        // $type->description = $request->name;
        // $type->parent_id = $request->parent_id;
        $type->save();

    }

    public function update($request,$id)
    {
        $type = Type::find($id);

        $type->name = $request->name;
        // $type->description = $request->name;
        // $type->parent_id = $request->parent_id;
        $type->save();
    }

}
