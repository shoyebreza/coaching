@extends('Admin.master')

@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="content content-header">
        <h1>Batches</h1>
    </div>
    <form method="post" action="{{route('batch_update',$data->id)}}">
            @csrf
             @method("patch")
        <div class="form-outline">
            <label class="form-label">update Batch</label>
            <input type="text" name="batch_name" id="batch_name" value="{{$data->Batch_name}}">
         </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

</div>




@endsection
