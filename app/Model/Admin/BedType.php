<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class BedType extends Model
{
    protected $fillable = [
        'name','slug'
    ];

    public function room(){
        return $this->hasMany(Room::class);
    }
}
