<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\guestrequest;
use App\Models\lecturerrequest;
use App\Models\course;
use App\Models\program;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\lecturer;
use App\Models\timetable;
use App\Models\accsupportive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;



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
        $unreadMessagesCount = DB::table('guestrequests')->count();
        $unreadMessagesCount2 = DB::table('lecturerrequests')->count();
        //return $count3;
        //return $dater;
            return view('admin.adminhome',compact('count','count1','count2','count3','dater','unreadMessagesCount','unreadMessagesCount2'));
        //return view('guest.guesthome');
    }

    public function adminhallallocation() //view admin home page.
    {
        $dater1=guestrequest::all();
        $dater2=lecturerrequest::all();
        //return $dater1;
            return view('admin.adminhallallocation',['dater1'=> $dater1,'dater2'=> $dater2]);

    }

    public function viewhallallocation() //view admin home page.
    {
            $dater1=course::all();
            $dater2=program::all();
            $dater3=lecturehall::all();
            $dater4=lab::all();
            $dater5=lecturer::all();
            $dater6=accsupportive::all();
            return view('admin.allocate',['dater1'=> $dater1,'dater2'=> $dater2,'dater3'=> $dater3,'dater4'=> $dater4,'dater5'=> $dater5,'dater6'=> $dater6]);
    }

    public function adminhallallocation1(Request $request)
    {
        $request->validate([  //validation part.
            'starttime'=> 'required',
            'program'=> 'required',
            'day'=> 'required',
            'endtime'=> 'required',
            'course'=> 'required',
            'level'=> 'required',
            'lecturehall'=> 'required_with:lecturername|required_without:lab|prohibits:lab',
            'lab'=> 'required_with:accsupname|required_without:lecturehall|prohibits:lecturehall', //if accsupname is present lab should be present|if lecturehall is empty lab should be present|if the lab is not empty lecturehall must be empty
            'lecturername'=> 'required_with:lecturehall',
            'accsupname'=> 'required_with:lab',
            'semester' => 'required'
          ]);

            if(($request -> program)&&($request -> course)&&($request -> level)&&($request -> semester)&&($request -> day)&&($request -> starttime)&&($request -> endtime)&&($request -> lecturername )&&($request -> lecturehall )&&!($request -> accsupname )&&!($request -> lab ))
            {
                $joindata = DB::table('timetables')
                //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            //->join('programs', 'timetables.program_id', '=', 'programs.id')
            //->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*')
                ->where('program_id','=',$request -> program)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
                ->where('course_id','=',$request -> course)
                ->where('semester','=',$request -> semester)
                ->where('start_time','=',$request -> starttime)
                ->where('end_time','=',$request -> endtime)
                ->where('lec_id','=',$request -> lecturername)
                ->where('lh_id','=',$request -> lecturehall)
                ->get();
                //return $request;
                //return $joindata;
                if($joindata->isEmpty())
                {
                    //return $request;

                  $timetable=timetable::create([
                    'program_id'=> $request -> program,
                    'level'=> $request -> level,
                    'day'=> $request -> day,
                    'course_id'=> $request -> course,
                    'start_time'=> $request -> starttime,
                    'end_time'=> $request -> endtime,
                    'lec_id' => $request -> lecturername,
                    //'acc_id' => $request -> accsupname,
                    //'lab_id'=> $request -> lab,
                    'lh_id'=> $request -> lecturehall,
                    'semester'=> $request -> semester,

                    ]);

                    $res = $timetable ->save();
                    return redirect('/admin/viewhallallocation') -> with('success',"Hall Allocation has been added!");
                    //return view('admin.allocate',['joindata'=> $joindata]);
                    //return $joindata;
                }

                else{
                    //return $request;
                    return redirect('/admin/viewhallallocation') -> with('fail',"There is a allocated slot in that time!");

                }
            }

            elseif(($request -> program)&&($request -> course)&&($request -> level)&&($request -> semester)&&($request -> day)&&($request -> starttime)&&($request -> endtime)&&!($request -> lecturername )&&!($request -> lecturehall )&&($request -> accsupname )&&($request -> lab ))
            {
                $joindata1 = DB::table('timetables')
                //->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
                    //->join('orders', 'users.id', '=', 'orders.user_id')
                    //->join('programs', 'timetables.program_id', '=', 'programs.id')
                    //->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*')
                ->where('program_id','=',$request -> program)
                ->where('level','=',$request -> level)
                ->where('day','=',$request -> day)
                ->where('course_id','=',$request -> course)
                ->where('semester','=',$request -> semester)
                ->where('start_time','=',$request -> starttime)
                ->where('end_time','=',$request -> endtime)
                ->where('lec_id','=',$request -> lecturername)
                ->where('lh_id','=',$request -> lecturehall)
                ->get();
                //return $joindata1;

                if($joindata1->isEmpty())
                {

                    $timetable=timetable::create([
                        'program_id'=> $request -> program,
                        'level'=> $request -> level,
                        'day'=> $request -> day,
                        'course_id'=> $request -> course,
                        'start_time'=> $request -> starttime,
                        'end_time'=> $request -> endtime,
                        //'lec_id' => $request -> lecturername,
                        'acc_id' => $request -> accsupname,
                        'lab_id'=> $request -> lab,
                        //'lh_id'=> $request -> lecturehall,
                        'semester'=> $request -> semester,
                    ]);

                    $res = $timetable ->save();
                    return redirect('/admin/viewhallallocation') -> with('success',"Hall allocation has been added!");
                    //return view('admin.allocate',['joindata1'=> $joindata1]);
                }

                else{
                    return redirect('/admin/viewhallallocation') -> with('fail',"There is a allocated slot in that time!");
                }
            }

        }


        public function viewsuggestions($id) //view allocation suggestion page.
    {
            $guestrequest = guestrequest::find($id);
            $Date =$guestrequest->date;
            $day = Carbon::createFromFormat('Y-m-d', $Date)->format('l');
            $guestrequest->date = $day;
            return  $guestrequest;

                $data1 = DB::table('timetables')
                ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
                //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            //->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('timetables.*','lecturers.lec_name', 'courses.course_name','courses.course_code','lecturehalls.lh_name')
                //->where('program_id','=',$request -> program)
                //->where('level','=',$request -> level)
                ->where('day','=',$day)
                //->where('course_id','=',$request -> course)
                //->where('semester','=',$request -> semester)
                //->where('start_time','=',$request -> starttime)
                //->where('end_time','=',$request -> endtime)
                //->where('lec_id','=',$request -> lecturername)
                //->where('lh_id','=',$request -> lecturehall)
                ->get();

                $data2 = DB::table('timetables')
            //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
            //->join('programs', 'timetables.program_id', '=', 'programs.id')
            ->join('courses', 'timetables.course_id', '=', 'courses.id')
            //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
            ->join('labs', 'timetables.lab_id', '=', 'labs.id')
            ->select('timetables.*', 'accsupportives.acc_name', 'courses.course_name','courses.course_code','labs.lab_name')
            ->where('day','=',$day)
            //->where('lh_name','=','MLT1')
            //->where('day','=','Monday')
            ->get();
            //dd($dat2);
            //return $dat2;

            return view('admin.timetablesuggestions',['data1'=> $data1,'data2'=> $data2]);


    }

    public function deleteguestrequest($id) //delete course using the selected id.
    {
            $guestrequest = guestrequest::find($id);
            $guestrequest->delete();
            return redirect()->back()-> with('success',"successfully deleted.");
    }

    public function deletelecturerrequest($id) //delete course using the selected id.
    {
            $lecturerrequest = lecturerrequest::find($id);
            $lecturerrequest->delete();
            return redirect()->back()-> with('success',"successfully deleted.");
    }
    public function showUnreadMessagesCount()
    {
        $admin = Auth::user(); // Assuming you are using Laravel's built-in authentication
        $unreadMessagesCount = $admin->messages()->whereNull('read_at')->count();
    
        return view('admin.dashboard', compact('unreadMessagesCount'));
    } 

    public function showUnreadMessagesCount2()
    {
        $admin = Auth::user(); // Assuming you are using Laravel's built-in authentication
        $unreadMessagesCount2 = $admin->messages()->whereNull('read_at')->count();
    
        return view('admin.dashboard', compact('unreadMessagesCount2'));
    } 

    public function markMessagesAsRead()
    {
        $admin = Auth::user();
        $admin->messages()->whereNull('read_at')->update(['read_at' => now()]);
        return Redirect::back()->with('success', 'Messages marked as read successfully');
    }
    


    

}

