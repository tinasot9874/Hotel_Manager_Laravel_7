<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable =
        [
            'name'
        ];
    public function service(){
        return $this->hasMany(Service::class);
    }
}
