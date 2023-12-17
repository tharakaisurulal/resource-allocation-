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

        <link rel="stylesheet" href="{{asset('css/adminlecturehallopera.css')}}">
    </head>
    <body>
        <div class="div1">
            <div class="text-center">
                <h1>Update data</h1>
            </div>

            <form action="{{url('update1-guest/'.$guest->id)}}" method="POST">
                @csrf
                <div class="d-flex justify-content-center div2">
       <table class="table table-dark tb1">
        <tbody>
    <tr>
        <td>Id</td>
        <td><input type="text" name="id" value="{{$guest->id}}" required disabled></td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username" value="{{$guest->username}}" required></td>
    </tr>
    <tr>
        <td>Lecturer name</td>
        <td><input type="text" name="name" value="{{$guest->guest_name}}" required></td>
    </tr>
    <tr>
        <td>mobile</td>
        <td><input type="text" name="mobile" value="{{$guest->mobile}}" required></td>
    </tr>
    <tr>
        <td>position</td>
        <td><input type="text" name="position" value="{{$guest->guest_position}}" required></td>
    </tr>
    <tr>
        <td>faculty</td>
        <td><select name="faculty" id="faculty">
            <option value="">--Choose faculty--</option>
            <option value="Science" @selected($guest->guest_faculty == 'Science')>Faculty of Science</option>
            <option value="Management and Finance" @selected($guest->guest_faculty == 'level2')>Faculty of Management and Finance</option>
            <option value="Humanities and Social Sciences" @selected($guest->guest_faculty == 'Management and Finance')>Faculty of Humanities and Social Sciences</option>
            <option value="Fisheries and Marine Sciences and Technology" @selected($guest->guest_faculty == 'Humanities and Social Sciences')>Faculty of Fisheries and Marine Sciences and Technology</option>
            <option value="Medicine" @selected($guest->guest_faculty == 'Medicine')>Faculty of Medicine</option>
            <option value="Engineering" @selected($guest->guest_faculty == 'Engineering')>Faculty of Engineering</option>
            <option value="Technology" @selected($guest->guest_faculty == 'Technology')>Faculty of Technology</option>
            <option value="Agriculture" @selected($guest->guest_faculty == 'Agriculture')>Faculty of Agriculture</option>
            </select></td>
    </tr>
    <tr>
        <td>department</td>
        <td><input type="text" name="department" value="{{$guest->guest_department}}" required></td>
    </tr>
    <tr>
        <td>Action</td>
        <td>
            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
           <a href="/admin/guest/guestopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
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

