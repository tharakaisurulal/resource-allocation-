<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
use App\Models\guestrequest;
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


class guestController extends Controller
{
    public function guesthome()
    {
        $dater = array();
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guesthome',compact('dater'));
        //return view('guest.guesthome');
    }

    public function guestregistration()
    {
        $dater = array();
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guestregistration',compact('dater'));
        //return view('guest.guestregistration');
    }

    public function guestrequest()
    {
        $dater = array();
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guestrequestform',compact('dater'));
        //return view('guest.guestregistration');
    }

    public function gueststore(Request $request)
    {
    //return $request;
        $request->validate([
            'name'=> 'required',
            'faculty'=> 'required',
            'username'=> 'required|unique:guests|unique:admins|unique:lecturers|unique:students|unique:accsupportives',
            'password'=> 'required|unique:guests|min:5|max:12',
            'department'=> 'required',
            'position'=> 'required',
            'mobile'=> 'required',
            'faculty'=> 'required'

          ]);
          //return $request;
    if(($request->password)==($request->password1)){
          if($request->hasfile('photo'))
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/guests/', $filename);

           }
           else{
            $filename=null;
           }



          $guests=guest::create([
            'username'=> $request -> username,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'guest_name'=> $request -> name,
            'guest_faculty'=> $request -> faculty,
            'guest_department'=> $request -> department,
            'guest_position'=> $request -> position,
            'mobile'=> $request -> mobile,
            'photo'=> $filename
            ]);

            $res = $guests ->save();

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


//add details to the guest request table
public function guestreq(Request $request)
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
        'faculty'=> 'required',
        'department'=> 'required',
        //'guest_id'=> 'required',


      ]);
      //return $request;

      $guestsreq=guestrequest::create([
        'name'=> $request -> name,
        'email' => $request -> email,
        'date'=> $request -> date,
        'start_time'=> $request -> starttime,
        'end_time'=> $request -> endtime,
        'hall_name'=> $request -> hallname,
        'faculty'=> $request -> faculty,
        'department'=> $request -> department,
        'reason'=> $request -> note,
        'guest_id'=> $request -> guestid,

        ]);

        $res1 = $guestsreq ->save();

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
        if($res1){
        //return redirect('/') -> withSuccess("you are registered");
        //return back() -> with('success',"you are registered");
        return redirect('/guest/guestrequest') -> with('success',"your request is submitted");
        }
        else{
            return back() -> with('fail',"your request is not submitted, Try again!");
        }


}
public function count(){
$count = DB::table('goods')->count();
return view('admin.adminhome',['count'=>$count]);
//if($count > 0) {
     //more than one raw
//}else {
     //zero raw
//}
}
}
