@extends('layout.headerFooter')
@section("content1")
    <div class="header3"><img src="{{asset('/uploads/guests/'.$dater->photo) }}" alt="image" class="img1"></div>
    <div class="header2">
        <h6>Welcome! {{$dater->guest_name}}</h6><br>
        <h6>You are login as a guest</h6>
    </div>
@endsection

@section("content2")
        <li><a href="/logout">LOG OUT</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/guesthome.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>


<!--------------------card section---------------------------->
<div class="div1">
    <div class="card">

            <div class="face front">
                <img src="/images/main1.jpg" alt=""  width=300px height=350px>
                <h3> Lecture Hall</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Lecture Hall</h3>
                        <div class="button">
                            <a href="/guest/guestlecturehalldetails"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>


        <div class="card">

            <div class="face front">
                <img src="/images/lab1.jpeg" alt="" width=300px height=350px>
                <h3> Laboratory</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Laboratory</h3>
                        <div class="button">
                            <a href="/guest/lab"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="card">

            <div class="face front">
                <img src="/images/904740.png" alt="" width=300px height=350px>
                <h3> Request </h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Request Form</h3>
                        <div class="button">
                            <a href="/guest/guestrequest"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </body>
</html>
@endsection
