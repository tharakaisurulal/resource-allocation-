<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\program;
use App\Models\course;
use App\Models\timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function studenthome() //view the guest home page
    {
        $dater = array();
        if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                                   return the logged in user details to guest home.mainly it is used in header welcome message.*/
        {
            $dater=student::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('students.studenthome',compact('dater'));
        //return view('guest.guesthome');
    }

    public function viewstudent(){  //view the students in database(inside the admin page).
        $cusdata4= student::all();
        //return  $cusdata4;
        //if(count($cusdata4) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
            //return view('admin.student.stuopera');
       // }
        //else{
            return view('admin.student.stuopera',['cusdata4'=> $cusdata4]);
       // }
    }

    public function viewmore($id){  //view the more details of students in database(inside the admin page).
        $student = student::find($id);

        $joindata = DB::table('programs')
                //->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
            ->join('students', 'programs.id', '=', 'students.program_Id')
            //->join('courses', 'timetables.course_id', '=', 'courses.id')
                ->select('programs.program','students.*')
                ->where('program_id','=',$student -> program_Id)
                ->where('students.id','=',$student -> id)
                ->get();

        //return  $joindata;
        if(!$joindata){  //if students table is empty it does not return the $cusdata4 because it is empty.
            return view('admin.student.adminstudentopemore');
        }
        else{
            return view('admin.student.adminstudentopemore',['joindata'=> $joindata]);
        }
    }

    public function studentlecturehalldetails() //view the guest lecturehall page
    {
        $dater3=lecturehall::all();
        //return $dater3;
        return view('students.studentlecturehalldetails',['dater3'=>$dater3]);
    }

    public function studentlab() //view the guest lab page
    {
        $dater4=lab::all();
        //return $dater3;
        return view('students.studentLab',['dater4'=>$dater4]);

    }


    public function studentstore(Request $request) //store guest registration details(inside the admin page).
    {
    //return $request;
        $request->validate([  //validation part.
            'fname'=> 'required',
            'lname'=> 'required',
            'username'=> 'required|unique:guests|unique:admins|unique:lecturers|unique:students|unique:accsupportives',
            'password'=> 'required|unique:students|min:5|max:12',
            'mobile'=> 'required',
            'password1'=> 'required',
            'subject1'=> 'required'|'required_with_all:subject2',
            'subject2'=> 'required_with_all:subject3',
            'subject3'=> 'required_with_all:subject4',
            'subject4'=> 'required_with_all:subject5',
            'subject5'=> 'required_with_all:subject6',
            'subject6'=> 'required_with_all:subject7',
            'subject7'=> 'required_with:subject8',
            'subject8'=> 'nullable'
            //'program_Id' => 'required'
          ]);
          //return $request;
    if(($request->password)==($request->password1)){  //if password input and confirm password input are same.
          if($request->hasfile('photo')) //check photo id added or not.
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/students/', $filename);

           }
           else{ //if photo is not added.
            $filename=null;
           }



          $students=student::create([
            'username'=> $request -> username,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'first_name'=> $request -> fname,
            'last_name'=> $request -> lname,
            'mobile'=> $request -> mobile,
            'photo'=> $filename,
            'program_Id' => $request -> program,
            'semester' => $request -> semester,
            'level' => $request -> level,
            'subject1'=> $request -> subject1,
            'subject2'=> $request -> subject2,
            'subject3'=> $request -> subject3,
            'subject4'=> $request -> subject4,
            'subject5'=> $request -> subject5,
            'subject6'=> $request -> subject6,
            'subject7'=> $request -> subject7,
            'subject8'=> $request -> subject8

            ]);

            $res = $students ->save();

            /*$image = new guest;
            if($request->hasfile('photo'))
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/guests/', $filename);
               $image->photo = $filename;
           }

           $image->save();*/
//return $request;


            //$student=post::create($request->all());
            //$student->password = Hash::make($request->input('password'));
            //$student->save();
            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
            return back() -> with('success',"you are registered,please login now");
            }
            else{
                return back() -> with('fail',"you are not registered");
            }
    }
    else
    {
    return back() -> with('fail',"confirm passsword is not match");
    }
}

