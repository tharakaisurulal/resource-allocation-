@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">NOTICE</a></li>
        <li><a href="/loginpage">LOGIN</a></li>
@endsection

@section("content")

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/guestregi.css')}}>

    </head>

    <body>
        <section class="regis">
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
                    <input type="text" name="name" value="{{old('name')}}" placeholder="K.M.L.Silva">
                    <span >Name With Initials </span>
                <i><ion-icon name="person"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('name')  {{$message}}  @enderror</label>


                <div class="inputBox">
                    <select name="faculty" id="faculty" value="{{old('faculty')}}">
                        <option value="">--Choose faculty--</option>
                        <option value="Science">Faculty of Science</option>
                        <option value="Management and Finance">Faculty of Management and Finance</option>
                        <option value="Humanities and Social Sciences">Faculty of Humanities and Social Sciences</option>
                        <option value="Fisheries and Marine Sciences and Technology">Faculty of Fisheries and Marine Sciences and Technology</option>
                        <option value="Medicine">Faculty of Medicine</option>
                        <option value="Engineering">Faculty of Engineering</option>
                        <option value="Technology">Faculty of Technology</option>
                        <option value="Agriculture">Faculty of Agriculture</option>
                        </select>
                </div>
                <label class="text-danger span1">@error('faculty')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="department" value="{{old('department')}}"  placeholder="Departmet of Mathematics">
                    <span>Department</span>
                    <i><ion-icon name="school"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('department')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="position" value="{{old('position')}}"  placeholder="Student/Lecturer">
                    <span>Position</span>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('position')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="text" name="mobile" value="{{old('mobile')}}"  placeholder="0717665324">
                    <span>Tel. No</span>
                    <i><ion-icon name="call-sharp"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('mobile')  {{$message}}  @enderror</label>

                <div class="inputBox">
                    <input type="file" name="photo" value="{{old('photo')}}">
                    <span>Add Profile photo</span>
                    <i><ion-icon name="person-circle-sharp"></ion-icon></i>
                </div>
                <label class="text-danger span1">@error('photo')  {{$message}}  @enderror</label>

		<div class="inputBox">
                    <input type="email" name="username"  placeholder="silva@gmail.com">
                    <span>Username</span>
                    <i><ion-icon name="mail-sharp"></ion-icon></i>
        </div>
        <label class="text-danger span1">@error('username')  {{$message}}  @enderror</label>

            <div class="inputBox" >
                <input type="password" name="password">
                <span>Password</span>
                <i><ion-icon name="lock-closed"></ion-icon></i>
            </div>
            <label class="text-danger span1">@error('password')  {{$message}}  @enderror</label>

            <div class="inputBox">
                <input type="password" name="password1">
                <span>Conformed Password</span>
                <i><ion-icon name="lock-closed"></ion-icon></i>
            </div>
            <label class="text-danger span1">@error('password1')  {{$message}}  @enderror</label>

            <p class="pr">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <input type="submit"value="Register" name="submit">

                <div class="links">
                    <p class="pr">Already have an account?</p>
                    <p><a href="/loginpage">Sign in</a>.</p>
                  </div>

            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    </body>
</html>
@endsection
