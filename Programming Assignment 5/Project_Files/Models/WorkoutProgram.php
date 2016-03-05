<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutProgram extends Model
{
    protected $table = 'workout_programs';
	
	protected $fillable = ['WPName'
            ,'WPImpact'
            ,'WPDescritption'
            ,'workoutId'
            ,'workoutTime'
            ,'gymId'
            ,'planId'
            ,'planId'
            ,'gymId'
            ,'workoutId'
            ,'planId'
	];
}
