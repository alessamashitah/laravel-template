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

    public function Suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
    
}
