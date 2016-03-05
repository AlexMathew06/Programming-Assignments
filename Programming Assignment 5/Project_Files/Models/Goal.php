<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goals';
	
	protected $fillable = [
			'goalId'
            ,'goalName'
            ,'goalImpact'
            ,'goalProgress'
            ,'goalDescritption'
            ,'goalLength'
	];
}
