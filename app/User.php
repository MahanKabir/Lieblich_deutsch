<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function activationCode(){
        return $this->hasMany(ActivationCode::class);
    }

    public function isAdmin(){
        return $this->level == 'admin'? true:false;
    }
}
