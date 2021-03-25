@extends('master')
@section('content')

<div class="container mt-5 pt-5">
	<div class="text-center">
		<h1 class="display-4">Admission form</h1>
	</div>
	<div class="wrapper">


		<div class="container col-md-8 col-sm-12">
			<div class="card m-5 p-5">
			<form method="POST" enctype="multipart/formdata" action="{{url('')}}">
			@csrf

			<div class="form-outline">
			    <label for="phone" class="form-label">Mobile Number:</label>
			    <input type="Number" class="form-control" id="phone" name="phone" placeholder=" +880 1xxxx" required>
			  </div>

			  <div class="form-outline">
			    <label for="NID">Your NID number:</label>
			    <input type="Number" class="form-control" id="nid" name="nid" placeholder="your nid" required>
			  </div>


			  <div class="form-outline">
			    <label for="name">name:</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="full name" required>
			  </div>



			  <div class="form-outline">
			    <label for="fathername">Fathers name:</label>
			    <input type="text" class="form-control" id="father" name="father" placeholder="father name" required>
			  </div>

			  <div class="form-outline">
			    <label for="parent-phone">Parent phone:</label>
			    <input type="number" class="form-control" id="ppn" name="ppn" placeholder="father/Mother mobile" required>
			  </div>

			 <div class="form-outline">
			    <label for="dob">Date of birth:</label>
			    <input type="date" class="form-control" id="dob" name="dob" placeholder="Birth date" required>
			  </div>

			  <div class="form-outline">
			  	<label for="Division" class="form-label">division</label>
			     <select class="form-control" id="division" name="division">

                        <option selected>select your Division</option>
                        @foreach ( $divisions as $divi )
                        <option value="{{$divi->id}}">{{$divi->name}}</option>
                        @endforeach
			    </select>
			  </div>
              <br>

              <div class="form-outline">
              <select class="form-control" id="district" name="district">
                  <option selected>select your District</option>
                  <option value="2"> 2</option>
             </select>
            </div>

            <div class="form-outline">
                <label for="upazila">Upazila:       </label> <br>
              <select class="form-control" id="upazila" name="upazila">
                  <option selected>select your Upazila</option>
                  <option value="2"> 2</option>
             </select>
            </div>

			  <div class="form-outline">
			  	<label for="Branch">Branch name:</label><br>
			    <select class="form-control">
			    	<option selected>select your Branch</option>
			    	<option value="2"> 2</option>
			   </select>
			  </div>

			  <div class="form-outline">
			  	<label for="Batch">Batch name:</label><br>
			    <select class="form-control">
			    	<option selected>select your Batch</option>
			    	<option value="2"> 2</option>
			   </select>
			  </div>

			  <div class="form-outline">
			  	<label for="qualification">Last Qualification:</label><br>
			    <select class="form-control">
			    	<option selected> your last Qualification</option>
			    	<option value="SSC">SSC </option>
			   </select>
			  </div>


			  <div class="form-outline">
			  	<label for="subscription">Subscription type:</label><br>
			    <select class="form-control">
			    	<option selected>select your Subscription type </option>
			    	<option value="One time">On time</option>
			    	<option value="Monthly">Monthly</option>
			   </select>
			  </div>

			  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="picture" aria-describedby="select picture" name="picture">
                  <label class="custom-file-label">Choose your Photo</label>
                </div>
                <br>
                <br>

				<div class="custom-file">
                  <input type="file" class="custom-file-input" id="signature" aria-describedby="select picture" name="signature">
                  <label class="custom-file-label">Choose your signature</label>
                </div>
                <br>
                <br>


			  <button type="submit" class="btn btn-primary">Submit</button>

		</form>
		 </div>
	  </div>
	</div>

</div>
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(document).on('change','#division',function(){
                        console.log("hmmm got this")

                });
        });

</script>

@endsection
