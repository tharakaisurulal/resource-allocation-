<?php

namespace App\Http\Controllers;
use App\Models\accsupportive;
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

}
