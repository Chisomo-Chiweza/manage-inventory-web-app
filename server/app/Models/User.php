<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';


    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;
    
}
