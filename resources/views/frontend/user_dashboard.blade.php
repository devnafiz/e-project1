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
	   		<table class="table table-bordered">
	   			<tbody>
	   				<tr>
	   					<td>Name</td>
	   					<td>{{$user->name ?? 'N/A'}}</td>
	   				</tr>
	   				<tr>
	   					<td>Email</td>
	   					<td>{{$user->email ?? 'N/A'}}</td>
	   				</tr>
	   			</tbody>
	   		</table>
	   		
	   	</div>
   </div>


@endsection