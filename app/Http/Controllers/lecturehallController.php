<?php

namespace App\Http\Controllers;
use App\Models\lecturehall;
use Illuminate\Http\Request;

class lecturehallController extends Controller
{

    public function viewlecturehall(){
        $cusdata= lecturehall::all();
        //return  $cusdata;
        if(count($cusdata) === 0){
            return view('admin.adminlecturehallopera');
        }
        else{
            return view('admin.adminlecturehallopera',['cusdata'=> $cusdata]);
        }
    }

    public function addlecturehall(Request $request){

          $lecturehalls=lecturehall::create([
            'lh_name'=> $request -> lhname,
            'lh_capacity'=> $request -> lhcapacity,
            'lh_air_conditioner'=> $request -> lh_air_conditioner,
        ]);

        $res1 = $lecturehalls ->save();
            if($res1){
            //return redirect('/') -> withSuccess("you are registered");
            //return back() -> with('success',"you are registered");
                return redirect('/admin/adminlecturehallopera') -> with('success',"successfully registered.");
            }
            else{
                return back() -> with('fail',"Not registered");
            }
}

    public function deletelecturehall($id)
{
        $lecturehall = lecturehall::find($id);
        $lecturehall->delete();
        return redirect()->back();
}

    public function updatelecturehall($id)
{
        $lecturehall = lecturehall::find($id);
        //$this-> lhcapacity = $lecturehall1->lh_capacity;
        //$this-> lhname = $lecturehall1->lh_name;
        //$lecturehall1->update();
        //return $lecturehall1;
        return view('admin.adminlecturehalledit', ['lecturehall'=>$lecturehall]);

}

public function updatelecturehall1(Request $request,$id)
{

    $lecturehall = lecturehall::find($id);
    //return $request;
        $lecturehall->lh_name = $request -> input('lhname');
        $lecturehall->lh_capacity = $request -> input('lhcapacity');
        $lecturehall->lh_air_conditioner = $request -> input('lh_air_conditioner');
        $lecturehall->update();
    //return $request;
    //return $lecturehall;
    //$lecturehall->update($request->all());
        //return $lecturehall;
        return redirect()->route('viewlecturehall')->with('success',"Data updated successfully.");

}

}
