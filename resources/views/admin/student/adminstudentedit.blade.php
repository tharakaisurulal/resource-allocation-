@extends('layout.header')

@section("content2")
        <li><a href="/admin/student/stuopera">BACK</a></li>
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
<div class="noti">
            @if(session()->has('success'))
            <div class="alert alert-success div5">{{session()->get('success')}}</div>
        @endif

        @if(session()->has('fail'))
            <div class="alert alert-danger">{{session()->get('fail')}}</div>
        @endif
</div>

            <div class="text-center">
                <h1>Update data</h1>
            </div>

            <form action="{{url('update1-student/'.$student->id)}}" method="POST">
                @csrf
                <div class="d-flex justify-content-center div2">
       <table class="table table-dark tb1">
        <tbody>
    <tr>
        <td>Id</td>
        <td><input type="text" name="id" value="{{$student->id}}" required disabled></td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username" value="{{$student->username}}" required></td>
    </tr>
    <tr>
        <td>first name</td>
        <td><input type="text" name="fname" value="{{$student->first_name}}" required></td>
    </tr>
    <tr>
        <td>last name</td>
        <td><input type="text" name="lname" value="{{$student->last_name}}" required></td>
    </tr>
    <tr>
        <td>mobile</td>
        <td><input type="text" name="mobile" value="{{$student->mobile}}" required></td>
    </tr>
    <tr>
        <td>program</td>
        <td><select name="program" id="faculty">
            <option value="">--Choose program--</option>
            @foreach ( $dater2 as $data )
            <option value="{{$data->id}}" {{ ($student->program_Id == $data->id) ? 'selected' : '' }}>@php
                echo $data->program;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>semester</td>
        <td><select name="semester" id="faculty">
            <option value="">--Choose course--</option>
            <option value="semester1" @selected($student->semester == 'semester1')>Semester 1</option>
            <option value="semester2" @selected($student->semester == 'semester2')>Semester 2</option>
            </select></td>
    </tr>
    <tr>
        <td>level</td>
        <td><select name="level" id="faculty">
            <option value="">--Choose course--</option>
            <option value="level1" @selected($student->level == 'level1')>Level 1</option>
            <option value="level2" @selected($student->level == 'level2')>Level 2</option>
            <option value="level3" @selected($student->level == 'level3')>Level 3</option>
            </select></td>
    </tr>
    <tr>
        <td>Subject 1</td>
        <td><select name="subject1" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject1 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 2</td>
        <td><select name="subject2" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject2 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 3</td>
        <td><select name="subject3" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject3 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 4</td>
        <td><select name="subject4" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject4 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 5</td>
        <td><select name="subject5" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject5 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 6</td>
        <td><select name="subject6" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject6 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Subject 7</td>
        <td><select name="subject7" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject7 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>

    </tr>
    <tr>
        <td>Subject 8</td>
        <td><select name="subject8" id="faculty">
            <option value="">--Choose Course--</option>
            @foreach ( $dater3 as $data )
            <option value="{{$data->id}}" {{ ($student->subject8 == $data->id) ? 'selected' : '' }}>@php
                echo $data->course_name." ".$data->course_code;
            @endphp</option>

              @endforeach
        </select></td>
    </tr>
    <tr>
        <td>Action</td>
        <td>
            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
            <button class="btn btn-secondary btn-sm" type="button" onclick="history.back()" >Back</button>
    </td>
    </tr>
        </tbody>
      </table>
    </div>
        </form>
        </div>
    </body>
</html>
@endsection

