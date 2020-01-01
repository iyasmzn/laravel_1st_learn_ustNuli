@extends('admin.layouts.app')

@section('content')

<div class="box">
  <div class="box-body">
	  <form role="form" action="{{url('/user/store')}}" method="post">
		@csrf
		<div class="box-body">
			<label for="name">User Name</label>
		  <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-tag"></i></span>
			<input type="name" class="form-control" id="name" name="name" placeholder="Enter your name here...">
		  </div>
		</div>
		<div class="box-body">
		  <label for="email">Email</label>
		  <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here...">
		  </div>
		</div>
		<div class="box-body">
		  <label for="password">Password</label>
		  <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
			<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password here...">
		  </div>
		</div>
		<a class="btn btn-warning" href="{{url('/category')}}"><i class="fa fa-arrow-left"></i> Back</a>
		<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>      
	  </form>
  </div>
	  <!-- /.box-body -->
  <div class="box-footer">
	Footer
  </div>

@endsection