@extends('layout.header')
@section('content2')
        <li><a href="/admin/student/stuopera">BACK</a></li>
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

  <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>First Name:</b></label>
    <input type="text" placeholder="Enter Name" name="fname" id="name" >
    <label class="text-danger span1">@error('fname')  {{$message}}  @enderror</label><br>

    <label for="name"><b>Last Name:</b></label>
    <input type="text" placeholder="Enter Name" name="lname" id="name" >
    <label class="text-danger span1">@error('lname')  {{$message}}  @enderror</label><br>

    <!--<label for="name"><b>Faculty</b></label>
    <select name="faculty" id="faculty">
        <option value="">--Choose faculty--</option>
        <option value="op1">Faculty of Science</option>
        <option value="op2">Faculty of Management and Finance</option>
        <option value="op3">Faculty of Humanities and Social Sciences	</option>
        <option value="op4">Faculty of Fisheries and Marine Sciences and Technology</option>
        <option value="op5">Faculty of Medicine</option>
        <option value="op6">Faculty of Engineering</option>
        <option value="op7">Faculty of Technology</option>
        <option value="op7">Faculty of Agriculture</option>
        </select>


    <label for="name"><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="department" id="dpt" required>-->

    <label for="psw"><b>Tel. No:</b></label>
    <input type="text" placeholder="Enter Position" name="mobile" id="psw" >
    <label class="text-danger span1">@error('mobile')  {{$message}}  @enderror</label><br>

   <label for="profileImage" class="form-label"><b>Upload Profile Image:</b></label>
   <input type="file" class="form-control" id="profileImage" name="photo" accept="image/*">
   <label class="text-danger span1">@error('photo')  {{$message}}  @enderror</label><br>

   <label for="name"><b>Degree Program:</b></label>
   <select name="program" id="faculty">
       <option value="">--Choose subject--</option>
       <option value="1">BCs</option>
       <option value="2">BSc</option>
       </select>

    <label for="name"><b>Level:</b></label>
    <select name="level" id="faculty">
        <option value="">--Choose Level--</option>
        <option value="level1">Level 1</option>
        <option value="level2">Level 2</option>
        <option value="level3">Level 3</option>
        </select>
    <label class="text-danger span1">@error('level')  {{$message}}  @enderror</label><br>

    <label for="name"><b>Semester:</b></label>
    <select name="semester" id="faculty">
        <option value="">--Choose course--</option>
        <option value="semester1">Semester 1</option>
        <option value="semester2">Semester 2</option>
        </select>
    <label class="text-danger span1">@error('semester')  {{$message}}  @enderror</label><br>

   <label for="name"><b>Subject 1:</b></label>
    <select name="subject1" id="faculty">
        <option value="">--Choose subject--</option>
        @foreach ($dater1 as $cdb1 )
        <option value="{{$cdb1->id}}">@php
            echo $cdb1->course_name;
        @endphp</option>
        @endforeach
        </select>
        <label class="text-danger span1">@error('subject1')  {{$message}}  @enderror</label><br>

        <label for="subject2"><b>Subject 2:</b></label>
    <select name="subject2" id="faculty">
        <option value="">--Choose subject--</option>
        @foreach ($dater1 as $cdb1 )
        <option value="{{$cdb1->id}}">@php
            echo $cdb1->course_name;
        @endphp</option>
        @endforeach
        </select>
        <label class="text-danger span1">@error('subject2')  {{$message}}  @enderror</label><br>

        <label for="subject3"><b>Subject 3:</b></label>
    <select name="subject3" id="faculty">
        <option value="">--Choose subject--</option>
        @foreach ($dater1 as $cdb1 )
        <option value="{{$cdb1->id}}">@php
            echo $cdb1->course_name;
        @endphp</option>
        @endforeach
        </select>
        <label class="text-danger span1">@error('subject3')  {{$message}}  @enderror</label><br>

        <label for="subject4"><b>Subject 4:</b></label>
    <select name="subject4" id="faculty">
        <option value="">--Choose subject--</option>
        @foreach ($dater1 as $cdb1 )
        <option value="{{$cdb1->id}}">@php
            echo $cdb1->course_name;
        @endphp</option>
        @endforeach
        </select>
        <label class="text-danger span1">@error('subject4')  {{$message}}  @enderror</label><br>

        <!--<label for="email"><b>Username:</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" >
    <label class="text-danger span1">@error('email')  {{$message}}  @enderror</label><br>-->

    <label for="email"><b>Username:</b></label>
    <input type="email" placeholder="Enter Email" name="username" id="email" >
    <label class="text-danger span1">@error('username')  {{$message}}  @enderror</label><br>

    <label for="password"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" >
    <label class="text-danger span1">@error('password')  {{$message}}  @enderror</label><br>

    <label for="password1"><b>Confirm Password:</b></label>
    <input type="password" placeholder="ReEnter Password" name="password1" id="password1" >
    <label class="text-danger span1">@error('password1')  {{$message}}  @enderror</label><br>
   <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>



</div>
</body>
</html>
@endsection