public function updatestudent($id) //to do the update choose the selected id and return details in to edit page.
{
        $student = student::find($id);
        $dater2=program::all();
        $dater3=course::all();
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $student;
        return view('admin.student.adminstudentedit', ['student'=>$student,'dater2'=>$dater2,'dater3'=>$dater3]);

}

public function updatestudent1(Request $request,$id)  //selected id will be updated using this function.
{
        if(!($request->password)){
            $student = student::find($id);
            //return $request;
                $student->username = $request -> input('username');
                $student->first_name = $request -> input('fname');
                $student->last_name = $request -> input('lname');
                $student->mobile = $request -> input('mobile');
                $student->program_Id = $request -> input('program');
                $student->level = $request -> input('level');
                $student->semester = $request -> input('semester');
                $student->subject1 = $request -> input('subject1');
                $student->subject2 = $request -> input('subject2');
                $student->subject3 = $request -> input('subject3');
                $student->subject4 = $request -> input('subject4');
                $student->subject5 = $request -> input('subject5');
                $student->subject6 = $request -> input('subject6');
                $student->subject7 = $request -> input('subject7');
                $student->subject8 = $request -> input('subject8');
                $student->update();
            //return $request;
            //return $lecturehall;
            //$lecturehall->update($request->all());
                //return $lecturehall;
                return redirect()->route('admin.student.stuopera')->with('success',"Data updated successfully.");
        }
        else{
            $student = student::find($id);
            //return $request;
                $student->password = Hash::make($request -> input('password'));
                //$student->last_name = $request -> input('lname');
                //$student->mobile = $request -> input('mobile');
                //$student->first_name = $request -> input('photo');
                //$student->username = $request -> input('username');
                $student->update();
            //return $request;
            //return $lecturehall;
            //$lecturehall->update($request->all());
                //return $lecturehall;
                return redirect()->route('admin.student.stuopera')->with('success',"Data updated successfully.");
        }

}

public function updatestudentpassword(Request $request,$id)  //selected id will be updated using this function.
{

    $student = student::find($id);
    //$this-> lhcapacity = $lecturehall1->lh_capacity;
    //$this-> lhname = $lecturehall1->lh_name;
    //$lecturehall1->update();
    //return $lecturehall1;
    return view('admin.student.adminstudenteditpassword', ['student'=>$student]);
}

