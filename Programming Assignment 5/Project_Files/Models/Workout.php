<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workouts';
	
	protected $fillable = ['workoutId' 
             ,'workoutName' 
             ,'workoutImpact' 
             ,'workoutDescription' 
             ,'workoutFacility' 
             ,'set' 
             ,'number' 
             ,'type' 
             ,'duration'  
	];
}
