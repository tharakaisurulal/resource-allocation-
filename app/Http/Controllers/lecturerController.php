<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lecturer;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\lecturerrequest;
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;
//use Cookie;
use Illuminate\Http\Response;
//use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\Cookie;


class lecturerController extends Controller
{
    public function lecturerhome() //view the guest home page       //ok
    {
        //return "mv";
        $dater = array();
        if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                                   return the logged in user details to guest home.mainly it is used in header welcome message.*/
        {
            $dater=lecturer::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('lecturers.lecturerhome',compact('dater'));
        //return view('guest.guesthome');
    }

    public function viewlecturer(){  //view the students in database(inside the admin page).
        $cusdata5= lecturer::all();
        //return  $cusdata4;
        if(count($cusdata5) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
            return view('admin.lecturer.lecopera');
        }
        else{
            return view('admin.lecturer.lecopera',['cusdata5'=> $cusdata5]);
        }
    }

    public function leclecturehalldetails() //view the guest lecturehall page
    {
        $dater3=lecturehall::all();
        //return $dater3;
        return view('lecturers.leclecturehalldetails',['dater3'=>$dater3]);
    }

    public function lecturelab() //view the guest lab page
    {
        $dater4=lab::all();
        //return $dater3;
        return view('lecturers.lecturerlab',['dater4'=>$dater4]);

    }


    public function lecturerregistration() //view guest registration page.          //ok
    {
        /*$dater = array();
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guestregistration',compact('dater'));*/
        return view('lecturer.lecturerregistration');
    }

    public function lecturerrequest() //view guest request page.
    {
        $dater = array();     //return the details of logged in user to guest request form.
        if(session()->has('reid'))
        {
            $dater=lecturer::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('lecturers.lecturerrequestform',compact('dater'));
        //return view('guest.guestregistration');
    }


    public function lecturerstore(Request $request) //store guest registration details.  //ok
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
          if($request->hasfile('lec_photo')) //check photo id added or not.
           {
               $file = $request->file('lec_photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/lecturers/', $filename);

           }
           else{ //if photo is not added.
            $filename=null;
           }



          $lecturers=lecturer::create([
            'username'=> $request -> username,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'lec_name'=> $request -> name,
            'lec_mobile'=> $request -> mobile,
            'lec_photo'=> $filename
            ]);

            $res = $lecturers ->save();

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


//add details to the guest request table
public function lecturerreq(Request $request) //request form details store to database.
{
//return $request;
//$na=session()->get('reid');
    $request->validate([
        //'name'=> 'required',
        //'email'=> 'required',
        'date'=> 'required',
        'starttime'=> 'required',
        'endtime'=> 'required',
        'hallname'=> 'required',
        //'guest_id'=> 'required',


      ]);
      //return $request;
      //return $request ->lecturerid;

      $lecturerreq=lecturerrequest::create([
        'lecturer_id'=> $request -> lecturerid,
        'name'=> $request -> name,
        'email' => $request -> email,
        'date'=> $request -> date,
        'start_time'=> $request -> starttime,
        'end_time'=> $request -> endtime,
        'hall_name'=> $request -> hallname,
        'reason'=> $request -> note,


        ]);

        //return $res3;
        $res3 = $lecturerreq -> save();

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
        if($res3){
        //return redirect('/') -> withSuccess("you are registered");
        //return back() -> with('success',"you are registered");
        return redirect('/lecturers/request') -> with('success',"your request is submitted");
        }
        else{
            return back() -> with('fail',"your request is not submitted, Try again!");
        }


}

public function lecchoosetimetable()
{
    $dater = array();
    if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                               return the logged in user details to guest home.mainly it is used in header welcome message.*/
    {
        $dater=lecturer::where('id','=',session()->get('reid'))->first();

        $data1 = DB::table('timetables')
        ->join('lecturers', 'timetables.lec_id', '=', 'lecturers.id')
        ->join('programs', 'timetables.program_id', '=', 'programs.id')
        ->join('courses', 'timetables.course_id', '=', 'courses.id')
        ->join('lecturehalls', 'timetables.lh_id', '=', 'lecturehalls.id')
    ->select('timetables.*', 'courses.course_name', 'courses.course_code', 'lecturehalls.lh_name', 'programs.program','lecturers.lec_name')
        ->where('lec_id','=',$dater-> id)
        ->get();
    }

    //return $data1;
    return view('lecturers.lectimetable',['data1'=> $data1]);
}

public function updatelecturer($id) //to do the update choose the selected id and return details in to edit page.
{
        $lecturer = lecturer::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $student;
        return view('admin.lecturer.adminlectureredit', ['lecturer'=>$lecturer]);

}

public function updatelecturer1(Request $request,$id)  //selected id will be updated using this function.
{
        if(!($request->password)){
            $lecturer = lecturer::find($id);
            //return $request;
                $lecturer->username = $request -> input('username');
                $lecturer->lec_name = $request -> input('name');
                $lecturer->lec_mobile = $request -> input('mobile');
                $lecturer->update();
            //return $request;
            //return $lecturehall;
            //$lecturehall->update($request->all());
                //return $lecturehall;
                return redirect()->route('admin.lecturer.lectureropera')->with('success',"Data updated successfully.");
        }
        else{
            $lecturer = lecturer::find($id);
            //return $lecturer;
                $lecturer->password = Hash::make($request -> input('password'));
                //$student->last_name = $request -> input('lname');
                //$student->mobile = $request -> input('mobile');
                //$student->first_name = $request -> input('photo');
                //$student->username = $request -> input('username');
                $lecturer->update();
            //return $request;
            //return $lecturehall;
            //$lecturehall->update($request->all());
                //return $lecturehall;
                return redirect()->route('admin.lecturer.lectureropera')->with('success',"Data updated successfully.");
        }

}

public function updatelecturerpassword($id)  //selected id will be updated using this function.
{
//return $id;
    $lecturer = lecturer::find($id);
    //$this-> lhcapacity = $lecturehall1->lh_capacity;
    //$this-> lhname = $lecturehall1->lh_name;
    //$lecturehall1->update();
    //return $lecturehall1;
    return view('admin.lecturer.adminlecturereditpassword', ['lecturer'=>$lecturer]);
}

public function deletelecturer($id) //delete course using the selected id.
{
        $lecturer = lecturer::find($id);
        $lecturer->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}


}
