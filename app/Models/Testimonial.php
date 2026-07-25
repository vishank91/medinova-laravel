<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'message',
        'pic',
        'profession',
        'status',
    ];

    function pic()
    {
        return Storage::url($this->pic);
    }
}
