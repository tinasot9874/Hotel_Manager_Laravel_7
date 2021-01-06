<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'icon',
        'description',
    ];
}
