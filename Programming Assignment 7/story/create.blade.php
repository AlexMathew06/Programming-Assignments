<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfWWEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
	crossorigin="anonymous"> 
</head>
<body> 
	
 <form role="form" method="POST" action="{{ url('/story/store') }}">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Title:</label>
	<input type="text"  name='title' value="{{ old('country')}}"/>
	</br>
	<label>Story:</label>
	<input type="text" name='story' value="{{ old('city') }}"/>
	</br>
	<label>Published:</label>
	<input type="checkbox" name="published" value="published">Published</input>
	</br>
	<label>Locations:</label>
	<select name="location_id">
		@foreach($locations as $location)
			<option value = "{{ $location->id}}">{{$location->value}}</option>
		@endforeach
	</select>
	<button type="submit" class="btn btn-success btn-block" value='Submit'>Submit</button>
 
 </form> 

 <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.js"
 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
 crossorigin = "anonymous"></script> 
 </body>
 </html>