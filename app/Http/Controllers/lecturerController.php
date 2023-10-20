<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lecturer;
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
    public function lecturerhome() //view the guest home page
    {
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

    public function guestrequest() //view guest request page.
    {
        $dater = array();     //return the details of logged in user to guest request form.
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guestrequestform',compact('dater'));
        //return view('guest.guestregistration');
    }


    public function lecturerstore(Request $request) //store guest registration details.
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
               $file->move('/uploads/lecturers/', $filename);

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

}
