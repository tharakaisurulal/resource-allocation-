@extends('layout.header')
@section('content2')
        <li><a href="">BACK</a></li>
@endsection

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('cdn')
        <link rel="stylesheet" href="{{asset('css/sturegistration.css')}}">

    </head>
    <body>
        <div class="bdy">
        <form action="{{route('studentstore')}}" method="POST" enctype="multipart/form-data">
        @if(session()->has('success'))
            <div class="alert alert-success div1">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger div1">{{session()->get('fail')}}</div>
        @endif
            @csrf
  <div class="container">

  <h1>Add Timetable</h1>
    <p>Please fill in this form to create Timetable</p>
    <hr>

    <label for="name"><b>Program:</b></label>
    <select name="program" id="faculty">
        <option value="">--Choose Program--</option>
        @foreach ($dater2 as $cdb )
        <option value="{{$cdb->id}}">@php
            echo $cdb->program;
        @endphp</option>
        @endforeach
        </select>

        <label for="name"><b>Course:</b></label>
    <select name="course" id="faculty">
        <option value="">--Choose course--</option>
        @foreach ($dater1 as $cdb1 )
        <option value="{{$cdb1->id}}">@php
            echo $cdb1->course_name;
        @endphp</option>
        @endforeach
        </select>

        <label for="name"><b>Level:</b></label>
    <select name="level" id="faculty">
        <option value="">--Choose course--</option>
        <option value="leve1">Level 1</option>
        <option value="leve2">Level 2</option>
        <option value="leve3">Level 3</option>
        </select>

        <label for="name"><b>Semester:</b></label>
    <select name="semester" id="faculty">
        <option value="">--Choose course--</option>
        <option value="semester1">Semester 1</option>
        <option value="semester2">Semester 2</option>
        </select>

        <label for="name"><b>Day:</b></label>
    <select name="day" id="faculty">
        <option value="">--Choose course--</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        </select>

    <label for="name"><b>Start Time:</b></label>
    <input type="time" name="starttime" id="name" ><br>
    <label class="text-danger span1">@error('starttime')  {{$message}}  @enderror</label><br>

    <label for="name"><b>End Time:</b></label>
    <input type="time" name="endtime" id="name" ><br>
    <label class="text-danger span1">@error('endtime')  {{$message}}  @enderror</label><br>

    <label for="name"><b>Lecturehall:</b></label>
    <select name="lecturehall" id="faculty">
        <option value="">--Choose course--</option>
        @foreach ($dater3 as $cdb3 )
        <option value="{{$cdb3->id}}">@php
            echo $cdb3->lh_name;
        @endphp</option>
        @endforeach
        </select>

        <label for="name"><b>Lab:</b></label>
    <select name="lab" id="faculty">
        <option value="">--Choose course--</option>
        @foreach ($dater4 as $cdb4 )
        <option value="{{$cdb4->id}}">@php
            echo $cdb4->lab_name;
        @endphp</option>
        @endforeach
        </select>

        <label for="name"><b>Lecturer Name:</b></label>
    <select name="lecturername" id="faculty">
        <option value="">--Choose course--</option>
        @foreach ($dater5 as $cdb5 )
        <option value="{{$cdb5->id}}">@php
            echo $cdb5->lec_name;
        @endphp</option>
        @endforeach
        </select>
   <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>



</div>
</body>
</html>
@endsection


