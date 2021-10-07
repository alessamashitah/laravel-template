<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'component_name_id',
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

    public function componentName()
    {
        return $this->belongsTo(Component_name::class, 'component_name_id');
    }
    
}
