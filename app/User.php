<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Encryptable;

class User extends Authenticatable
{
    use Encryptable;

    protected $encryptable = [
        'blood_type',
        'medical_conditions',
        'allergies',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'blood_type',
        'medical_conditions',
        'allergies'
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
