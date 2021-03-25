@extends('Admin.master')

@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="content content-header">
        <h1>Batches</h1>
        <div class="alert alert-success">
            <p>
                @if(session()->has('msg'))
                {{session()->get('msg')}}
              @endif
            </p>
        </div>

    </div>
    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary bg-white"><a href="#">add Batch </a></button>
    <div class="container-fluid">
     <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td  style="width: 10%;">Sl</td>
                    <td>Batch Name</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($batch as $index=> $row)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$row->Batch_name}}</td>
                    <td style="width: 30%;">
                        <a class="btn btn-info" href="{{route('batch_edit',$row->id)}}"><i class="fas fa-edit"></i></a>
                    <form action="{{route('batch_delete',$row->id)}}" method="POST" style="display:inline-block">
                         {{ csrf_field() }}
                            {{ method_field('Delete') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure To delete??')"><i class="fas fa-trash"></i></button>
                  </form>

                </td>
              </tr>
            </tbody>
         @endforeach
        </table>
         {!! $batch->render() !!}
      </div>
     </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add batches</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" action="{{route('batch_store')}}">
                @csrf

                    <div class="modal-body">
                        <div class="form-outline">
                            <label class="form-label" for="form1">Batch Name</label>
                            <input type="text" name="batch_name" id="batch_name" class="form-control" required />

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
