<?php

namespace App\Http\Controllers;
use App\Models\lecturehall;
use Illuminate\Http\Request;

class lecturehallController extends Controller
{

    public function viewlecturehall(){  //view the lecturehalls in database.
        $cusdata= lecturehall::all();
        //return  $cusdata;
            return view('admin.lecturehall.adminlecturehallopera',['cusdata'=> $cusdata]);

    }

    public function addlecturehall(Request $request){  // add lecturehalls.

          $lecturehalls=lecturehall::create([
            'lh_name'=> $request -> lhname,
            'lh_capacity'=> $request -> lhcapacity,
            'lh_air_conditioner'=> $request -> lh_air_conditioner,
            'lh_projector'=> $request -> lh_projector,
            'lh_soundsystem'=> $request -> lh_soundsystem,
        ]);

        $res1 = $lecturehalls ->save();
            if($res1){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
                return redirect('/admin/lecturehall/adminlecturehallopera') -> with('success',"successfully registered.");
            }
            else{
                return back() -> with('fail',"Not registered");
            }
}

    public function deletelecturehall($id)  //delete lecturehalls using the selected id.
{
        $lecturehall = lecturehall::find($id);
        $lecturehall->delete();
        return redirect()->back()-> with('success',"successfully deleted.");
}

    public function updatelecturehall($id) //to do the update choose the selected id and return details in to edit page.
{
        $lecturehall = lecturehall::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.lecturehall.adminlecturehalledit', ['lecturehall'=>$lecturehall]);

}

public function updatelecturehall1(Request $request,$id)  //selected id will be updated using this function.
{

    $lecturehall = lecturehall::find($id);
    //return $request;
        $lecturehall->lh_name = $request -> input('lhname');
        $lecturehall->lh_capacity = $request -> input('lhcapacity');
        $lecturehall->lh_air_conditioner = $request -> input('lh_air_conditioner');
        $lecturehall->lh_projector = $request -> input('lh_projector');
        $lecturehall->lh_soundsystem = $request -> input('lh_soundsystem');
        $lecturehall->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewlecturehall')->with('success',"Data updated successfully.");

}

}
