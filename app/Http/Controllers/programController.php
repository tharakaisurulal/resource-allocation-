<?php

namespace App\Http\Controllers;
use App\Models\program;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function viewprogram(){ //view the programs in database.
        $cusdata3= program::all();
        //return  $cusdata;
            return view('admin.program.adminprogramopera',['cusdata3'=> $cusdata3]);

    }

    public function addprogram(Request $request){  // add programs.

          $programs=program::create([
            'program'=> $request -> program,

        ]);

        $res4 = $programs ->save();
            if($res4){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
                return redirect('/admin/program/adminprogramopera') -> with('success',"successfully registered.");
            }
            else{
                return back() -> with('fail',"Not registered");
            }
}

    public function deleteprogram($id) //delete programs using the selected id.
{
        $program = program::find($id);
        $program->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updateprogram($id)  //to do the update choose the selected id and return details in to edit page.
{
        $program = program::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.program.adminprogramedit', ['program'=>$program]);

}

public function updateprogram1(Request $request,$id)  //selected id will be updated using this function.
{

    $program = program::find($id);
    //return $request;
        $program->program = $request -> input('program');
        $program->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewprogram')->with('success',"Data updated successfully.");

}
}
