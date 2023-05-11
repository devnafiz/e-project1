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
	   		<a href="{{route('list.index')}}" class="pull-right btn btn-primary pt-2 mx-3">List Task</a>
	   		<table class="table">
	   			<thead>
	   				<tr>
	   					<th>Task Id</th>
	   					<th>Task Name</th>
	   					<th>Description</th>
	   					<th>Status</th>
	   					<th>Create Date</th>
	   				</tr>
	   			</thead>
	   			<tbody>
	   				
	   				<tr>
	   					<td>{{$list->id}}</td>
	   					<td>{{$list->name}}</td>
	   					<td>{{$list->description}}</td>
	   					<td>{{($list->status==1)? 'Active': 'Inactive'}}</td>
	   					<td>
	   						{{$list->created_at}}
	   					</td>
	   				</tr>
	   				

	   			</tbody>

	   		 	
	   		

	   		</table>
	   		
	   		 
	   		
	   	</div>
   </div>


@endsection