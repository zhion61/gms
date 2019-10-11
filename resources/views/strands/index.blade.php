@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($strands as $strand)
					<tr>
						<td>{{ $strand->id }}</td>
						<td>{{ $strand->name }}</td>				
						<!--<td><a href="/strands/{{ $strand->id }}">View</a></td>
						<td><a href="/strands/{{ $strand->id }}/edit">Edit</a></td>-->
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/strands/add'>New Strand</a>
	</div>
@endsection