<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome!</h1>


	@foreach ($talent as $tal)
		<li>
			<a href="http://127.0.0.1:8080/laravelrecruitment/talent/{{ $tal->id }}">
			 	{{ $tal->lastname .', '. $tal->firstname }}
			</a>	
		</li>
	@endforeach

</body>
</html>