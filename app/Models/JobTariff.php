<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTariff extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'grade';
    }
}
