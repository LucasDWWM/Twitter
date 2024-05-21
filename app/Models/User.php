<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Les attributs qui doivent être cachés pour les tableaux
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
