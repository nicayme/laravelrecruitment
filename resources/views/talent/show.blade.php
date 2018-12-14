@extends('layout')


@section('content')

	<h1>{{ $talent->lastname .', '. $talent->firstname }}</h1> 
	<p>Skill: {{$talent->skill }}</p> 
	<p>Location: {{$talent->location }}</p>

	
@endsection