@extends('frontend.master_layout')


@section('content')
   <div class=" row">
	   	<div class="col-lg-4">
	   		 <div class="card">
	   		 	<div class="card-header">
	   		 		<h3>Menu</h3>

	   		 	</div>
	   		 	<div class="card-body">
	   		 		<ul>
	   		 			<li><a href="{{route('user.profile')}}">Profile</a></li>
	   		 			<li><a href="{{route('list.index')}}">Task</a></li>
	   		 		</ul>
	   		 		
	   		 	</div>
	   		 </div>	
	   		
	   	</div>
	   	<div class="col-lg-8">
	   		<a href="#" class="pull-right btn btn-primary pt-2 mx-3">list Task</a>
	   		<form  action="{{route('list.store')}}" method="POST">
	   			@csrf
	   			
	   			<div class="form-group">
	   				<label for="name">Task Name</label>
	   				<input type="text" name="name" required class="form-control">
	   				
	   			</div>
	   			<div class="form-group">
	   				<label for="name">Task description</label>
	   				<textarea name="description" class="form-control"></textarea>
	   				<p>Max 200 </p>
	   				
	   			</div>

	   			<button type="submit" class="btn btn-info">submit</button>

	   			
	   		</form>
	   		
	   		
	   	</div>
   </div>


@endsection