@extends('layout.headerFooter')

@section("content1")
    <div class="header3"><img src="{{asset('/uploads/accsup/'.$dater->photo) }}" alt="image" class="img1"></div>
    <div class="header2">
        <h6>Welcome!</h6><br>
        <h6>{{$dater->acc_name}}</h6>
    </div>
@endsection


@section("content2")
        <li><a href="/logout">LOG OUT</a></li>
        <li><a href="#">ABOUT US</a></li>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href={{asset('css/lecturerhome.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>
<!--------------------card section---------------------------->
<div class="div1">
    <div class="card">

            <div class="face front">
                <img src="/images/main.jpg" alt=""  width=300px height=350px>
                <h3> Lecture Hall</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Lecture Hall</h3>
                        <div class="button">
                            <a href="/academicsupportive/accsuplecturehalldetails"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>


        <div class="card">

            <div class="face front">
                <img src="/images/Lap.jpg" alt="" width=300px height=350px>
                <h3> Labortory</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Labortory</h3>
                        <div class="button">
                            <a href="/academicsupportive/accsuplab"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>

        <div class="card">

            <div class="face front">
                <img src="/images/1523342686phpo9K5NA.jpeg" alt="" width=300px height=350px>
                <h3> Time Table</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Time Table</h3>
                        <div class="dropdown">
                        <div class="button btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <a><span>BCs</span></a>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/tablebcslevel1" >Level 1</a></li>
                            <li><a class="dropdown-item" href="/tablebcslevel2">Level 2</a></li>
                            <li><a class="dropdown-item" href="">Level 3</a></li>
                          </ul>
                        <div class="button btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <a><span>BSc</span></a>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="" >Level 1</a></li>
                            <li><a class="dropdown-item" href="">Level 2</a></li>
                            <li><a class="dropdown-item" href="/tablebsclevel3">Level 3</a></li>
                          </ul>
                        </div>
                    </div>
            </div>
        </div>

        <div class="card">

            <div class="face front">
                <img src="/images/904740.png" alt="" width=300px height=350px>
                <h3> Maintains</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h3> Maintains Form</h3>
                        <div class="button">
                            <a href="/lecturers/request"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </body>
</html>
@endsection
