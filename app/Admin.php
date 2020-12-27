<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    protected $fillable = [
        'role_id',
        'name',
        'phone',
        'address',
        'birthday',
        'gender',
        'identity_card',
        'day_issue',
        'issued_by',
        'bank_account_number',
        'bank' ,
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo(Role::class);
    }
}
