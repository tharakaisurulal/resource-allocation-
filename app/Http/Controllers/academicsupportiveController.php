<?php

namespace App\Http\Controllers;
use App\Models\accsupportive;
use App\Models\timetable;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Cookie;


class academicsupportiveController extends Controller
{
    public function academicsupportivehome() //view the guest home page       //ok
    {
        //return "mv";
        $dater = array();
        if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                                   return the logged in user details to guest home.mainly it is used in header welcome message.*/
        {
            $dater=accsupportive::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('academicsupportive.academicsupportivehome',compact('dater'));
        //return view('guest.guesthome');
    }

    public function filtertimetable()
    {
            return view('academicsupportive.filtertimetable');

    }

    public function viewacademicsupportive(){  //view the students in database(inside the admin page).
        $cusdata6= accsupportive::all();
        //return  $cusdata4;
        if(count($cusdata6) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
            return view('admin.academicsupportive.academicsupopera');
        }
        else{
            return view('admin.academicsupportive.academicsupopera',['cusdata6'=> $cusdata6]);
        }
    }

    public function accsupstore(Request $request) //store guest registration details.  //ok
    {
    //return $request;
        $request->validate([  //validation part.
            'name'=> 'required',
            'username'=> 'required|unique:guests|unique:admins|unique:lecturers|unique:students|unique:accsupportives',
            'password'=> 'required|unique:guests|min:5|max:12',
            'mobile'=> 'required',
            'password1'=> 'required'

          ]);
          //return $request;
    if(($request->password)==($request->password1)){  //if password input and confirm password input are same.
          if($request->hasfile('photo')) //check photo id added or not.
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/accsup/', $filename);

           }
           else{ //if photo is not added.
            $filename=null;
           }



          $accsupportives=accsupportive::create([
            'username'=> $request -> username,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'acc_name'=> $request -> name,
            'acc_mobile'=> $request -> mobile,
            'photo'=> $filename
            ]);

            $res = $accsupportives ->save();

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
            return redirect('/loginpage') -> with('success',"you are registered,please login now");
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

public function viewbcs1sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level1')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level1')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel1sem1',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbcs1sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level1')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level1')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel1sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbcs2sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level2')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level2')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel2sem1',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbcs2sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level2')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level2')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel2sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbcs3sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level3')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level3')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel3sem1',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbcs3sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BCs')
        ->where('level','=','level3')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BCs')
        ->where('level','=','level3')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebcslevel3sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbsc1sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level1')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level1')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel1sem1',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbsc1sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level1')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level1')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel1sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbsc2sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level2')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level2')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel2sem1',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbsc2sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level2')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level2')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel2sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function viewbsc3sem1() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level3')
        ->where('semester','=','semester1')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level3')
        ->where('semester','=','semester1')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel3sem1',['data1'=> $data1],['data2'=> $data2]);

}


public function viewbsc3sem2() //view the guest home page       //ok
{
        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        //->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','lecturehalls.lh_name','programs.program','lecturers.lec_name')
        ->where('program','=','BSc')
        ->where('level','=','level3')
        ->where('semester','=','semester2')
    ->get();


        $data2 = DB::table('timetables')
        ->join('accsupportives', 'timetables.acc_id', '=', 'accsupportives.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        //->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
        ->join('labs', 'timetables.lab_id', '=', 'labs.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code','programs.program','labs.lab_name','accsupportives.acc_name')
        ->where('program','=','BSc')
        ->where('level','=','level3')
        ->where('semester','=','semester2')
    ->get();
        //$dater=accsupportive::where('id','=',session()->get('reid'))->first();
        //return $data1;
        //return view('academicsupportive.acasuptablebcslevel1',compact('dater'));
        return view('academicsupportive.acasuptablebsclevel3sem2',['data1'=> $data1],['data2'=> $data2]);

}

public function choosetimetable(Request $request) //store guest registration details.  //ok
{
//return $request;
    $request->validate([  //validation part.
        'radio'=> 'required',
        'radio1'=> 'required'
      ]);
if((($request->radio)==1)&(($request->radio1)==1)){
    return redirect('/academicsupportive/acasuptablebcslevel1sem1');
}
elseif((($request->radio)==1)&(($request->radio1)==2)){
    return redirect('/academicsupportive/acasuptablebcslevel1sem2');
}
elseif((($request->radio)==2)&(($request->radio1)==1)){
    return redirect('/academicsupportive/acasuptablebcslevel2sem1');
}

elseif((($request->radio)==2)&(($request->radio1)==2)){
    return redirect('/academicsupportive/acasuptablebcslevel2sem2');
}

elseif((($request->radio)==3)&(($request->radio1)==1)){
    return redirect('/academicsupportive/acasuptablebcslevel3sem1');
}

elseif((($request->radio)==3)&(($request->radio1)==2)){
    return redirect('/academicsupportive/acasuptablebcslevel3sem2');
}

    }


}
