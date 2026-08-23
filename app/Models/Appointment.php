<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'time',
        'instagram',
        'doctorId',
        'status'
    ];

    function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }
}
