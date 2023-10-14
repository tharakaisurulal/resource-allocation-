<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function adminhome() //view admin home page.
    {
        $dater = array();
        if(session()->has('reid')) //getting the details of logged in user.
        {
            $dater=admin::where('id','=',session()->get('reid'))->first();
        }

        $count = DB::table('students')->count();
        $count1 = DB::table('lecturers')->count();
        $count2 = DB::table('accsupportives')->count();
        $count3 = DB::table('guests')->count();
        //return $count3;
        //return $dater;
            return view('admin.adminhome',compact('count','count1','count2','count3','dater'));
        //return view('guest.guesthome');
    }
}
