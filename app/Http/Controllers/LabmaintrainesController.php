<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Labmaintraines;

class LabmaintrainesController extends Controller
{
    public function form()
    {
        return view('academicsupportive.form');
    }

    public function form2()
    {
        return view('academicsupportive.form2');
    }

    public function viewComplaint(Request $req)
{
    // Check if 'user_name' and 'Lab' exist in the request and are not empty
    if (!$req->has('user_name') || empty($req->input('user_name')) || !$req->has('Lab') || empty($req->input('Lab'))) {
        return redirect()->back()->with('error', 'Username and Lab cannot be empty.');
    }

    //return $req;
    // Create a new Labmaintraines instance with the form data
    $labComplaint = new Labmaintraines([
        'user_name' => $req->input('user_name'),
        'lab' => $req->input('Lab'),
        'lap_pc' => $req->has('lap_pc'),
        'a_c' => $req->has('a_c'),
        'fan' => $req->has('fan'),
        'projector' => $req->has('projector'),
        'sound' => $req->has('sound'),
        'light' => $req->has('light'),
        'other' => $req->input('other'),
        'add_comment' => $req->input('add_comment'),
    ]);

    // Save the new Lab complaint
    $labComplaint->save();

    // Retrieve all Labmaintraines data
    $labComplaints = Labmaintraines::all();

    // Pass the data to the view and include a success message
    return view('admin.complains', [
        'labComplaints' => $labComplaints,
        'hallComplaints' => [],
    ])->with('success', 'Form is submitted Successfully');
}


    public function viewhallComplaint(Request $req)
    {

        // Create a new hallmaintraines instance with the form data
        $hallmaintraines = new hallmaintraines([
            'user_name' => $req->input('user_name'),
            'hall' => $req->input('hall'),
            'a_c' => $req->has('a_c'),
            'fan' => $req->has('fan'),
            'projector' => $req->has('projector'),
            'sound' => $req->has('sound'),
            'light' => $req->has('light'),
            'chair' => $req->has('chair'),
            'other' => $req->input('other'),
            'add_comment' => $req->input('add_comment'),
        ]);

        // Save the new hall complaint
        $hallmaintraines->save();

        // Retrieve all hallmaintraines data
        $hallComplaints = hallmaintraines::all();

        // Pass the data to the view and include a success message
        /*return view('admin.complains', [
            'labComplaints' => [],
            'hallComplaints' => $hallComplaints,
        ])->with('success', 'Form is submitted Successfully');*/
    }

    // public function viewLabComplaints()
    // {
    //     $labComplaints = Labmaintraines::all();

    //     return view('lab_complaints', ['labComplaints' => $labComplaints]);
    // }

    public function viewlabcom() //view the timetable opera page
    {
        //$dater1 = array();
        $labComplaints = Labmaintraines::all();
            return view('admin.complains',['labComplaints'=> $labComplaints]);
        //return $dater1;
            //return view('admin.timetable.addtimetable',compact('dater1'));
        //return view('guest.guesthome');

    }

}
