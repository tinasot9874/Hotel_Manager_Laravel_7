<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'status',

    ];

    public function roomtype(){
        $this->belongsTo(RoomType::class);
    }
    public function bedtype(){
        $this->belongsTo(BedType::class);
    }
}
