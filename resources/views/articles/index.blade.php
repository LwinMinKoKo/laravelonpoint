<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDEX</title>
</head>
<body>
	<h1>INDEX PAGE</h1>
		<p>Welcom from INDEX Page</p>

		<h1> Article List </h1>
		<ul>
		@foreach ( $articles as $article)
		<li>{{ $article ['id'] }}</li>
		<li>{{ $article ['title'] }}</li>
		@endforeach
	</ul>
</body>
</html>	 -->

@extends("layout.app")
@section("content")
<div class="container">
@foreach($articles as $article)
<div class="card mb-2">
<div class="card-body">
<!-- <h5 class="card-title">{{ $article->title }}</h5> -->
<div class="card-subtitle mb-2 text-muted small">
{{ $article->created_at->diffForHumans() }}
</div>
<!-- <p class="card-text">{{ $article->body }}</p> -->
<a class="card-link"
href="{{ url("/articles/detail/$article->id") }}">
View Detail &raquo;
</a>
</div>
</div>
@endforeach
</div>
@endsection
