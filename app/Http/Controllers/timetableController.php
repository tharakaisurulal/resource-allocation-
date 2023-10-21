<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\program;
use App\Models\lecturehall;
use App\Models\lab;
use App\Models\lecturer;
use Illuminate\Http\Request;

class timetableController extends Controller
{
    public function addtimetable() //view the guest home page
    {
        //$dater1 = array();
            $dater1=course::all();
            $dater2=program::all();
            $dater3=lecturehall::all();
            $dater4=lab::all();
            $dater5=lecturer::all();
            return view('admin.timetable.addtimetable',['dater1'=> $dater1,'dater2'=> $dater2,'dater3'=> $dater3,'dater4'=> $dater4,'dater5'=> $dater5]);
        //return $dater1;
            //return view('admin.timetable.addtimetable',compact('dater1'));
        //return view('guest.guesthome');
    }
}
