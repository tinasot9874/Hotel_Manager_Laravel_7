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
        'status_id',
        'slug',
        'description',
        'feature_image',
        'type',
        'hotline',
        'is_service',
        'start_time',
        'end_time'
    ];
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
