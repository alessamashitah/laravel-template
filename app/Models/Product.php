<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'uuid',
        'name',
        'image',
        'qty',
    ];

    public function components()
    {
        return $this->belongsToMany(Component::class,'component_product');
    }

  

    
    
}
