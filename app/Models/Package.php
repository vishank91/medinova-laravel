<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    function pic()
    {
       return Storage::url($this->pic);
    }
}
