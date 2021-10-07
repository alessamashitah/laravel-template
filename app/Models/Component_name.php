<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Component_name extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'component_name_id',
    ];

    public function components()
    {
        return $this->hasMany(Component::class);
    }
}
