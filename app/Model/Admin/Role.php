<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    public function admin(){
        return $this->hasMany(User::class);
    }
}
