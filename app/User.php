<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'group_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function path()
    {
        return '/users/' . $this->id;
    }

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function addUser(User $user)
    {
        return $this->user()->save($user);
    }

}
