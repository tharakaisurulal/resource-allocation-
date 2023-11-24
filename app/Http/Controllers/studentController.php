<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;

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
        if(count($cusdata4) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
            return view('admin.student.stuopera');
        }
        else{
            return view('admin.student.stuopera',['cusdata4'=> $cusdata4]);
        }
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
            'subject1'=> $request -> subject1,
            'subject2'=> $request -> subject2,
            'subject3'=> $request -> subject3,
            'subject4'=> $request -> subject4

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
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.student.adminstudentedit', ['student'=>$student]);

}

public function updatestudent1(Request $request,$id)  //selected id will be updated using this function.
{

    $student = student::find($id);
    //return $request;
        $student->first_name = $request -> input('fname');
        $student->last_name = $request -> input('lname');
        $student->mobile = $request -> input('mobile');
        //$student->first_name = $request -> input('photo');
        $student->username = $request -> input('username');
        $student->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('admin.student.stuopera')->with('success',"Data updated successfully.");

}

public function updatestudentpassword(Request $request,$id)  //selected id will be updated using this function.
{

    /*$student = student::find($id);
    return $request;
    if(($request -> oldpassword)==($student -> password))
    return $request;
        //$student->first_name = $request -> input('fname');
        //$student->last_name = $request -> input('lname');
        //$student->mobile = $request -> input('mobile');
        //$student->first_name = $request -> input('photo');
        //$student->username = $request -> input('username');
        //$student->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('admin.student.stuopera')->with('success',"Data updated successfully.");*/

}
}
