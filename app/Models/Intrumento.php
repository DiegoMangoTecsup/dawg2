<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intrumento extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(Users::class);
    }
    public function Venta()
    {
        return $this->hasMany(Venta::class);  
    }
}
