<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'gender', 'address', 'phone_number', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = false;

    /**
     * User has many House
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
     public function house()
     {
         return $this-> hasMany('App\Models\House', 'user_id');
     }
}
