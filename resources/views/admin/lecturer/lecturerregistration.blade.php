@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
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
        <form action="{{route('lecturerstore')}}" method="POST" enctype="multipart/form-data">
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

    <label for="name"><b>Name with Initials:</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" >
    <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label><br>

    <label for="psw"><b>Tel. No:</b></label>
    <input type="text" placeholder="Enter Position" name="mobile" id="psw" >
    <label class="text-danger span1">@error('mobile')  {{$message}}  @enderror</label><br>

   <label for="profileImage" class="form-label"><b>Upload Profile Image:</b></label>
   <input type="file" class="form-control" id="profileImage" name="lec_photo" accept="image/*">
   <label class="text-danger span1">@error('lec_photo')  {{$message}}  @enderror</label><br>

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
