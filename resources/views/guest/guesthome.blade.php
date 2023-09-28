@extends('layout.headerFooter')
@section("content1")
    <div class="div3"><img src="{{asset('/uploads/guests/'.$dater->photo) }}" alt="image" class="img1"></div>
    <div class="div2">
        <h6>Welcome!</h6><br>
        <h6>{{$dater->guest_name}}</h6>
    </div>
@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href={{asset('css/guesthome.css')}}>
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
                            <a href=""><span>CLICK</span></a>
                            <a href="/logout"><button type="button" class="btn btn-secondary">LogOut</button></a>
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
                            <a href=""><span>CLICK</span></a>
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
                        <div class="button">
                            <a href=""><span>CLICK</span></a>
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
                            <a href="/guest/request"><span>CLICK</span></a>
                        </div>
                    </div>
            </div>
        </div>



        <div class="card">

            <div class="face front">
                <img src="" alt="" width=300px height=350px>
                <h3> user</h3>
            </div>

            <div class="face back">
                    <div class="back-content center">
                        <h1>home</h1>
                        <h3>{{$dater->guest_name}}</h3>
                    </div>
            </div>
        </div>


    </div>

    </body>
</html>
@endsection
