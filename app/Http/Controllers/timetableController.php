<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\program;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\guest;
use App\Models\lecturer;
use App\Models\timetable;
use App\Models\lecturerrequest;
use App\Models\guestrequest;
use App\Models\accsupportive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\RegisterMail1;
use Illuminate\Support\Facades\Mail;

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

        $data3 = DB::table('timetables')
        //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        //->join('programs', 'timetables.program_id', '=', 'programs.id')
        //->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    //->select('timetables.id','timetables.semester','timetables.day','timetables.start_time','timetables.end_time','lecturehalls.lh_name')
    ->select('timetables.*','lecturehalls.lh_name')
        ->where('level','=',null)
        //->where('day','=','Monday')
    ->get();

    $data4 = DB::table('timetables')
        //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        //->join('programs', 'timetables.program_id', '=', 'programs.id')
        //->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    //->select('timetables.id','timetables.semester','timetables.day','timetables.start_time','timetables.end_time','labs.lab_name')
    ->select('timetables.*','labs.lab_name')
        ->where('level','=',null)
        //->where('day','=','Monday')
    ->get();
        //return $data4;
        return view('admin.timetable.timetableopera',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'data4'=> $data4]);
    //}
}

public function updatetimetable($id) //to do the update choose the selected id and return details in to edit page.
{
        $timetable = timetable::find($id);
        $dater3=lecturehall::all();
        $dater4=lab::all();
        $dater5=lecturer::all();
        $dater6=accsupportive::all();
        //return $timetable;
    if($timetable->lec_id)
    {
        $dater7=lecturehall::find($timetable->lh_id);
        $dater9=lecturer::find($timetable->lec_id);
        $dater8=null;
        $dater10=null;
        //return $dater7;
    }
    else
    {
        $dater8=lab::find($timetable->lab_id);
        $dater10=accsupportive::find($timetable->acc_id);
        $dater7=null;
        $dater9=null;

    }
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $dater5;
        //return $timetable->lec_id;
        return view('admin.timetable.admintimetableedit', ['timetable'=>$timetable, 'dater3'=>$dater3, 'dater4'=>$dater4, 'dater5'=>$dater5, 'dater6'=>$dater6, 'dater7'=>$dater7, 'dater8'=>$dater8, 'dater9'=>$dater9, 'dater10'=>$dater10]);
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

public function updatetimetable2(Request $request,$id)  //selected id will be updated using this function.
{

    $timetable = timetable::find($id);
    if($request->lecid)
    {
        $timetable->lec_id = $request -> input('lecid');
        $timetable->lh_id = $request -> input('lhid');
        $timetable->update();
    }
        else{
            $timetable->acc_id = $request -> input('accid');
            $timetable->lab_id = $request -> input('labid');
            $timetable->update();
        }
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('admin.timetable.timetableopera')->with('success',"Data updated successfully.");

}

public function deletetimetable($id) //delete programs using the selected id.
{
    //return $id;
        $timetable = timetable::find($id);
        $timetable->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

public function requeststoreintimetable($id) //store guest registration details(inside the admin page).
{
    //$lecturer= lecturerrequest::find($id);
    //$lecturer->date=date('l');

    $guest= guestrequest::find($id);
    $guest->date=date('l');

/*if($lecturer->hall_name=="Lecture Hall 01"){
      $timetable=timetable::create([
        //'program_id'=> $request -> program,
        //'level'=> $request -> level,
        'day'=> $lecturer -> date,
        //'course_id'=> $lecturer -> reason,
        'start_time'=> $lecturer -> start_time,
        'end_time'=> $lecturer -> end_time,
        //'lec_id' => $request -> lecturername,
        //'acc_id' => $request -> accsupname,
        //'lab_id'=> $lecturer -> lab,
        'lh_id'=> '2',
        'semester'=> $lecturer -> reason,

        ]);
    }
    elseif($lecturer->hall_name=="mini-auditorium"){
        $timetable=timetable::create([
          //'program_id'=> $request -> program,
          //'level'=> $request -> level,
          'day'=> $lecturer -> date,
          'course_id'=> $lecturer -> reason,
          'start_time'=> $lecturer -> start_time,
          'end_time'=> $lecturer -> end_time,
          //'lec_id' => $request -> lecturername,
          //'acc_id' => $request -> accsupname,
          //'lab_id'=> $lecturer -> lab,
          'lh_id'=> '3',
          //'semester'=> $request -> semester,

          ]);
      }

      elseif($lecturer->hall_name=="main-auditorium"){
        $timetable=timetable::create([
          //'program_id'=> $request -> program,
          //'level'=> $request -> level,
          'day'=> $lecturer -> date,
          'course_id'=> $lecturer -> reason,
          'start_time'=> $lecturer -> start_time,
          'end_time'=> $lecturer -> end_time,
          //'lec_id' => $request -> lecturername,
          //'acc_id' => $request -> accsupname,
          //'lab_id'=> $lecturer -> lab,
          'lh_id'=> '4',
          //'semester'=> $request -> semester,

          ]);
      }*/

      if($guest->hall_name=="Lecture Hall 01"){
        $timetable=timetable::create([
          //'program_id'=> $request -> program,
          //'level'=> $request -> level,
          'day'=> $guest -> date,
          //'course_id'=> $lecturer -> reason,
          'start_time'=> $guest -> start_time,
          'end_time'=> $guest -> end_time,
          //'lec_id' => $request -> lecturername,
          //'acc_id' => $request -> accsupname,
          //'lab_id'=> $lecturer -> lab,
          'lh_id'=> '2',
          'semester'=> $guest -> reason,

          ]);
      }
      elseif($guest->hall_name=="mini-auditorium"){
          $timetable=timetable::create([
            //'program_id'=> $request -> program,
            //'level'=> $request -> level,
            'day'=> $guest -> date,
            'semester'=> $guest -> reason,
            'start_time'=> $guest -> start_time,
            'end_time'=> $guest -> end_time,
            //'lec_id' => $request -> lecturername,
            //'acc_id' => $request -> accsupname,
            //'lab_id'=> $lecturer -> lab,
            'lh_id'=> '3',
            //'semester'=> $request -> semester,

            ]);
        }

        elseif($guest->hall_name=="main-auditorium"){
          $timetable=timetable::create([
            //'program_id'=> $request -> program,
            //'level'=> $request -> level,
            'day'=> $guest -> date,
            'semester'=> $guest -> reason,
            'start_time'=> $guest -> start_time,
            'end_time'=> $guest -> end_time,
            //'lec_id' => $request -> lecturername,
            //'acc_id' => $request -> accsupname,
            //'lab_id'=> $lecturer -> lab,
            'lh_id'=> '4',
            //'semester'=> $request -> semester,

            ]);
        }

        elseif($guest->hall_name=="Computer lab 01"){
            $timetable=timetable::create([
              //'program_id'=> $request -> program,
              //'level'=> $request -> level,
              'day'=> $guest -> date,
              'semester'=> $guest -> reason,
              'start_time'=> $guest -> start_time,
              'end_time'=> $guest -> end_time,
              //'lec_id' => $request -> lecturername,
              //'acc_id' => $request -> accsupname,
              'lab_id'=> '2',
              //'lh_id'=> '4',
              //'semester'=> $request -> semester,

              ]);
          }

          elseif($guest->hall_name=="Computer lab 02"){
            $timetable=timetable::create([
              //'program_id'=> $request -> program,
              //'level'=> $request -> level,
              'day'=> $guest -> date,
              'semester'=> $guest -> reason,
              'start_time'=> $guest -> start_time,
              'end_time'=> $guest -> end_time,
              //'lec_id' => $request -> lecturername,
              //'acc_id' => $request -> accsupname,
              'lab_id'=> '3',
              //'lh_id'=> '4',
              //'semester'=> $request -> semester,

              ]);
          }

          elseif($guest->hall_name=="Computer lab 03"){
            $timetable=timetable::create([
              //'program_id'=> $request -> program,
              //'level'=> $request -> level,
              'day'=> $guest -> date,
              'semester'=> $guest -> reason,
              'start_time'=> $guest -> start_time,
              'end_time'=> $guest -> end_time,
              //'lec_id' => $request -> lecturername,
              //'acc_id' => $request -> accsupname,
              'lab_id'=> '4',
              //'lh_id'=> '4',
              //'semester'=> $request -> semester,

              ]);
          }

          elseif($guest->hall_name=="Special lab"){
            $timetable=timetable::create([
              //'program_id'=> $request -> program,
              //'level'=> $request -> level,
              'day'=> $guest -> date,
              'semester'=> $guest -> reason,
              'start_time'=> $guest -> start_time,
              'end_time'=> $guest -> end_time,
              //'lec_id' => $request -> lecturername,
              //'acc_id' => $request -> accsupname,
              'lab_id'=> '5',
              //'lh_id'=> '4',
              //'semester'=> $request -> semester,

              ]);
          }


        $res = $timetable ->save();

        if($res){
        //return redirect('/') -> withSuccess("you are registered");
        //return back() -> with('success',"you are registered");
        Mail::to($guest->email)->send(new RegisterMail1());
        return back() -> with('success',"Timetable has been added! And Success messages send through Email.");
        }
        else{
            return back() -> with('fail',"Incorrect details. Timetable has not been added!");
        }

}
}
