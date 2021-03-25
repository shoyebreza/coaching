@extends('Admin.master')
@section('content')
<div>
    <div class="header">
        <h1>Update subscription</h1>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form method="post" action="{{Route('update_subs',$data->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-outline">
                <label class="form-label">update subscription type</label>
                <input type="text" name='sub_type' id='sub_type' class="form-controll" value="{{$data->Sub_type}}">
            </div>
            <button type="submit" class="btn btn-info">submit</button>

        </form>
    </div>
</div>

@endsection
