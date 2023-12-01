<?php

namespace App\Http\Controllers;
use App\Models\booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function viewguestpage()
    {
        $event = Array();
        $bookings=booking::all();

        foreach ($bookings as $booking) {
           $event[]= [ 'title'=> $booking -> title,
                        'start'=> $booking -> start_time,
                         'end'=> $booking -> end_time,
        ];
        }
        //return  $event;
        return view('guestpage',['event'=>$event]);
        //return view('home1',['event'=>$event]);
    }


    public function addevent()
    {
        return view('admin.events.addevent');
    }


    public function deletevent()
    {
        return view('deletevent');
    }

    public function editevent()
    {
        return view('updatevent');
    }

    public function storer(Request $request)
    {

          $bookings=booking::create([
            'title'=> $request -> name,
            'start_time' => $request -> start,
            'end_time'=> $request -> end
            ]);


            $res = $bookings ->save();
            //$student=post::create($request->all());
            //$student->password = Hash::make($request->input('password'));
            //$student->save();
            if($res){
            //return redirect('/') -> withSuccess("you are registered");
            return back() -> with('success',"you are registered");
            }
            else{
                return back() -> with('fail',"you are not registered");
            }
    }

    public function deleter(Request $request){

        $deleted = DB::table('bookings')->where('title',$request -> name)->delete();


        //return view('view1');
        //return  $affected;
        return redirect()->route('delevent');
        }


    public function editer(Request $request){

            $affected = DB::table('bookings')
                  ->where('title', $request -> name)
                  ->update(['start_time' => $request -> start]);


            //return view('view1');
            //return  $affected;
            return redirect()->route('editevent');
            }
}
