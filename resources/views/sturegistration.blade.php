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
    <br>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


  <div class="container">
  <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name With Initials</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="name"><b>Student No</b></label>
    <input type="text" placeholder="Enter Student No" name="student no" id="student no" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    

 

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