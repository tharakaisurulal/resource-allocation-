<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
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
    public function guestregistration()
    {
        return view('guestregistration');
    }

    public function gueststore(Request $request)
    {
    //return $request;
        $request->validate([
            'name'=> 'required',
            'faculty'=> 'required',
            'username'=> 'required|unique:guests',
            'password'=> 'required|unique:guests|min:5|max:12',
            'department'=> 'required',
            'position'=> 'required',
            'mobile'=> 'required',
            'faculty'=> 'required'

          ]);
          //return $request;

          $guests=guest::create([
            'username'=> $request -> username,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'guest_name'=> $request -> name,
            'guest_faculty'=> $request -> faculty,
            'guest_department'=> $request -> department,
            'guest_position'=> $request -> position,
            'mobile'=> $request -> mobile,

            ]);
//return $request;

            $res = $guests ->save();
            //$student=post::create($request->all());
            //$student->password = Hash::make($request->input('password'));
            //$student->save();
            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            return back() -> with('success',"you are registered");
            }
            else{
                return back() -> with('fail',"you are not registered");
            }
    }

}
