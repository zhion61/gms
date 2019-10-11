@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/teachers/store">
		  <div class="form-group">
		    <label for="id">Id</label>
		    <input type="id" class="form-control" name='id'  placeholder="id">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		  	<label for ="advisory section">Advisory section</label>
		  	<input type="text" class ="form-control" name="Advisory section" placeholder="Advisory_section">
		  </div>
		</form>
	</div>
@endsection