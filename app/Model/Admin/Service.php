<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'hotline',
        'is_service',
        'start_time',
        'end_time'
    ];
}
