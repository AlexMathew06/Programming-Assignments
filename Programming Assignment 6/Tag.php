<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['id','value'];
	
	public function stories()
    { 
        return $this->belongsToMany('App\Story', 'story_tag', 'tag_id' , 'story_id');
    }
}
