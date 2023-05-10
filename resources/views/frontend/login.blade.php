@extends('frontend.master_layout')


@section('content')
   <div class=" row">

      <div class="col-lg-8 col-md-8 offset-lg-2">
      	<div class=" card">
      		<div class="card-header">
      			<h3>login</h3>
      			
      		</div>
      		<div class="card-body">
      			<form action="#"  method="POST">
      				@csrf
      				<div class="form-group">
      					<lavel for="email">Email here</lavel>
      					<input class="form-control" type="email" name="email">
      					
      				</div>
      				<div class="form-group">
      					<lavel for="password">Enter Password</lavel>
      					<input class="form-control" type="password" name="password">
      					
      				</div>
      				<button type="submit" class="btn btn-primary">Login</button>

      				
      			</form>
      			
      		</div>
      		

      	</div>
      	
      </div>
    
   </div>


@endsection