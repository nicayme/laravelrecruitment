@extends('layout')


@section('content')




@if (session('createdtalent'))	
	<div class="alert alert-success" role="alert">
 	 {{ session('createdtalent') }}
	</div>
@endif
		
	
<a href="talent/create" class="btn btn-success mt-4"> Add Talent</a>

<table class="table table-striped mt-4 ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Skill</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 
  <tbody>
  	@foreach ($talent as $tal)
    <tr>
      <th scope="row">{{ $tal->id }}</th>
      <td>{{ $tal->firstname }}</td>
      <td>{{ $tal->lastname }}</td>
      <td>{{ $tal->skill }}</td>
      <td>{{ $tal->location }}</td>
      <td> <a href="talent/{{ $tal->id }}/" class="btn btn-primary"> SHOW </a></td>
    </tr>
     @endforeach
  </tbody>
 	
</table>
{{ $talent->links() }}




@endsection