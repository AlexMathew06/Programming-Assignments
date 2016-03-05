<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietProgram extends Model
{
    protected $table = 'diet_programs';
	
	protected $fillable = [
			 'DPId'
            ,'DPName'
            ,'DPImpact'
            ,'DPDescritption'
            ,'DPSection'
            ,'DPLength'
            ,'DPCalMax'
            ,'DPCalAvg'
            ,'DPProteinAvg'
            ,'DPFiberAvg'
            ,'DPSugarMax'
            ,'DPFatMax'
	];
}
