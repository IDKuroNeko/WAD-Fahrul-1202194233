<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'no','size','order', 'material', 'hole_number', 'image','designer',
    ];
    

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
