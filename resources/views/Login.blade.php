@extends('layout.header')
@section('content2')
        <li><a href="/">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#">NOTICE</a></li>
        <li><a href="/guest/guestregistration">REGISTER</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lecture hall Allocation</title>
        @include('cdn')
        <link rel="stylesheet" href={{asset('css/Login.css')}}>
    </head>

    <body>
        @php
        if(isset($_COOKIE['nameid']) && isset($_COOKIE['password'])){
            $loginname=$_COOKIE['nameid'];
            $loginpassword=$_COOKIE['password'];
            $is_remember="checked='checked'";
        }
        else{
            $loginname='';
            $loginpassword='';
            $is_remember='';
        }
        @endphp


        <section class="login">
        <div class="box">
            <form action="{{route('login')}}" method="post">
                @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif

            @if(session()->has('fail'))
                <div class="alert alert-danger">{{session()->get('fail')}}</div>
            @endif
                @csrf
                <h1> LOGIN </h1>

                <!--<div class="inputBox">
                    <select name="user" id="userid">
                        <option value=""><span>--Login As--</span></option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Student">Student</option>
                        <option value="Accademic_Supportive">Accademic-Supportive</option>
                        <option value="Guest">Guest</option>
                        <option value="Admin">Admin</option>
                        </select>
                </div>-->

                <div class="inputBox" >
                    <input type="text" name="username" value="{{$loginname}}">
                    <span>Username</span>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>

                <div class="inputBox">
                    <input type="password" name="password" value="{{$loginpassword}}">
                    <span>Password</span>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>

                <div class="links">
                    <a href="/forgetpassword">Forget Password?</a>
                        <div>
                            <input type="checkbox" name="remember" {{$is_remember}}> <label class="label1">Remember Me</label>
                        </div>
                </div>

                <div class="links">
                    <input type="submit"value="login">
                        <div class="link2">
                            <a href="/guest/guestregistration">Register</a>
                        </div>
                </div>

            </form>
        </div>
    </section>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
@endsection
