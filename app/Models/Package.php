<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'basePrice',
        'finalPrice',
        'discount',
        'shortDescription',
        'description',
        'status',
        'pic'
    ];
}
