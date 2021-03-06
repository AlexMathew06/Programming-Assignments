<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $table = 'gyms';
	
	protected $fillable = [
			'gymId'
            ,'gymName'
            ,'gymAddress'
            ,'gymContact'
            ,'gymDescritption'
            ,'price'
	];
}
