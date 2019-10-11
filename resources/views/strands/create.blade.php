@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/strands/store">
		  <div class="form-group">
		    <label for="title">Id</label>
		    <input type="Id" class="form-control" name='id'  placeholder="Id">
		  </div>
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		</form>

	</div>
@endsection