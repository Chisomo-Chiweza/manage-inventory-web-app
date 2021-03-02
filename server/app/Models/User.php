<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';


    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'password',
        'admin',
    ];

    protected $hidden = [
        'password',
    ];

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getUserNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPasswordAttribute($value)
    {
        return ucfirst($value);
    }

    

    
    
}
