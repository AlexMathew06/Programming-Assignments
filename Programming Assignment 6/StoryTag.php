<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryTag extends Model
{
    protected $table = 'story_tag';

     protected $fillable = ['id', 'story_id', 'tag_id'];

}
