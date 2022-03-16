<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    public function oderdetail()
    {
        return $this->hasMany(OderDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
