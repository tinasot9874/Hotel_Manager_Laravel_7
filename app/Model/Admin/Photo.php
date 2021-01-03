<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'room_type_id',
        'image'
        ];


    public function roomtype(){
        return $this->belongsTo(RoomType::class);
    }
}
