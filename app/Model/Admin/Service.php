<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'slug',
        'feature_image',
        'hotline',
        'excerpt',
        'description',
        'type',
        'status',
        'start_time',
        'end_time'
    ];
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
