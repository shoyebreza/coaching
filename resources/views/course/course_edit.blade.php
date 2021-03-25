@extends('Admin.master')
@section('content')
<div>
    <div class="header">
        <h1>Update Course</h1>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form method="post" action="{{Route('course_update',$data->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-outline">
                <label class="form-label">update Course</label>
                <input type="text" name='Course_name' id='Course_name' class="form-controll" value="{{$data->Course_name}}">
            </div>
                <br>

            <div class="form-outline">
                <label class="form-label">update other info</label>
                <input type="text" name='other_info' id='other_info' class="form-controll" value="{{$data->other_info}}">
            </div>

            <button type="submit" class="btn btn-info">update</button>

        </form>
    </div>
</div>

@endsection
