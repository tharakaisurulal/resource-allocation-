@extends('layout.header')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href={{asset('css/allocate.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>

</head>
<body>
    <div class="sec1">
    <div class="card">
        <div class="col-6">
            <img src="images/R1.jfif" alt=""  width=320px height=500px>
        </div>
        <div class="card-body">
            <h1 class="card-title"> Lecture Hall 01</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="images/R2.jfif" alt="" width=320px height=500px>
        </div>
        <div class="card-body">
            <h1 class="card-title"> Lecture Hall 02</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>

    <div class="card">
        <img src="images/germantown-high-school-performance-arts-center-theater1.jpg" alt="" width=320px height=500px>
        <div class="card-body">
            <h1 class="card-title"> Lecture Hall 03</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>

    <div class="card">
        <img src="images/film-fest-cover.jpg" alt="" width=320px height=500px>
        <div class="card-body">
            <h1 class="card-title">Audiotorium</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>
    </div>
</body>
</html>
@endsection
