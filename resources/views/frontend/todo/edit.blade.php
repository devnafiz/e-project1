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
	   		<a href="{{route('list.index')}}" class="pull-right btn btn-primary pt-2 mx-3">list Task</a>
	   		<form  action="{{route('list.update',$edit_data->id)}}" method="POST">
	   			@csrf
	   			@method('PUT')
	   			
	   			<div class="form-group">
	   				<label for="name">Task Name</label>
	   				<input type="text" name="name" required class="form-control" value="{{$edit_data->name}}">
	   				
	   			</div>
	   			<div class="form-group">
	   				<label for="name">Task description</label>
	   				<textarea name="description" class="form-control">{{$edit_data->description}}</textarea>
	   				<p>Max 200 </p>
	   				
	   			</div>

	   			<button type="submit" class="btn btn-info">submit</button>

	   			
	   		</form>
	   		
	   		
	   	</div>
   </div>


@endsection