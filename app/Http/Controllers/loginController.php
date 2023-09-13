<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
use App\Models\post;

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

class loginController extends Controller
{
    public function login(Request $request){

if($request){
        $request->validate([
            'name'=> 'required',
            'password'=> 'required|min:5|max:12'
          ]);

          $mv=post::where('name','=',$request -> name)->first();
          //$mv1=$request->all();
          //return $request['remember'];
          if($mv)
          {
            if(Hash::check($request -> password,$mv -> password))
            {
                $request-> session() ->put('reid',$mv->id); //store session variable

                if($request->remember===null){

                }
                else{
                   setcookie('nameid',$request -> name,time()+60);
                   setcookie('password',$request -> password,time()+60);
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
}
}
