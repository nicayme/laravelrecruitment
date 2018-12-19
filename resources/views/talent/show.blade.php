@extends('layout')


@section('content')

	<h1 class="mt-4">{{ $talent->lastname .', '. $talent->firstname }}</h1> 
	<p>Skill: {{$talent->skill }}</p> 
	<p>Location: {{$talent->location }}</p>

	<div class="col-12 text-center">
		<a href="http://127.0.0.1:8080/laravelrecruitment/talent/{{$talent->id }}/edit" class="btn btn-primary">Edit</a>
	</div>
	

	
@endsection