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
	   		<a href="{{route('list.create')}}" class="pull-right btn btn-primary pt-2 mx-3">Add Task</a>
	   		<table class="table">
	   			<thead>
	   				<tr>
	   					<th>SL</th>
	   					<th>Task Name</th>
	   					<th>Description</th>
	   					<th>Status</th>
	   					<th>Action</th>
	   				</tr>
	   			</thead>
	   			<tbody>
	   				@foreach($todo_list as $k=>$list)
	   				<tr>
	   					<td>{{$k+1}}</td>
	   					<td>{{$list->name}}</td>
	   					<td>{{$list->description}}</td>
	   					<td>{{($list->status==1)? 'Active': 'Inactive'}}</td>
	   					<td>
	   						<a href="{{route('list.edit',$list->id)}}" class="btn btn-info" >Edit</a>
	   						<a href="{{route('list.delete',$list->id)}}" class="btn btn-danger" >Delete</a>
	   					</td>
	   				</tr>
	   				@endforeach

	   			</tbody>

	   		 	
	   		

	   		</table>
	   		<div class="pagination">
	   			 {{$todo_list->links()}}
	   			
	   		</div>
	   		 
	   		
	   	</div>
   </div>


@endsection