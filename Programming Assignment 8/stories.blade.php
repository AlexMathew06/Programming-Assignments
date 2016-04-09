@extends('page')

@section('content')

<html>
	<body>
		@foreach ($stories as $story)
		<p> TITLE: {{ $story->title }} STORY: {{ $story->story }} PUBLISHED: {{ $story->published }}</p>
		<ol>
			<p>Tags :<p>
			{{$story->value}}
		</ol>
		@endforeach
	</body>
</html>

@endsection