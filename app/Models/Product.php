<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function oder()
    {
        return $this->belongsToMany(Oder::class);
    }
    public function oderdetail()
    {
        return $this->hasMany(OderDetail::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
