<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admission;
use App\Models\divisions;
use App\Models\districts;


use App\Models\Batch;
use App\Models\Branch;
use App\Models\Course;
use App\Models\Qualification;
use App\Models\Subscrip;
use Images;
use File;
use DB;

class AdmissionController extends Controller
{

    public function index()
    {
    	$batches= Batch::get();
        $branches= Branch::get();
        $courses=Course::get();
        $Qualification=Qualification::get();
        $Subscription=Subscrip::get();
        $divisions=divisions::get();

    	return view('admission',compact('batches','branches','courses','Qualification','Subscription','divisions'));
    }


    public function get_district(request $request)
    {
        $district=districts::wher('division_id',$request->division_id)->find('name','id');
        return response()->json($district);


    }




}
