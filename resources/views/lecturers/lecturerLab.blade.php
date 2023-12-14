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
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('css/lecturerLab.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>
<body>
    <div class="div1">

    <div class="card">

        <div class="col-6">
            <img src="/images/mini1.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            @foreach (  $dater4 as $data )
            @if (($data->lab_name)=="Computer lab 01")
            <h1 class="card-title">{{$data->lab_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lab_capacity}}<br>
                Ac or Non Ac : @if ($data->lab_air_conditioner==null)
                                no
                            @else
                                {{ $data->lab_air_conditioner }}
                            @endif<br>
                Projector : @if ($data->lab_projector==null)
                            no
                        @else
                            {{$data->lab_projector}}
                        @endif<br>
                Sound System : @if ($data->lab_soundsystem==null)
                            no
                        @else
                            {{$data->lab_soundsystem}}
                        @endif<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/mini2.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            @foreach (  $dater4 as $data )
            @if (($data->lab_name)=="Computer lab 02")
            <h1 class="card-title">{{$data->lab_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lab_capacity}}<br>
                Ac or Non Ac : @if ($data->lab_air_conditioner==null)
                                no
                            @else
                                {{ $data->lab_air_conditioner }}
                            @endif<br>
                Projector : @if ($data->lab_projector==null)
                            no
                        @else
                            {{$data->lab_projector}}
                        @endif<br>
                Sound System : @if ($data->lab_soundsystem==null)
                            no
                        @else
                            {{$data->lab_soundsystem}}
                        @endif<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/lab1.jpeg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            @foreach (  $dater4 as $data )
            @if (($data->lab_name)=="Computer lab 03")
            <h1 class="card-title">{{$data->lab_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lab_capacity}}<br>
                Ac or Non Ac : @if ($data->lab_air_conditioner==null)
                                no
                            @else
                                {{ $data->lab_air_conditioner }}
                            @endif<br>
                Projector : @if ($data->lab_projector==null)
                            no
                        @else
                            {{$data->lab_projector}}
                        @endif<br>
                Sound System : @if ($data->lab_soundsystem==null)
                            no
                        @else
                            {{$data->lab_soundsystem}}
                        @endif<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>

    <div class="card">
        <div class="col-6">
            <img src="/images/special1.jpg" alt="" width="320px" height="500px">
        </div>
        <div class="card-body">
            @foreach (  $dater4 as $data )
            @if (($data->lab_name)=="Special lab")
            <h1 class="card-title">{{$data->lab_name}}</h1>
            <p class="card-info">
                Capacity : {{$data->lab_capacity}}<br>
                Ac or Non Ac : @if ($data->lab_air_conditioner==null)
                                no
                            @else
                                {{ $data->lab_air_conditioner }}
                            @endif<br>
                Projector : @if ($data->lab_projector==null)
                            no
                        @else
                            {{$data->lab_projector}}
                        @endif<br>
                Sound System : @if ($data->lab_soundsystem==null)
                            no
                        @else
                            {{$data->lab_soundsystem}}
                        @endif<br>
                @endif
            @endforeach
            </p>
        </div>
    </div>
</div>
</body>
</html>
@endsection
