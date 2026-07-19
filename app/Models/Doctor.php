<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'shortDescription',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'departmentId',
        'pic',
        'status',
    ];

    function pic()
    {
        return Storage::url($this->pic);
    }

    function department()
    {
        return $this->belongsTo(Department::class, 'departmentId');
    }
}
