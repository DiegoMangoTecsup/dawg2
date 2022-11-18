<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function Intrumento()
    {
        return $this->belongsTo(Intrumento::class);
    }
    public function Users()
    {
        return $this->belongsTo(Users::class);
    }
}
