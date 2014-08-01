

<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h1>All Users</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Real Name</td>
			<td>Level</td>
			<td>Country</td>
			<td>CodeForces</td>
			<td>Topcoder</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
	@foreach($profiles as $key => $value)
		<tr>
			<td>{{ $value->real_name}}</td>
			<td>{{ $value->level }}</td>
			<td>{{ $value->country }}</td>
			<td>{{ $value->codeforces_username }}</td>
			<td>{{ $value->topcoder_username }}</td>
			<td>
				<a class="btn btn-small btn-success" href="{{ URL::to('profiles/' . $value->id) }}">Show this Users</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>