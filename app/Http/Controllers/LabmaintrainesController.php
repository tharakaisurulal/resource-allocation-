<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Labmaintraines;

class LabmaintrainesController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function viewcomplain(Request $req)
    {
        $Labmaintraines = new Labmaintraines([
            'user_name' => $req->input('user_name'),
            'lab' => $req->input('Lab'), // Use 'Lab' instead of 'lab' to match the form field name
            'lap/pc' => $req->has('lap/pc'), // Use 'has' to check if the checkbox is checked
            'a_c' => $req->has('a/c'),
            'fan' => $req->has('fan'),
            'projector' => $req->has('projector'),
            'sound' => $req->has('sound'),
            'light' => $req->has('light'),
            'other' => $req->input('other'),
            'add_comment' => $req->input('add_comment'), // Use 'Ad com' instead of 'Ad_com' to match the form field name
        ]);

        $Labmaintraines->save();

        return redirect()->back()->with('success', 'Form is submitted Successfully'); // Use redirect()->back() to return back to the form
    }
}
