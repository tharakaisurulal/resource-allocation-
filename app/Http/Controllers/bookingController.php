<?php

namespace App\Http\Controllers;
use App\Models\booking;
use App\Models\timetable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function viewguestpage()
    {
        $event = Array();
        $bookings=booking::all();

        foreach ($bookings as $booking) {
           $event[]= [ 'title'=> $booking -> title,
                        'start'=> $booking -> start_time,
                         'end'=> $booking -> end_time,
        ];
        }
        //return  $event;

        $dat=date("l");
        //return $dat;

    $cusdata= timetable::all();
    //return $cusdata;

    if($dat=="Monday"){
       //return $cusdata;

       $data1 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Monday')
       ->get();
        //return view('booking');
        //return view('booking',['data1'=> $data1]);
        //return $data1;

        $data2 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Monday')
       ->get();

        $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Monday')
       ->get();
        //return $data3;
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Tuesday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Tuesday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Tuesday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Tuesday')
       ->get();
        //return view('booking');
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Wednesday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Wednesday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Wednesday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Wednesday')
       ->get();
        //return view('booking');
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Thursday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Thursday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Thursday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Thursday')
       ->get();
        //return view('booking');
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Friday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Friday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Friday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Friday')
       ->get();
        //return view('booking');
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Saturday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Saturday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Saturday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Saturday')
       ->get();
        //return $data3;
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

    elseif($dat=="Sunday"){
        $data1 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','Lecture Hall 01')
       ->where('day','=','Sunday')
       ->get();

        $data2 = DB::table('timetables')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','mini-auditorium')
       ->where('day','=','Sunday')
       ->get();


       $data3 = DB::table('timetables')
       //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
   //->join('programs', 'timetables.program_id', '=', 'programs.id')
   ->join('courses', 'timetables.course_id', '=', 'courses.id')
   ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
       ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
       ->where('lh_name','=','main-auditorium')
       ->where('day','=','Sunday')
       ->get();
        //return view('booking');
        return view('guestpage',['data1'=> $data1,'data2'=> $data2,'data3'=> $data3,'event'=>$event]);

    }

        //return view('guestpage',['event'=>$event]);
        //return view('home1',['event'=>$event]);
    }

    public function eventope()
    {
        $cusdata4= booking::all();
        //return $cusdata4;
        return view('admin.events.eventope',['cusdata4'=>$cusdata4]);
    }


    public function addevent()
    {
        return view('admin.events.addevent');
    }


    public function deletevent()
    {
        return view('deletevent');
    }

    public function editevent()
    {
        return view('updatevent');
    }

    public function storer(Request $request)
    {
//return $request;
          $bookings=booking::create([
            'title'=> $request -> name,
            'start_time' => $request -> start,
            'end_time'=> $request -> end
            ]);


            $res = $bookings ->save();
            //$student=post::create($request->all());
            //$student->password = Hash::make($request->input('password'));
            //$student->save();
            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            return back() -> with('success',"event is added");
            }
            else{
                return back() -> with('fail',"event is not added");
            }
    }

    public function deleter(Request $request){

        $deleted = DB::table('bookings')->where('title',$request -> name)->delete();


        //return view('view1');
        //return  $affected;
        return redirect()->route('delevent');
        }


            public function updateevents($id) //to do the update choose the selected id and return details in to edit page.
            {
                $booking = booking::find($id);
                return view('admin.events.admineventedit', ['booking'=>$booking]);

            }

            public function updateevents1(Request $request,$id)  //selected id will be updated using this function.
            {

                $booking = booking::find($id);

                    $booking->title = $request -> input('name');
                    $booking->start_time = $request -> input('start');
                    $booking->end_time = $request -> input('end');
                    $booking->update();

                    return redirect()->route('eventope')->with('success',"Data updated successfully.");

            }

            public function deletetevent($id) //delete programs using the selected id.
            {
                    $booking = booking::find($id);
                    $booking->delete();
                    return redirect()->back()-> with('success',"successfully deleted.");
            }


            //public function booking(){
                //return view('booking');
            //}

            /*public function booking1(){
                $dat=date("l");
                    //return $dat;

                $cusdata= timetable::all();
                //return $cusdata;

                if($dat=="Sunday"){
                   //return $cusdata;

                   $data1 = DB::table('timetables')
                   //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
               //->join('programs', 'timetables.program_id', '=', 'programs.id')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Sunday')
                   ->get();
                    //return view('booking');
                    //return view('booking',['data1'=> $data1]);
                    //return $data1;

                    $data2 = DB::table('timetables')
                   //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
               //->join('programs', 'timetables.program_id', '=', 'programs.id')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Sunday')
                   ->get();
                    //return view('booking');
                    return view('booking',['data1'=> $data1],['data2'=> $data2]);
                    //return $data1;
                }

                elseif($dat=="Monday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Monday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Monday')
                   ->get();
                    return $data1;
                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }


                elseif($dat=="Tuesday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Tuesday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Tuesday')
                   ->get();

                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }

                elseif($dat=="Wednesday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Wednesday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Wednesday')
                   ->get();

                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }

                elseif($dat=="Thursday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Thursday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Thursday')
                   ->get();

                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }

                elseif($dat=="Friday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Friday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Friday')
                   ->get();

                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }

                elseif($dat=="Saturday"){
                    $data1 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT1')
                   ->where('day','=','Saturday')
                   ->get();

                    $data2 = DB::table('timetables')
               ->join('courses', 'timetables.course_id', '=', 'courses.id')
               ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
                   ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name')
                   ->where('lh_name','=','MLT2')
                   ->where('day','=','Saturday')
                   ->get();

                    return view('booking',['data1'=> $data1],['data2'=> $data2]);

                }



                                     }*/
}
