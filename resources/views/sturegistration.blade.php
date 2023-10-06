@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">NOTICE</a></li>
        <li><a href="/loginpage">LOGIN</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
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

        <form action="action_page.php">
            @csrf
  <div class="container">

  <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name With Initials</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="name"><b>Faculty</b></label>

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
    <input type="text" placeholder="Enter Department" name="department" id="dpt" required>


    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="psw"><b>Position</b></label>
    <input type="text" placeholder="Enter Position" name="position" id="psw" required>

   <label for="profileImage" class="form-label"><b>Upload Profile Image</b></label>
   <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*">
   <hr>


    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>


  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>




</body>
</html>
@endsection
