<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function viewstudent(){  //view the students in database.
        $cusdata4= student::all();
        //return  $cusdata;
        if(count($cusdata4) === 0){  //if students table is empty it does not return the $cusdata4 because it is empty.
            return view('admin.student.stuopera');
        }
        else{
            return view('admin.student.stuopera',['cusdata4'=> $cusdata4]);
        }
    }
}
