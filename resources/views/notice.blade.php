@extends('master')
@section('content')

<div class="box">
	
	<section class="data-table pt-5 mt-5">
		<div class="text-center">
			<h1>Recent notice here </h1>
		</div>
		
		<table id="example" class="display DataTable table-bordered table hover" style="width:100%">
		        <thead>
		            <tr>
		               <th>Sl</th>
		               <th>Title</th>
		                <th>Publish date</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>11</td>
		                <td>System Architect</td>
		                <td>01-01-2021</td>
		                <td><a href="#">download </a></td>
		            </tr>
		        </tbody>
		    </table>
		</section>
	</div>

@endsection

<script type="text/javascript">

	$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );

</script>
