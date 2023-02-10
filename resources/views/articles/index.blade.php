<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>INDEX</title>
</head>
<body>

	<h1>Article List</h1>
		
		@foreach($articles as $article)
		<ul>
			<li>
				{{ $article->id }} <i><b>Title : </b></i>
				{{ $article->title }} <br><b>Body Text :</b>
				{{$article->Body}}
			</li>
		</ul>
		@endforeach
		
	
		
	


</body>
</html>	