@extends('layout.header')

@section("content2")
        <li><a href="#">BACK</a></li>

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
            <div class="text-center">
                <h1>Retrive data</h1>
            </div>

            <form action="{{url('update1-lab/'.$lab->id)}}" method="POST">
                @csrf
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Lecturehall Name</td>
                    <td>Capacity</td>
                    <td>A/C</td>
                    <td>Projector</td>
                    <td>Sound System</td>
                    <td>Action</td>

                </thead>
                <tbody>

                <tr>
                    <td><input type="text" name="id" value="{{$lab->id}}" required disabled></td>
                    <td><input type="text" name="labname" value="{{$lab->lab_name}}" required></td>
                    <td><input type="text" name="labcapacity" value="{{$lab->lab_capacity}}" required></td>
                    <td><input type="checkbox" name="lab_air_conditioner" value="yes" ></td>
                    <td><input type="checkbox" name="lab_projector" value="yes" ></td>
                    <td><input type="checkbox" name="lab_soundsystem" value="yes" ></td>
                    <td>
                            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
                           <a href="/admin/lab/adminlabopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
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

