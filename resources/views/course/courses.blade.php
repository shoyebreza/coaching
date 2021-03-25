@extends('Admin.master')

@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="content content-header">
            <h1>Manage course</h1>
            <div class="alert alert-success">
                <p>
                    @if(session()->has('msg'))
                    {{session()->get('msg')}}
                    @endif
                </p>
            </div>
        </div>
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary bg-white"><a href="#">add Courses</a></button>
     <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td  style="width: 10%;">Sl</td>
                    <td>Courses</td>
                    <td>other info</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                    @foreach ($data as $index=>$row )
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$row->Course_name}}</td>
                    <td>{{$row->other_info}}</td>
                    <td style="width: 20%;">
                        <a class="btn btn-info" href="{{Route('course_edit',$row->id)}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('delete_course',$row->id)}}" method="POST" style="display:inline-block">
                    {{ csrf_field() }}
                    {{ method_field('Delete') }}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure To delete??')"><i class="fas fa-trash"></i></button>

                </form>
                </td>
            </tr>
                 @endforeach
            </tbody>
        </table>

    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Courses</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" action="{{Route('course_store')}}">
                @csrf

                    <div class="modal-body">
                         <div class="form-outline">
                                <label class="form-label" for="name">Course Name</label>
                                <input type="text" name="Course_name" id="Course_name" class="form-control" required />
                          </div>
                          <div class="form-outline">
                                <label class="form-label" for="info">other info</label>
                                <input type="text" name="other_info" id="other_info" class="form-control"/>
                          </div>
                    </div>

                         <!-- Modal footer -->



                    <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

            </form>
          </div>
        </div>
      </div>

</div>

@endsection
