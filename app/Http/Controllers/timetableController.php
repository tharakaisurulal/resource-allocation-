<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\program;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\lecturer;
use App\Models\timetable;
use App\Models\accsupportive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class timetableController extends Controller
{
    public function addtimetable() //view the timetable opera page
    {
        //$dater1 = array();
            $dater1=course::all();
            $dater2=program::all();
            $dater3=lecturehall::all();
            $dater4=lab::all();
            $dater5=lecturer::all();
            $dater6=accsupportive::all();
            return view('admin.timetable.addtimetable',['dater1'=> $dater1,'dater2'=> $dater2,'dater3'=> $dater3,'dater4'=> $dater4,'dater5'=> $dater5,'dater6'=> $dater6]);
        //return $dater1;
            //return view('admin.timetable.addtimetable',compact('dater1'));
        //return view('guest.guesthome');

    }


    public function timetablestore(Request $request) //store guest registration details(inside the admin page).
    {
    //return $request;
        $request->validate([  //validation part.
            'starttime'=> 'required',
            'program'=> 'required',
            'day'=> 'required',
            'endtime'=> 'required',
            'course'=> 'required',
            'level'=> 'required',
            'lecturehall'=> 'required_with:lecturername|required_without:lab|prohibits:lab',
            'lab'=> 'required_with:accsupname|required_without:lecturehall|prohibits:lecturehall',
            'lecturername'=> 'required_with:lecturehall',
            'accsupname'=> 'required_with:lab',
            'semester' => 'required'
          ]);
          //return $request;

          $timetable=timetable::create([
            'program_id'=> $request -> program,
            'level'=> $request -> level,
            'day'=> $request -> day,
            'course_id'=> $request -> course,
            'start_time'=> $request -> starttime,
            'end_time'=> $request -> endtime,
            'lec_id' => $request -> lecturername,
            'acc_id' => $request -> accsupname,
            'lab_id'=> $request -> lab,
            'lh_id'=> $request -> lecturehall,
            'semester'=> $request -> semester,

            ]);

            $res = $timetable ->save();

            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
            return redirect('/admin/timetable/addtimetable') -> with('success',"Timetable has been added!");
            }
            else{
                return back() -> with('fail',"Incorrect details. Timetable has not been added!");
            }

}

public function viewtimetable(){  //view the students in database(inside the admin page).
    //$cusdata8= timetable::all();
    //return  $cusdata8;
    //if(count($cusdata8) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
        //return $cusdata8;
       // return view('admin.timetable.timetableopera');
   // }
    //else{
        $data1 = DB::table('timetables')
            ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            ->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
            ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
            //->join('labs', 'timetables.lab_id', '=', 'labs.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
            //->where('lh_name','=','MLT1')
            //->where('day','=','Monday')
        ->get();
        //return $data1;
        $data2 = DB::table('timetables')
            //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
            ->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
            //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
            ->join('labs', 'timetables.lab_id', '=', 'labs.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','accsupportives.acc_name','labs.lab_name')
            //->where('lh_name','=','MLT1')
            //->where('day','=','Monday')
        ->get();
        //return $data2;
        return view('admin.timetable.timetableopera',['data1'=> $data1,'data2'=> $data2]);
    //}
}

public function updatetimetable($id) //to do the update choose the selected id and return details in to edit page.
{
        $timetable = timetable::find($id);
        $dater5=lecturer::all();
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $dater5;
        return view('admin.timetable.admintimetableedit', ['timetable'=>$timetable, 'dater5'=>$dater5]);
}





public function updatetimetable1(Request $request,$id)  //selected id will be updated using this function.
{

    $timetable = timetable::find($id);
    //return $request;
        $timetable->level = $request -> input('level');
        $timetable->semester = $request -> input('semester');
        $timetable->day = $request -> input('day');
        $timetable->start_time = $request -> input('starttime');
        $timetable->end_time = $request -> input('endtime');
        $timetable->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('admin.timetable.timetableopera')->with('success',"Data updated successfully.");

}

public function deletetimetable($id) //delete programs using the selected id.
{
        $timetable = timetable::find($id);
        $timetable->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}
}
