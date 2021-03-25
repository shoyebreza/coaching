@extends('master')
@section('content')




<div class="container mt-5 pt-5">
	<div class="text-center">
		<h1 class="display-4">Contact Us</h1>
	</div>
	<div class="wrapper">


		<div class="container col-md-8 col-sm-12">
			<div class="card m-5 p-5">
			<form method="POST" enctype="multipart/formdata" action="{{url('')}}">
			@csrf

			<div class="form-group">
			    <label for="name">name:</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="full name" required>
			  </div>

			<div class="form-group">
			    <label for="phone">Mobile Number:</label>
			    <input type="Number" class="form-control" id="phone" name="phone" placeholder="your mobile number" required>
			  </div>

			  <div class="form-group">
			    <label for="email">Your email:</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="input your valid email" required>
			  </div>

			<div class="form-group">
			    <label for="text">Your message:</label>
			   <textarea class="form-control" id="message" name="message" placeholder="write your message here"></textarea>
			  </div>
			  

			  <button type="submit" class="btn btn-primary">Submit</button>

		</form>
		 </div>
	  </div>
	</div>
	
</div>




@endsection