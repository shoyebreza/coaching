<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use DB;

class ComponentController extends Controller
{
    public function batch()
    {
        $batch=Batch::orderBy('batch_name','ASC')->paginate(10);
        return view('batch.layout',compact('batch'));
    }



    public function batch_store( Request $request)
    {
        $batch= new Batch;
        $batch->batch_name=$request->batch_name;
        $batch->save();

        return redirect()->back()->with('msg', 'data saved successfully');


    }

    public function batch_edit($id)
    {
        $data= Batch::find($id);
        return view('batch.update_batch',compact('data'));

    }


    public function batch_update( Request $request,$id)

    {
        $data= Batch::find($id);
        $data->Batch_name=$request->batch_name;
        $data->update();

        return redirect('batch')->with('msg','data update successfully');


    }


    public function batch_delete($id)
    {

        $data= Batch::find($id);
        $data->delete();

        return back()->with('msg', 'data delete successfully');
    }




}
