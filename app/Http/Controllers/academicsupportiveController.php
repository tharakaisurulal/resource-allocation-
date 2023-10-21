<?php

namespace App\Http\Controllers;
use App\Models\accsupportive;
use Illuminate\Http\Request;

class academicsupportiveController extends Controller
{
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
