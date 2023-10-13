<?php

namespace App\Http\Controllers;
use App\Models\lab;
use Illuminate\Http\Request;

class labController extends Controller
{
    public function viewlab(){
        $cusdata2= lab::all();
        //return  $cusdata;
        if(count($cusdata2) === 0){
            return view('admin.lab.adminlabopera');
        }
        else{
            return view('admin.lab.adminlabopera',['cusdata2'=> $cusdata2]);
        }
    }

    public function addlab(Request $request){

          $labs=lab::create([
            'lab_name'=> $request -> labname,
            'lab_capacity'=> $request -> labcapacity,
            'lab_air_conditioner'=> $request -> lab_air_conditioner,
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

    public function deletelab($id)
{
        $lab = lab::find($id);
        $lab->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updatelab($id)
{
        $lab = lab::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.lab.adminlabedit', ['lab'=>$lab]);

}

public function updatelab1(Request $request,$id)
{

    $lab = lab::find($id);
    //return $request;
        $lab->lab_name = $request -> input('labname');
        $lab->lab_capacity = $request -> input('labcapacity');
        $lab->lab_air_conditioner = $request -> input('lab_air_conditioner');
        $lab->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewlab')->with('success',"Data updated successfully.");

}
}
