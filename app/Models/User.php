<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'first_name', 'first_name','username', 'pnone_no',  'email', 'password', 'division_id', 'district_id', 'street_address', 'ip_address','stutus'
        'first_name', 'last_name', 'username', 'phone_no', 'division_id', 'district_id', 'street_address', 'ip_address', 'remember_token', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
