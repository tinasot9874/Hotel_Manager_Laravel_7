<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable =
        [
            'name',
            'discount',
            'status',
            'start_day',
            'end_day'
        ];
}
