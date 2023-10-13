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

            <form action="{{url('update1-program/'.$program->id)}}" method="POST">
                @csrf
         <div class="d-flex justify-content-center div2">

            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>program Name</td>
                    <td>Action</td>

                </thead>
                <tbody>

                <tr>
                    <td><input type="text" name="id" value="{{$program->id}}" required disabled></td>
                    <td><input type="text" name="program" value="{{$program->program}}" required></td>
                    <td>
                            <button class="btn btn-secondary btn-sm" type="submit" >Submit</button>
                           <a href="/admin/program/adminprogramopera"> <button class="btn btn-secondary btn-sm" type="button" >Back</button></a>
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

