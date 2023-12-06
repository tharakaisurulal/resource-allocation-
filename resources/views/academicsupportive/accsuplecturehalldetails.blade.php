@extends('layout.header')
@section("content2")
<li><a href="/academicsupportive/academicsupportivehome">BACK</a></li>
@endsection
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href={{asset('css/lecturehalldetails.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>

</head>
<body>
<h1 id="tit">Lecturehall Details</h1>
    <div class="sec1">

    <div class="card">
        <div class="col-6">
            <img src="/images/R3.jpg" alt=""  width=320px height=500px>
        </div>
        <div class="card-body">
            @foreach (  $dater3 as $data )
            @if (($data->lh_name)=="Lecture Hall 01")
            <h1 class="card-title"> {{$data->lh_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lh_capacity}}<br>
                Ac or Non Ac : {{$data->lh_air_conditioner}}<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/R4.jpg" alt="" width=320px height=500px>
        </div>
        <div class="card-body">
            @foreach (  $dater3 as $data )
                @if (($data->lh_name)=="mini-auditorium")
            <h1 class="card-title">{{$data->lh_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lh_capacity}}<br>
                Ac or Non Ac : {{$data->lh_air_conditioner}}<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>

    <div class="card">
        <img src="/images/R5.jpg" alt="" width=320px height=500px>
        <div class="card-body">
            @foreach (  $dater3 as $data )
                @if (($data->lh_name)=="main-auditorium")
            <h1 class="card-title">{{$data->lh_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lh_capacity}}<br>
                Ac or Non Ac : {{$data->lh_air_conditioner}}<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>
    </div>
</body>
</html>
@endsection
