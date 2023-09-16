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

class loginController extends Controller
{

    public function loginpage()
    {
        return view('Login');
    }

    public function home()
    {
        return view('home');
    }

    public function forgetpassword()
    {
        return view('forgetpassword');
    }


    public function login(Request $request){

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


                return redirect('/home');
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


}

public function logout()
    {
        if(session()->has('reid'))
        {
            session()->pull('reid');
            return redirect('/loginpage');
        }
    }


}
