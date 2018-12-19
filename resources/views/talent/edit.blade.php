@extends('layout')


@section('content')



	<h1> Edit Talent </h1>

	<form method="POST" action="http://127.0.0.1:8080/laravelrecruitment/talent/{{$talent->id}} ">

		@csrf
		@method('PATCH')
		
		<div class="row">
		    <div class="col">
		      <input type="text" class="form-control" name="firstname" placeholder="First name" value="{{ $talent->firstname }}">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" name="lastname"  placeholder="Last name" value="{{ $talent->lastname }}">
		    </div>
		 </div>
		
		<div class="form-group">
		    <label for="skill">Skill</label>
		    <input type="text" class="form-control" name="skill" id="skill" placeholder="Skill" value="{{ $talent->skill }}">
		 </div>

		 <div class="form-group">
		    <label for="location">Location</label>
		    <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="{{ $talent->location }} ">
		 </div>


		<div class="form-group text-center">
			<button type="submit" name="submit" class="btn btn-primary">Update Talent</button>
		</div>
	</form>


		
	<form method="POST" action="http://127.0.0.1:8080/laravelrecruitment/talent/{{$talent->id}}">

		@method('DELETE')
		@csrf

		<div class="form-group text-center">
			<button type="submit" class="btn btn-danger">Delete Talent</button>
		</div>

	</form>
	
@endsection