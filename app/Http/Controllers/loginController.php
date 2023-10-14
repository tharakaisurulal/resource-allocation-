<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\guest;
use App\Models\admin;
use App\Models\student;

class loginController extends Controller
{

    public function loginpage() //view login page.
    {
        return view('Login');
    }

   // public function home()
    //{
       // return view('home');
    //}

    public function forgetpassword() //view forget password page.
    {
        return view('forgetpassword');
    }


    /*public function login1(Request $request){

      //return $request;
      if(($request->user)=="Guest"){
      $mv=guest::where('username','=',$request -> username)->first();
      //return $mv;
      if($mv)
      {
        if(Hash::check($request -> password,$mv -> password))
        {
            $request-> session() ->put('reid',$mv->id);
         //$na=session()->get('reid');
         //return $na;
            if($request->remember===null){
                //$na=session()->get('reid');
                //return $na;
            }
            else{
               setcookie('nameid',$request -> username,time()+60);
               setcookie('password',$request -> password,time()+60);
               //return $request->remember;
            }


                //return redirect('/home');
                return redirect('/guest/guesthome');
        }

        else{
            return back() -> with('fail',"this password is not match");
            }

      }

      else
      {
        return back() -> with('fail',"this username is not registered");
      }
    }

    elseif(($request->user)=="Admin"){
        $mv=admin::where('username','=',$request -> username)->first();
        //return $mv;
        if($mv)
        {
          if(Hash::check($request -> password,$mv -> password))
          {
              $request-> session() ->put('reid',$mv->id);
           //$na=session()->get('reid');
           //return $na;
              if($request->remember===null){
                  //$na=session()->get('reid');
                  //return $na;
              }
              else{
                 setcookie('nameid',$request -> username,time()+60);
                 setcookie('password',$request -> password,time()+60);
                 //return $request->remember;
              }


                  //return redirect('/home');
                  return redirect('/admin/adminhome');
          }

          else{
              return back() -> with('fail',"this password is not match");
              }

        }

        else
        {
          return back() -> with('fail',"this username is not registered");
        }
    }

    elseif(($request->user)=="Lecturer"){
        return view('home1');
    }

    elseif(($request->user)=="Student"){
        return view('home1');
    }

    elseif(($request->user)=="Accademic_Supportive"){
        return view('home1');
    }

    elseif(($request->user)==""){
        //return view('home1');
        return back() -> with('fail',"please choose the user");
    }


}*/

public function logout() //logout function
    {
        if(session()->has('reid'))
        {
            session()->pull('reid');
            return redirect('/loginpage');
        }
    }



    public function login(Request $request){ //login function

        $mv=guest::where('username','=',$request -> username)->first(); //choose the table which have entered username.
        $mv1=admin::where('username','=',$request -> username)->first();
        //$mv2=accsupportive::where('username','=',$request -> username)->first();
        $mv3=student::where('username','=',$request -> username)->first();
        //$mv4=lecturer::where('username','=',$request -> username)->first();
        //$nm=['mv',$mv];
        //$nm1=['mv1',$mv1];

        //return $request;
if($mv!==null){ //if it is guest.
    //return $mv;
    if(Hash::check($request -> password,$mv -> password)) //check the entered password and guest table password.
          {
              $request-> session() ->put('reid',$mv->id); //assign session variable.
           //$na=session()->get('reid');
           //return $na;
              if($request->remember===null){ //remember me function
                  //$na=session()->get('reid');
                  //return $na;
              }
              else{
                 setcookie('nameid',$request -> username,time()+60);
                 setcookie('password',$request -> password,time()+60);
                 //return $request->remember;
              }


                  //return redirect('/home');
                  return redirect('/guest/guesthome');
          }

          else{ //entered password is not matched.
              return back() -> with('fail',"this password is not match");
              }
}
elseif($mv1!==null){
    //return $mv1;
    if(Hash::check($request -> password,$mv1 -> password))
            {
                $request-> session() ->put('reid',$mv1->id);
             //$na=session()->get('reid');
             //return $na;
                if($request->remember===null){
                    //$na=session()->get('reid');
                    //return $na;
                }
                else{
                   setcookie('nameid',$request -> username,time()+60);
                   setcookie('password',$request -> password,time()+60);
                   //return $request->remember;
                }


                    //return redirect('/home');
                    return redirect('/admin/adminhome');
            }

            else{
                return back() -> with('fail',"this password is not match");
                }

}

/*elseif($mv2!==null){
    //return $mv1;
}*/

elseif($mv3!==null){
    if(Hash::check($request -> password,$mv3 -> password))
            {
                $request-> session() ->put('reid',$mv3->id);
             //$na=session()->get('reid');
             //return $na;
                if($request->remember===null){
                    //$na=session()->get('reid');
                    //return $na;
                }
                else{
                   setcookie('nameid',$request -> username,time()+60);
                   setcookie('password',$request -> password,time()+60);
                   //return $request->remember;
                }


                    //return redirect('/home');
                    return redirect('/students/studenthome');
            }

            else{
                return back() -> with('fail',"this password is not match");
                }
}

/*elseif($mv4!==null){
    //return $mv1;
}*/

else
        {
          return back() -> with('fail',"this username is not registered");
        }














      /*elseif(($request->user)=="Lecturer"){
          return view('home1');
      }

      elseif(($request->user)=="Student"){
          return view('home1');
      }

      elseif(($request->user)=="Accademic_Supportive"){
          return view('home1');
      }

      elseif(($request->user)==""){
          //return view('home1');
          return back() -> with('fail',"please choose the user");
      }*/


  }


}

//}
