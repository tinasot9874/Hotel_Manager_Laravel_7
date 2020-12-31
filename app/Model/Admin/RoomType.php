<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'common_price',
        'description',
        'feature_image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function room(){
        return $this->hasMany(Room::class);
    }
}
