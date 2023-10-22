@extends('layout.header')

@section("content2")
        <li><a href="/admin/adminhome">BACK</a></li>

@endsection

@section("content")
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <link rel="stylesheet" href={{asset('css/adminlecturehallopera.css')}}>
    </head>
    <body>
        <div class="div1">
            <div class="div3">
            <button type="button" class="btn btn-warning" onclick="window.location.href='/admin/timetable/addtimetable'">
                Add Timetable
            </button>
            </div>

            <div class="text-center">
                <h1>Retrive data</h1>
            </div>

        @if(session()->has('success'))
            <div class="alert alert-success div5">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger">{{session()->get('fail')}}</div>
        @endif


            @if (isset($cusdata8))
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Program</td>
                    <td>Course code</td>
                    <td>Course name</td>
                    <td>Level</td>
                    <td>Semester</td>
                    <td>Day</td>
                    <td>Start Time</td>
                    <td>End Time</td>
                    <td>Lecturer</td>
                    <td>Lecturehall</td>
                    <td>Lab</td>
                    <td>Action</td>

                </thead>
                <tbody>
                    @foreach ($data1 as $cdb)
                <tr>
                    <td>{{$cdb->program}}</td>
                    <td>{{$cdb->course_code}}</td>
                    <td>{{$cdb->course_name}}</td>
                    <td>{{$cdb->level}}</td>
                    <td>{{$cdb->semester}}</td>
                    <td>{{$cdb->day}}</td>
                    <td>{{$cdb->start_time}}</td>
                    <td>{{$cdb->end_time}}</td>
                    <td>{{$cdb->lec_name}}</td>
                    <td>{{$cdb->lh_name}}</td>
                    <td>{{$cdb->lab_name}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Action
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="" >Edit</a></li>
                              <li><a class="dropdown-item" href="">Delete</a></li>
                              <li><a class="dropdown-item" href="">More</a></li>
                            </ul>
                          </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
              </table>

         </div>
         @else
         <div class="alert alert-danger div5">{{ 'No Data!' }}</div>
         @endif
        </div>


        <!-- Modal id="staticBackdrop"-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Do You want to change password?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary"><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Yes</a></button>
        </div>
      </div>
    </div>
  </div>

    </body>
</html>
@endsection

