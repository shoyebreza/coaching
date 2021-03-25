@extends('Admin.master')
@section('content')
<div>
    <div class="header">
        <h1>Update Qualification</h1>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form method="post" action="{{route('qualification.update',$data->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-outline">
                <label class="form-label">update name</label>
                <input type="text" name='Qualifi_name' id='Qualifi_name' class="form-controll" value="{{$data->Qualifi_name}}">
            </div>
            <button type="submit" class="btn btn-info">submit</button>

        </form>
    </div>
</div>

@endsection
