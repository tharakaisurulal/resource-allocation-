<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        <link rel="stylesheet" href={{asset('css/regi.css')}}>

    </head>

    <body>
        <section class="login">
        <div class="box">
            <form action="{{route('gueststore')}}" method="post" enctype="multipart/form-data">
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif

                @if(session()->has('fail'))
                    <div class="alert alert-danger">{{session()->get('fail')}}</div>
                @endif
            @csrf
                <h1> REGISTER </h1>

                <div class="inputBox">
                    <input type="text" name="name" value="{{old('name')}}">
                    <span >Name With Initials </span>
                <i><ion-icon name="person"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label>


                <div class="inputBox">
                    <select name="faculty" id="faculty" value="{{old('faculty')}}">
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
                </div>
                <label class="text-danger span1">@error('faculty')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="department" value="{{old('department')}}">
                    <span>Department</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('department')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="position" value="{{old('position')}}">
                    <span>Position</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('position')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="mobile" value="{{old('mobile')}}">
                    <span>Tel. No</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('mobile')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="file" name="photo" value="{{old('photo')}}">
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('photo')  {{$message}}  @enderror</label>

		<div class="inputBox">
                    <input type="email" name="username">
                    <span>Username</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
        </div>
        <label class="text-danger span1">@error('username')  {{$message}}  @enderror</label>

            <div class="inputBox" >
                <input type="password" name="password">
                <span>Password</span>
                <i><ion-icon name="lock-closed"></ion-icon></i>
            </div>
            <label class="text-danger span1">@error('password')  {{$message}}  @enderror</label>

            <p class="pr">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <input type="submit"value="Register" name="submit">

                <div class="links">
                    <p class="pr">Already have an account?</p>
                    <p><a href="/loginpage">Sign in</a>.</p>
                  </div>

            </form>
        </div>
    </section>


    </body>
</html>
