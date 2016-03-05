<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
	
	protected $fillable = [
	$table->increments('planId'
            ,'planName'
            ,'planImpact'
            ,'lastName'
            ,'planDescritption'
            ,'trainerId'
            ,'traineeId'
            ,'gymId'
            ,'DPId'
            ,'goalId'
            ,'price'
	];
}
