<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guest;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\guestrequest;
use Illuminate\View\View;

use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

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
    public function guesthome() //view the guest home page
    {
        $dater = array();
        if(session()->has('reid')) /*If we are logged in session variable is assign, then we get the id of logged in user and detailas are assign to $dater variable and
                                   return the logged in user details to guest home.mainly it is used in header welcome message.*/
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guesthome',compact('dater'));
        //return view('guest.guesthome');
    }

    public function guestlecturehalldetails() //view the guest lecturehall page
    {
        $dater3=lecturehall::all();
        //return $dater3;
        return view('guest.guestlecturehalldetails',['dater3'=>$dater3]);
    }

    public function guestlab() //view the guest lab page
    {
        $dater4=lab::all();
        //return $dater3;
        return view('guest.guestlab',['dater4'=>$dater4]);

    }


    public function viewguest(){  //view the students in database(inside the admin page).
        $cusdata7= guest::all();
        //return  $cusdata4;
            return view('admin.guest.guestopera',['cusdata7'=> $cusdata7]);

    }

    public function guestregistration() //view guest registration page.
    {
        /*$dater = array();
        if(session()->has('reid'))
        {
            $dater=guest::where('id','=',session()->get('reid'))->first();
        }
        //return $dater;
            return view('guest.guestregistration',compact('dater'));*/
        return view('guest.guestregistration');
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

    public function gueststore(Request $request) //store guest registration details.
    {
    //return $request;
        $request->validate([  //validation part.
            'name'=> 'required',
            'faculty'=> 'required',
            'username'=> 'required|unique:guests|unique:admins|unique:lecturers|unique:students|unique:accsupportives',
            'password'=> 'required|unique:guests|min:5|max:12',
            'department'=> 'required',
            'position'=> 'required',
            'mobile'=> 'required',
            'password1'=> 'required',


          ]);
          //return $request;
    if(($request->password)==($request->password1)){  //if password input and confirm password input are same.
          if($request->hasfile('photo')) //check photo id added or not.
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/guests/', $filename);

           }
           else{ //if photo is not added.
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
            if ($res) {
                // Send a welcome email to the registered user
                Mail::to($request->username)->send(new RegisterMail());
                
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

/*public function gueststore1(Request $request) //store guest registration details.
    {
    //return $request;
        $request->validate([  //validation part.
            'name'=> 'required',
            'faculty'=> 'required',
            'username'=> 'required|unique:guests|unique:admins|unique:lecturers|unique:students|unique:accsupportives',
            'password'=> 'required|unique:guests|min:5|max:12',
            'department'=> 'required',
            'position'=> 'required',
            'mobile'=> 'required',
            'password1'=> 'required',


          ]);
          //return $request;
    if(($request->password)==($request->password1)){  //if password input and confirm password input are same.
          if($request->hasfile('photo')) //check photo id added or not.
           {
               $file = $request->file('photo');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/guests/', $filename);

           }
           else{ //if photo is not added.
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

           $image->save();
//return $request;


            //$student=post::create($request->all());
            //$student->password = Hash::make($request->input('password'));
            //$student->save();
            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
            return redirect('/admin/guest/guestopera') -> with('success',"you are registered,please login now");
            }
            else{
                return back() -> with('fail',"you are not registered");
            }
    }
    else
    {
    return back() -> with('fail',"confirm passsword is not match");
    }
}*/


//add details to the guest request table
public function guestreq(Request $request) //request form details store to database.
{
//return $request;
//$na=session()->get('reid');
    $request->validate([
        //'name'=> 'required',
        //'email'=> 'required',
        'date'=>  'required|date|after:tomorrow',
        'starttime'=> 'required|date_format:H:i',
        'endtime'=> 'required|date_format:H:i|after:starttime',
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
/*public function count(){ //getting the number of guest registered and return it to admin home page.
$count = DB::table('goods')->count();
return view('admin.adminhome',['count'=>$count]);
//if($count > 0) {
     //more than one raw
//}else {
     //zero raw
//}
}*/
        public function updateguest($id) //to do the update choose the selected id and return details in to edit page.
        {
                $guest = guest::find($id);
                //$this-> lhcapacity = $lecturehall1->lh_capacity;
                //$this-> lhname = $lecturehall1->lh_name;
                //$lecturehall1->update();
                //return $student;
                return view('admin.guest.adminguestedit', ['guest'=>$guest]);

        }

        public function updateguest1(Request $request,$id)  //selected id will be updated using this function.
        {
                if(!($request->password)){
                    $guest = guest::find($id);
                    //return $request;
                        $guest->username = $request -> input('username');
                        $guest->guest_name = $request -> input('name');
                        $guest->mobile = $request -> input('mobile');
                        $guest->guest_position = $request -> input('position');
                        $guest->guest_faculty = $request -> input('faculty');
                        $guest->guest_department = $request -> input('department');
                        $guest->update();
                    //return $request;
                    //return $lecturehall;
                    //$lecturehall->update($request->all());
                        //return $lecturehall;
                        return redirect()->route('admin.guest.guestopera')->with('success',"Data updated successfully.");
                }
                else{
                    $guest = guest::find($id);
                    //return $lecturer;
                        $guest->password = Hash::make($request -> input('password'));
                        //$student->last_name = $request -> input('lname');
                        //$student->mobile = $request -> input('mobile');
                        //$student->first_name = $request -> input('photo');
                        //$student->username = $request -> input('username');
                        $guest->update();
                    //return $request;
                    //return $lecturehall;
                    //$lecturehall->update($request->all());
                        //return $lecturehall;
                        return redirect()->route('admin.guest.guestopera')->with('success',"Data updated successfully.");
                }

        }

        public function updateguestpassword($id)  //selected id will be updated using this function.
        {
        //return $id;
            $guest = guest::find($id);
            //$this-> lhcapacity = $lecturehall1->lh_capacity;
            //$this-> lhname = $lecturehall1->lh_name;
            //$lecturehall1->update();
            //return $lecturehall1;
            return view('admin.guest.adminguesteditpassword', ['guest'=>$guest]);
        }

        public function deleteguest($id) //delete course using the selected id.
        {
                $guest = guest::find($id);
                $guest->delete();
                return redirect()->back()-> with('success',"successfully deleted.");
        }

        public function guestregi2() //view the guest registraion in admin page
    {
        //$dater3=lecturehall::all();
        //return $dater3;
        return view('admin.guest.adminguestregistration');
    }



}
