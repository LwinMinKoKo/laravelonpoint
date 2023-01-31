<!DOCTYPE html>
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
</html>	