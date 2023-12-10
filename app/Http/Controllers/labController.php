<?php

namespace App\Http\Controllers;
use App\Models\lab;
use Illuminate\Http\Request;

class labController extends Controller
{
    public function viewlab(){ //view the labs in database.
        $cusdata2= lab::all();
        //return  $cusdata;
        if(count($cusdata2) === 0){  //if labs table is empty it does not return the $cusdata12 because it is empty.
            return view('admin.lab.adminlabopera');
        }
        else{
            return view('admin.lab.adminlabopera',['cusdata2'=> $cusdata2]);
        }
    }

    public function addlab(Request $request){ // add labs.

          $labs=lab::create([
            'lab_name'=> $request -> labname,
            'lab_capacity'=> $request -> labcapacity,
            'lab_air_conditioner'=> $request -> lab_air_conditioner,
            'lab_projector'=> $request -> lab_projector,
            'lab_soundsystem'=> $request -> lab_soundsystem,
        ]);

        $res3 = $labs ->save();
            if($res3){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
                return redirect('/admin/lab/adminlabopera') -> with('success',"successfully registered.");
            }
            else{
                return back() -> with('fail',"Not registered");
            }
}

    public function deletelab($id) //delete lab using the selected id.
{
        $lab = lab::find($id);
        $lab->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updatelab($id)  //to do the update choose the selected id and return details in to edit page.
{
        $lab = lab::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.lab.adminlabedit', ['lab'=>$lab]);

}

public function updatelab1(Request $request,$id) //selected id will be updated using this function.
{

    $lab = lab::find($id);
    //return $request;
        $lab->lab_name = $request -> input('labname');
        $lab->lab_capacity = $request -> input('labcapacity');
        $lab->lab_air_conditioner = $request -> input('lab_air_conditioner');
        $lab->lab_projector = $request -> input('lab_projector');
        $lab->lab_soundsystem = $request -> input('lab_soundsystem');
        $lab->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewlab')->with('success',"Data updated successfully.");

}
}
