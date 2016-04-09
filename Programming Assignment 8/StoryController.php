<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;
use App\Location;
use Illuminate\Support\Facades\Input;
use DB;

class StoryController extends Controller
{
    public function index()
    {
		
		$stories = DB::table('stories')
            ->join('story_tag', 'stories.id', '=', 'story_tag.story_id')
            ->join('tags', 'story_tag.tag_id', '=', 'tags.id')
            ->select('stories.*', 'tags.*')
            ->get();
		
    	//$stories = Story::with('tags')->get();
    	return view('stories' , ['stories' => $stories]);
    }
	
	public function create() {
		$locations = Location::all();
		return view('story.create' , ['locations' => $locations]);	
	}
	
	public function store(Request $request) {
		$Story = new Story;
		$Story->title = $request->get('title');
		$Story->story = $request->get('story');
		$Story->published = $request->get('published');
		
		if (Input::get('published') === 'published') {
			$Story->published = 1;
		} else {
			$Story->published = 0;
		}
		
		$Story->location_id = $request->get('location_id');
		
		
		
		$Story->save();
		return redirect()->back();
	}
}
