<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;

use Illuminate\View\View;

class guestController extends Controller
{
    public function gueststore(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'faculty'=> 'nullable',
            'email'=> 'required|unique',
            'password'=> 'required|min:5|max:12',
            'department'=> 'nullable',
            'position'=> 'required',

          ]);

          $guests=guest::create([
            'username'=> $request -> email,
            //'email' => $request -> email,
            'password'=> Hash::make($request -> password),
            'guest_name'=> $request -> name,
            'guest_faculty'=> $request -> name,
            'guest_department'=> $request -> name,
            'guest_position'=> $request -> name,
            'mobile'=> $request -> name,

            ]);


            $res = $posts ->save();
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
