<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = ['id','value'];
	
	public function stories()
    {
        return $this->hasMany('App\Story');
    }
}
