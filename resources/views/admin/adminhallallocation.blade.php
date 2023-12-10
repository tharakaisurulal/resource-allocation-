@extends('layout.header')

@section("content2")
        <li><a href="/admin/adminhome">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{asset('css/adminhallallocation.css')}}>
    <title>Document</title>
</head>
<body>
    <div>
        <h3 class="tit">Guest's Request</h3>

        @if (isset($dater1))
        <div class="d-flex justify-content-center div2">

           <table class="table table-dark">
               <thead>
                   <td>Name</td>
                   <td>Hall</td>
                   <td>Date</td>
                   <td>Start Time</td>
                   <td>End Time</td>
                   <td>Reason</td>
                   <td>Action</td>

               </thead>
               <tbody>
                   @foreach ($dater1 as $cdb)
               <tr>
                    <td>{{$cdb->name}}</td>
                    <td>{{$cdb->hall_name}}</td>
                    <td>{{$cdb->date}}</td>
                    <td>{{$cdb->start_time}}</td>
                    <td>{{$cdb->end_time}}</td>
                    <td>{{$cdb->reason}}</td>
                    <td>
                            <button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href='{{url('update-student/'.$cdb->id)}}'">
                              Suggestions
                            </button>
                    </td>
               </tr>
                   @endforeach
               </tbody>
             </table>
        </div>
        @else
        <div class="alert alert-danger div5">{{ 'No Data!' }}</div>
        @endif

        <h3 class="tit1">Lecturer's Request</h3>
        @if (isset($dater2))
        <div class="d-flex justify-content-center div2">

           <table class="table table-dark">
               <thead>
                   <td>Name</td>
                   <td>Hall</td>
                   <td>Date</td>
                   <td>Start Time</td>
                   <td>End Time</td>
                   <td>Reason</td>

               </thead>
               <tbody>
                   @foreach ($dater2 as $cdb)
               <tr>
                   <td>{{$cdb->name}}</td>
                   <td>{{$cdb->hall_name}}</td>
                   <td>{{$cdb->date}}</td>
                   <td>{{$cdb->start_time}}</td>
                   <td>{{$cdb->end_time}}</td>
                   <td>{{$cdb->reason}}</td>
               </tr>
                   @endforeach
               </tbody>
             </table>
        </div>
        @else
        <div class="alert alert-danger div5">{{ 'No Data!' }}</div>
        @endif
    </div>
    <div>
        <div class="but1">
        <button type="button" class="btn btn-warning" onclick="window.location.href='/academicsupportive/filtertimetable'">Check Availability</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='/admin/timetable/timetableopera'">Change Timetable</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='/admin/viewhallallocation'">Allocate LectureHall/Lab</button>
        </div><br>
    </div>
</body>
</html>
@endsection
