<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialProperty extends Model
{
    use HasFactory;

    function material()
    {
        return $this->belongsTo(Material::class);
    }

    function property()
    {
        return $this->belongsTo(Property::class);
    }
}
