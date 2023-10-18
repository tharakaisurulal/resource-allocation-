<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function viewcourse(){ //view the courses in database.
        $cusdata1= course::all();
        //return  $cusdata1;
        if(count($cusdata1) === 0){ //if course table is empty it does not return the $cusdata1 because it is empty.
            return view('admin.course.admincourseopera');
        }
        else{
            return view('admin.course.admincourseopera',['cusdata1'=> $cusdata1]);
        }
    }


    public function addcourse(Request $request){ // add course.

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

public function deletecourse($id) //delete course using the selected id.
{
        $course = course::find($id);
        $course->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updatecourse($id) //to do the update choose the selected id and return details in to edit page.
{
        $course = course::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.course.admincourseedit', ['course'=>$course]);

}

public function updatecourse1(Request $request,$id) //selected id will be updated using this function.
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
