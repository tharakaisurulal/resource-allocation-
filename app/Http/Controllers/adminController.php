<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\guestrequest;
use App\Models\lecturerrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function adminhome() //view admin home page.
    {
        $dater = array();
        if(session()->has('reid')) //getting the details of logged in user.
        {
            $dater=admin::where('id','=',session()->get('reid'))->first();
        }

        $count = DB::table('students')->count();
        $count1 = DB::table('lecturers')->count();
        $count2 = DB::table('accsupportives')->count();
        $count3 = DB::table('guests')->count();
        //return $count3;
        //return $dater;
            return view('admin.adminhome',compact('count','count1','count2','count3','dater'));
        //return view('guest.guesthome');
    }

    public function adminhallallocation() //view admin home page.
    {
        $dater1=guestrequest::all();
        $dater2=lecturerrequest::all();
        //return $dater1;
            return view('admin.adminhallallocation',['dater1'=> $dater1,'dater2'=> $dater2]);

    }

    public function filtertimetablesubmit(Request $request)
    {
            if(($request -> program)&&($request -> course)&&($request -> level)&&($request -> semester)&&($request -> day)&&($request -> starttime)&&($request -> endtime)&&($request ->lecturername )&&($request ->lecturehall )&&($request ->accsupname )&&($request ->lab ))
            {
                $joindata = DB::table('timetables')
                ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            ->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*', 'lecturers.lec_name', 'courses.course_name', 'courses.course_code')
                ->where('program_id','=',$request -> prog)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
            ->where('courses.course_code','=',$request -> coursecode)
                //->orwhere('course_name','=',$request -> coursename)
                ->get();

                $joindata1 = DB::table('timetables')
                ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
            ->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*', 'accsupportives.acc_name', 'courses.course_name', 'courses.course_code')
                ->where('program_id','=',$request -> prog)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
            ->where('courses.course_code','=',$request -> coursecode)
                //->orwhere('course_name','=',$request -> coursename)
                ->get();
                    return view('academicsupportive.filtertimetable',['joindata1'=> $joindata1,'joindata'=> $joindata,'dater1'=> $dater1,'dater2'=> $dater2,'dater3'=> $dater3,'dater4'=> $dater4,'dater5'=> $dater5,'dater6'=> $dater6]);
                    //return $joindata;
            }

            elseif(($request -> prog)&&($request -> level)&&($request -> day)&&!($request -> coursecode)&&!($request -> semester))
            {
                $joindata = DB::table('timetables')
                ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
                    //->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('programs', 'timetables.program_id', '=', 'programs.id')
                    ->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*', 'lecturers.lec_name', 'courses.course_name','courses.course_code')
                ->where('program_id','=',$request -> prog)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
                //->orwhere('course_code','=',$request -> coursecode)
                //->orwhere('course_name','=',$request -> coursename)
                ->get();

                $joindata1 = DB::table('timetables')
                ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
                    //->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('programs', 'timetables.program_id', '=', 'programs.id')
                    ->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*', 'accsupportives.acc_name', 'courses.course_name','courses.course_code')
                ->where('program_id','=',$request -> prog)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
                //->orwhere('course_code','=',$request -> coursecode)
                //->orwhere('course_name','=',$request -> coursename)
                ->get();
                    return view('academicsupportive.filtertimetable',['joindata1'=> $joindata1,'joindata'=> $joindata,'dater1'=> $dater1,'dater2'=> $dater2,'dater3'=> $dater3,'dater4'=> $dater4,'dater5'=> $dater5,'dater6'=> $dater6]);
            }
        }
}
