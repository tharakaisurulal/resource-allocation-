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
                return redirect('/admin/adminlecturehallopera') -> with('success',"you are registered,please login now");
            }
            else{
                return back() -> with('fail',"you are not registered");
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
        $lecturehall1 = lecturehall::find($id);
        //$lecturehall1->update();
        //return $lecturehall1;
        //return view('admin.adminlecturehallopera', compact('lecturehall1'));
}

}
