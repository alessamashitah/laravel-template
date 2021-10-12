<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Component extends Model
{
    use HasFactory, SoftDeletes;

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
