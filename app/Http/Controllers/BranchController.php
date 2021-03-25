<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use DB;

class BranchController extends Controller
{
            public function index()
            {

                $data= Branch::orderBy('id','ASC')->paginate(10);
                return view('branch.layout',compact('data'));
            }



            public function branch_store(Request $request)
            {

                $branch=new Branch();
                $branch->Branch_name=$request->branch_name;
                $branch->save();
                return redirect()->back()->with('msg','data saved successfully');

            }


            public function branch_edit($id)
            {
                $data=Branch::find($id);
                return view('branch.update',compact('data'));


            }


            public function branch_update(request $request,$id)

            {

                    $data=Branch::find($id);
                    $data->Branch_name=$request->Branch_name;
                    $data->update();
                    return redirect('branch')->with('msg','data update succesfully');

            }



            public function branch_delete($id)
            {
                $data=Branch::find($id);
                $data->delete();
                return redirect()->back()->with('msg','data delete succesfully');


            }

}
