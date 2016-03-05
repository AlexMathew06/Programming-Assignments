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
    protected $fillable = ['userId' 
            ,'username' 
            ,'firstName' 
            ,'lastName' 
            ,'contactNumber' 
            ,'isTrainer' 
            ,'trainerId' 
            ,'gymId'
            ,'address' 
            ,'money' 
            ,'DOB' 
            ,'email'
            ,'password'
            ,'gymId' 
		
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
