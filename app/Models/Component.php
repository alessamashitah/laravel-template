<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function Users()
    {
        return $this->belongsToMany(User::class,'component_user');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'component_product');
    }

    
}