public function stchoosetimetable()
{
    $dater = array();
    if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                               return the logged in user details to guest home.mainly it is used in header welcome message.*/
    {
        $dater=student::where('id','=',session()->get('reid'))->first();
//return $dater;
    if(($dater-> subject1)&&($dater-> subject2)&&($dater-> subject3)&&($dater-> subject4)&&($dater-> subject5)&&($dater-> subject6)&&($dater-> subject7)&&!($dater-> subject8)){

        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $datt3 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
        ->get();

        $datt33 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
    ->get();

        $datt4 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
        ->get();

        $datt44 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
    ->get();

        $datt5 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
        ->get();

        $datt55 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
    ->get();

        $datt6 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject6)
        ->get();

        $datt66 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject6)
        ->get();

        $datt7 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject7)
        ->get();

        $datt77 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject7)
    ->get();

        $dat1 = array($datt1,$datt2,$datt3,$datt4,$datt5,$datt6,$datt7);
        $dat2 = array($datt11,$datt22,$datt33,$datt44,$datt55,$datt66,$datt77);
        //return $dat1;
        //return view('students.stutablebcslevel1sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
    }
    elseif(($dater-> subject1)&&($dater-> subject2)&&($dater-> subject3)&&($dater-> subject4)&&($dater-> subject5)&&($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $datt3 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
        ->get();

        $datt33 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
    ->get();

        $datt4 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
        ->get();

        $datt44 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
    ->get();

        $datt5 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
        ->get();

        $datt55 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
    ->get();

        $datt6 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject6)
        ->get();

        $datt66 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
        ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject6)
        ->get();

        $dat1 = array($datt1,$datt2,$datt3,$datt4,$datt5,$datt6);
        $dat2 = array($datt11,$datt22,$datt33,$datt44,$datt55,$datt66);
    }
    elseif(($dater-> subject1)&&($dater-> subject2)&&($dater-> subject3)&&($dater-> subject4)&&($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $datt3 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
        ->get();

        $datt33 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
    ->get();

        $datt4 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
        ->get();

        $datt44 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
    ->get();

        $datt5 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
        ->get();

        $datt55 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject5)
    ->get();

        $dat1 = array($datt1,$datt2,$datt3,$datt4,$datt5);
        $dat2 = array($datt11,$datt22,$datt33,$datt44,$datt55);
    }

    elseif(($dater-> subject1)&&($dater-> subject2)&&($dater-> subject3)&&($dater-> subject4)&&!($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();


        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $datt3 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
        ->get();

        $datt33 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
    ->get();

        $datt4 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
        ->get();

        $datt44 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject4)
    ->get();

        $dat1 = array($datt1,$datt2,$datt3,$datt4);
        $dat2 = array($datt11,$datt22,$datt33,$datt44);
    }

    elseif(($dater-> subject1)&&($dater-> subject2)&&($dater-> subject3)&&!($dater-> subject4)&&!($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $datt3 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
        ->get();

        $datt33 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject3)
    ->get();

        $dat1 = array($datt1,$datt2,$datt3);
        $dat2 = array($datt11,$datt22,$datt33);
    }

    elseif(($dater-> subject1)&&($dater-> subject2)&&!($dater-> subject3)&&!($dater-> subject4)&&!($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $datt2 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
        ->get();

        $datt22 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject2)
    ->get();

        $dat1 = array($datt1,$datt2);
        $dat2 = array($datt11,$datt22);
    }

    elseif(($dater-> subject1)&&!($dater-> subject2)&&!($dater-> subject3)&&!($dater-> subject4)&&!($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $dat1 = array($datt1);
        $dat2 = array($datt11);
    }

    elseif(!($dater-> subject1)&&!($dater-> subject2)&&!($dater-> subject3)&&!($dater-> subject4)&&!($dater-> subject5)&&!($dater-> subject6)&&!($dater-> subject7)&&!($dater-> subject8)){
        $datt1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
        ->get();

        $datt11 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program_id','=',$dater-> program_Id)
        ->where('level','=',$dater-> level)
        ->where('semester','=',$dater-> semester)
        ->where('course_id','=',$dater-> subject1)
    ->get();

        $dat1 = array();
        $dat2 = array();
    }


        if(($dater-> program_Id)=='1' && ($dater-> level)=='level1' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebcslevel1sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='1' && ($dater-> level)=='level1' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
                return view('students.stutablebcslevel1sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }

        }
        elseif(($dater-> program_Id)=='1' && ($dater-> level)=='level2' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebcslevel2sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='1' && ($dater-> level)=='level2' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
                return view('students.stutablebcslevel2sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='1' && ($dater-> level)=='level3' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebcslevel3sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='1' && ($dater-> level)=='level3' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebcslevel3sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level1' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel1sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level1' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel1sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level2' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel2sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level2' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel2sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level3' && ($dater-> semester)== 'semester1'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel3sem1',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }
        elseif(($dater-> program_Id)=='2' && ($dater-> level)=='level3' && ($dater-> semester)== 'semester2'){
            if((sizeof($dat1)==0)&&(sizeof($dat2)==0)){
                return back() -> with('fail',"You are not registered for Courses");
            }
            else{
            return view('students.stutablebsclevel3sem2',['dat1'=> $dat1,'dat2'=> $dat2]);
            }
        }


    }


    //return $dat1;
}

public function sturegister() //view admin's student registraion page.
{
        $dater1=course::all();
        return view('admin.student.sturegistration',['dater1'=> $dater1]);
}

public function deletestudent($id) //delete lecturer using the selected id.
{
        $student = student::find($id);
        $student->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}


}
