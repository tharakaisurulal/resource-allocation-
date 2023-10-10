@extends('layout.header')
@section("content2")
<li><a href="/lecturers/lecturerhome">BACK</a></li>
@endsection
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/style1.css')}}>
    <link rel="stylesheet" href={{asset('css/lecturerLab.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>
    <div class="div1">
    <div class="card">
        <div class="col-6">
            <img src="/images/OIP.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            <h1 class="card-title"> Laboratory 01</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/computer.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            <h1 class="card-title"> Laboratory 02</h1>
            <p class="card-info">
                    Capacity :     <br>
                    Ac or Non Ac : <br>
                    Location
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/computer1.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            <h1 class="card-title">Reserach Lab</h1>
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
