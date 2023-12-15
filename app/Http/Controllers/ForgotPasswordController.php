<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

use App\Models\guest;
use App\Models\admin;
use App\Models\student;
use App\Models\lecturer;
use App\Models\accsupportive;

class ForgotPasswordController extends Controller
{
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('forgetPassword');
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
        //return $request;
          $request->validate([
              'email' => 'required|email',
          ]);

          $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('forgetPass', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });

          return back()->with('success', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) {
         return view('forgetPasswordLink', ['token' => $token]);
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              /*'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'*/
              'email' => 'required|email',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('fail', 'Invalid token!');
          }

          $mv=guest::where('username','=',$request -> email)->first(); //choose the table which have entered username.
          $mv1=admin::where('username','=',$request -> email)->first();
          $mv2=accsupportive::where('username','=',$request -> email)->first();
          $mv3=student::where('username','=',$request -> email)->first();
          $mv4=lecturer::where('username','=',$request -> email)->first();

    if($mv!==null){
          $guest = guest::where('username', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
        }
    elseif($mv2!==null){
        $accsupportive = accsupportive::where('username', $request->email)
                    ->update(['password' => Hash::make($request->password)]);
    }
    elseif($mv3!==null){
        $student = student::where('username', $request->email)
                    ->update(['password' => Hash::make($request->password)]);
    }
    elseif($mv4!==null){
        $lecturer = lecturer::where('username', $request->email)
                    ->update(['password' => Hash::make($request->password)]);
    }


          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/loginpage')->with('success', 'Your password has been changed!');
      }
}
