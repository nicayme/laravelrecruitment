@extends('layout')


@section('content')

	<h1>Add Talent </h1> 


	<form method="POST" action="http://127.0.0.1:8080/laravelrecruitment/talent">

		@csrf
		
		<div class="row">
		    <div class="col">
		      <input type="text" class="form-control" name="firstname" placeholder="First name">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" name="lastname"  placeholder="Last name">
		    </div>
		 </div>
		
		<div class="form-group">
		    <label for="inputAddress">Skill</label>
		    <input type="text" class="form-control" name="skill" id="inputAddress" placeholder="Skill">
		 </div>

		 <div class="form-group">
		    <label for="inputAddress">Location</label>
		    <input type="text" class="form-control" name="location" id="inputAddress" placeholder="Location">
		 </div>


		
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>

	</form>
	
@endsection