<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use DB;

class CourseController extends Controller
{
        public function index()
        {
            $data= Course::get();
            return view('course.courses',compact('data'));

        }



        public function course_store(request $request)
        {
            $data= new Course;
            $data->Course_name=$request->Course_name;
            $data->other_info=$request->other_info;
            $data->save();
            return redirect('course')->with('msg','data saved succes fully ');


        }


        public function course_edit($id)
        {
            $data= Course::find($id);
            return view('course.course_edit',compact('data'));


        }

        public function course_update( request $request,$id)
        {
            $data=Course::find($id);
            $data->Course_name=$request->Course_name;
            $data->other_info=$request->other_info;
            $data->update();
            return redirect('course')->with('msg','data update successfully');

        }


        public function delete_course($id)
        {
                $data= Course::find($id);
                $data->delete();
                return redirect()->back()->with('msg','data delete successfully');
        }
}
