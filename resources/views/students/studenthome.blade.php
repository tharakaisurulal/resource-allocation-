@extends('layout.headerFooter')

@section("content1")
    <div class="header3"><img src="{{asset('/uploads/students/'.$dater->photo) }}" alt="image" class="img1"></div>
    <div class="header2">
        <h6>Welcome! {{$dater->first_name." ".$dater->last_name}}</h6><br>
        <h6>You are login as a Student.</h6>
    </div>
@endsection

@section("content2")
        <li><a href="/logout">LOG OUT</a></li>
        <li><a href="/admin/student/profile">PROFILE</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/lecturerhome.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>

<!--------------------card section---------------------------->
<div class="div1">

    <div class="card">

            <div class="face front">
                <img src="/images/profi.jpeg" alt=""  width=300px height=350px>
                <h3> Profile</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Profile</h3>
                        <div class="button">
                            <a href="/admin/student/profile"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>


        <!--<div class="card">

            <div class="face front">
                <img src="/images/Lap.jpg" alt="" width=300px height=350px>
                <h3> Labortory</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Labortory</h3>
                        <div class="button">
                            <a href="/students/lab"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>-->




        <div class="card">

            <div class="face front">
                <img src="/images/1523342686phpo9K5NA.jpeg" alt="" width=300px height=350px>
                <h3> Time Table</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Time Table</h3>
                        <div class="button">
                            <a href="/students/viewtimetable"><span>CLICK</span></a>
                        </div>
                        <div>
                            @if(session()->has('success'))
                            <div class="alert alert-success div5">{{session()->get('success')}}</div>
                        @endif

                        @if(session()->has('fail'))
                            <div class="alert alert-danger">{{session()->get('fail')}}</div>
                        @endif
                        </div>
                    </div>
            </div>
        </div>

    </div>

    </body>
</html>
@endsection

