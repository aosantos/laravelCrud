<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
   
    protected $fillable = [
        'name', 'email', 'password','remenber_token','ativo'
    ];
   
    protected $hidden = [
        'password', 'remember_token',
    ];
}
