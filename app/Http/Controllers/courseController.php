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

public function deletecourse($id)
{
        $course = course::find($id);
        $course->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updatecourse($id)
{
        $course = course::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.course.admincourseedit', ['course'=>$course]);

}

public function updatecourse1(Request $request,$id)
{

    $course = course::find($id);
    //return $request;
        $course->course_name = $request -> input('coursename');
        $course->course_code = $request -> input('coursecode');
        $course->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewcourse')->with('success',"Data updated successfully.");

}

}
