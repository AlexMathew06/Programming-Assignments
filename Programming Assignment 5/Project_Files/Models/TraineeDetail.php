<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraineeDetail extends Model
{
    protected $table = 'trainee_details';
	
	protected $fillable = [
			'traineeId'
            ,'gender'
            ,'disabilityDetail'
            ,'injuryDetail'
            ,'otherDetail'
            ,'hasPlan'
            ,'planId'
            ,'age'
            'BMD'
            ,'ChestMeasure'
            ,'WeistMeasure'
            ,'HipMeasure'
            ,'BodyFatPercent'
            ,'BodyMusclePercent'
            
	];
}
