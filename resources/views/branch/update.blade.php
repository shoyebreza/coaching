@extends('Admin.master')

@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="content content-header">
        <h1> update branches</h1>
    </div>
    <form method="post" action="{{route('branch_update',$data->id)}}">
            @csrf
             @method("PATCH")
        <div class="form-outline">
            <label class="form-label">update branches</label>
            <input type="text" name="Branch_name" id="Branch_name" value="{{$data->Branch_name}}">
         </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

</div>




@endsection
