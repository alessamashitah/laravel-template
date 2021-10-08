<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'image',
        'qty',
    ];

    public function components()
    {
        return $this->belongsToMany(Component::class,'component_product');
    }

    
    
}
