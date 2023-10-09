<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function viewcourse(){
        $cusdata1= course::all();
        //return  $cusdata;
        if(count($cusdata1) === 0){
            return view('admin.course.admincourseopera');
        }
        else{
            return view('admin.course.admincourseopera',['cusdata1'=> $cusdata1]);
        }
    }


    public function addcourse(Request $request){

        $courses=course::create([
          'course_name'=> $request -> coursename,
          'course_code'=> $request -> coursecode,

      ]);

      $res2 = $courses ->save();
          if($res2){
          //return redirect('/') -> withSuccess("you are registered");
          //return back() -> with('success',"you are registered");
              return redirect('/admin/course/admincourseopera') -> with('success',"successfully registered.");
          }
          else{
              return back() -> with('fail',"Not registered");
          }
}
}
