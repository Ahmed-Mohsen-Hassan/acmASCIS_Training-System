

<!DOCTYPE html>
<html>
<head>
	<title>{{$profile->real_name}}</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">


<h1>{{ $profile->real_name }}</h1>

	<div class="jumbotron text-center">
		<p>
			<strong>Country:</strong> {{ $profile->country }}<br>
			<strong>Level:</strong> {{ $profile->level }}<br>
			<strong>Codeforces:</strong> {{ $profile->codeforces_username }}<br>
			<strong>Topcoder:</strong> {{ $profile->topcoder_username }}
		</p>
	</div>

</div>
</body>
</html>