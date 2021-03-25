<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscrip;
use DB;

class SubscriptionController extends Controller
{
    public function subscrip()
    {
        $data=Subscrip::orderBy('id','ASC')->paginate(10);
        return view('subscription.subscription',compact('data'));
    }


    public function subscrip_store(request $request)
    {

        $data= new subscrip();
        $data->Sub_type=$request->Sub_type;
        $data->save();
        return redirect('subscrip')->with('msg','data saved successfully');
    }


    public function edit_subscrib($id)

    {
        $data= Subscrip::find($id);
        return view('subscription.edit_subscrip',compact('data'));

    }


    public function update_subs(request $request,$id)
    {
            $data=Subscrip::find($id);
            $data->sub_type=$request->sub_type;
            $data->update();
            return redirect('subscrip')->with('msg','data update successfully');
    }


    public function delete_subscrip($id)
    {
        $data=Subscrip::find($id);
        $data->delete();
        return redirect()->back()->with('msg','data delete successfully');

    }
}
