@extends('layout')


@section('content')

<h1>Add Talent </h1> 


<form method="POST" action="http://127.0.0.1:8080/laravelrecruitment/talent" class="mt-4" enctype="multipart/form-data">

	@csrf

	<div class="row mb-3">
		<div class="col">
			<label for="firstname">First name</label>
			<input type="text" class="form-control" name="firstname" placeholder="First name" value="{{ old('firstname') }}">
		</div>
		<div class="col">
			<label for="lastname">Last name</label>
			<input type="text" class="form-control" name="lastname"  placeholder="Last name" value="{{ old('lastname') }}">
		</div>
	</div>

	<div class="form-group">
		<label for="skill">Skill</label>
		<input type="text" class="form-control" name="skill" id="skill" placeholder="Skill" value="{{ old('skill') }}">
	</div>

	<div class="form-group">
		<label for="location">Location</label>
		<input type="text" class="form-control" name="location" id="location" placeholder="Location" value="{{ old('location') }}">
	</div>

	<div class="form-group">
		<label for="profilepic">Image</label>
		<input type="text" class="form-control" name="profilepic" id="profilepic" >
	</div>


	<div class="col-12 text-center">
		<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
	</div>

</form>


@if ($errors->any())
<div class="alert alert-danger mt-4" role="alert">
	<ul>
		@foreach ($errors->all() as $error)

		<li> {{ $error }}</li>

		@endforeach
	</ul>
</div>
@endif

@endsection