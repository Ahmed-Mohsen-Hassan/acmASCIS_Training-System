<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">



<h1>Edit {{ $profile->name }}</h1>

{{ Form::model($profile, array('route' => array('profiles.update', $profile->id), 'method' => 'PUT')) }}

	  <div class="form-group" 'style= top:0%; right:1000%; width:300px;'>
		{{ Form::image('photo',Input::old('photo'), array('class' => 'form-control')) }}
	</div>

    <div class="form-group">
		{{ Form::label('real_name', 'Real Name') }}
		{{ Form::text('real_name', Input::old('real_name'), array('class' => 'form-control')) }}
		@if ($errors->has('real_name')) <p class="help-block">{{ $errors->first('real_name') }}</p> @endif
	</div>
	
	<div class="form-group">
		{{ Form::label('country', 'Country') }}
		{{ Form::select('country', array('0' => 'Select a Country', '1' => 'Egypt', '2' => 'France', '3' => 'Italy'), Input::old('country'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('uva_id', 'Uva') }}
		{{ Form::text('uva_id', Input::old('uva_id'), array('class' => 'form-control')) }}
		@if ($errors->has('uva_id')) <p class="help-block">{{ $errors->first('uva_id') }}</p> @endif
	</div>

	<div class="form-group">
		{{ Form::label('livearchive_id', 'LiveArchive') }}
		{{ Form::text('livearchive_id', Input::old('livearchive_id'), array('class' => 'form-control')) }}
		@if ($errors->has('livearchive_id')) <p class="help-block">{{ $errors->first('livearchive_id') }}</p> @endif
	</div>

	<div class="form-group">
		{{ Form::label('spoj_username', 'Spoj') }}
		{{ Form::text('spoj_username', Input::old('spoj_username'), array('class' => 'form-control')) }}
		@if ($errors->has('spoj_username')) <p class="help-block">{{ $errors->first('spoj_username') }}</p> @endif
	</div>

	<div class="form-group">
		{{ Form::label('codeforces_username', 'CodeForces') }}
		{{ Form::text('codeforces_username', Input::old('codeforces_username'), array('class' => 'form-control')) }}
		@if ($errors->has('codeforces_username')) <p class="help-block">{{ $errors->first('codeforces_username') }}</p> @endif
	</div>

	<div class="form-group">
		{{ Form::label('topcoder_username', 'Topcoder') }}
		{{ Form::text('topcoder_username', Input::old('topcoder_username'), array('class' => 'form-control')) }}
		@if ($errors->has('topcoder_username')) <p class="help-block">{{ $errors->first('topcoder_username') }}</p> @endif
	</div>

	{{ Form::submit('Edit !!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>