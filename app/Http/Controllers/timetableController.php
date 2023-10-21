<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class timetableController extends Controller
{
    public function addtimetable() //view the guest home page
    {
        $dater1 = array();
            $dater1=course::all();

        //return $dater1;
            return view('admin.timetable.addtimetable',compact('dater1'));
        //return view('guest.guesthome');
    }
}
