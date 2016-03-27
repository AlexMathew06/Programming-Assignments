<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
     protected $table = 'stories';

     protected $fillable = ['id', 'title', 'story', 'published', 'location_id'];

	 public function tags()
    {
        return $this->hasMany('App\StoryTag');
    }
	 
}
