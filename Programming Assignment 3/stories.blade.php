<html>
	<body>
		@foreach ($stories as $story)
		<p> TITLE: {{ $story->title }} STORY: {{ $story->story }} PUBLISHED: {{ $story->published }}</p>
		@endforeach
	</body>
</html>
